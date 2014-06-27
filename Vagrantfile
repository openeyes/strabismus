# -*- mode: ruby -*-
# vi: set ft=ruby :

# Vagrantfile API/syntax version. Don't touch unless you know what you're doing!
VAGRANTFILE_API_VERSION = "2"

class String
  def to_b
    return true if self =~ /true/i;
    return false if self =~ /false/i;
    raise ArgumentError.new("#{self} is not a boolean value");
  end
end
class Symbol
  def to_env
    return "PHPDEVVM_#{self.to_s.upcase}";
  end
end
def parse_environment()
  parsed = { # We may want to change these defaults
    :name => "php_dev",
    :cpus => 1,
    :memory => "512",
    :host_ip => "172.16.0.1",
    :http_port => 9001,
    :mysql_port => 9002,
    :pgsql_port => 9003,
    :www_dir => "../",
    :srv_dir => "../",
    :manifest => "mysql.pp",
    :use_rsync => false,
    :interface => "",
  }
  types = {
    :string => [:name, :host_ip, :srv_dir, :www_dir, :manifest, :interface],
    :bool => [:use_rsync],
    :int => [:cpus, :memory, :http_port, :mysql_port, :pgsql_port],
  }
  # Strings are easy to handle
  types[:string].each do |k|
    env_key = k.to_env
    parsed[k] = ENV[env_key] if ENV[env_key]
  end
  # Bools not too hard either
  types[:bool].each do |k|
    env_key = k.to_env
    parsed[k] = ENV[env_key].to_b if ENV[env_key]
  end
  # Okay, integers are a little more annoying
  types[:int].each do |k|
    env_key = k.to_env
    begin
      parsed[k] = Integer(ENV[env_key])
    rescue; end
  end
  return parsed
end

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  parsed_env = parse_environment()
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  config.vm.network "forwarded_port", guest: 80, host: parsed_env[:http_port]

  # One for the local machine to have a consistent IP to use
  config.vm.network "private_network", ip: parsed_env[:host_ip]
  # One for the network as a whole
  if parsed_env[:interface]
    config.vm.network "public_network", :bridge => parsed_env[:interface]
  else
    config.vm.network "public_network"
  end
  if parsed_env[:use_rsync]
    config.vm.synced_folder parsed_env[:www_dir], "/var/www", type: "rsync"
    config.vm.synced_folder parsed_env[:srv_dir], "/srv/code", type: "rsync", rsync__exclude: ".git/"
  else
    config.vm.synced_folder parsed_env[:www_dir], "/var/www"
    config.vm.synced_folder parsed_env[:srv_dir], "/srv/code"
  end

  config.vm.provider :virtualbox do |vb|
    vb.customize [
      "modifyvm", :id,
      "--name", parsed_env[:name],
      "--cpus", parsed_env[:cpus],
      "--memory", parsed_env[:memory],
    ]
  end
  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "puppet/manifests"
    puppet.module_path = "puppet/modules"
    puppet.manifest_file = parsed_env[:manifest]
  end
end

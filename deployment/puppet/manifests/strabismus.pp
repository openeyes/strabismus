include phpdev::mysql
include phpdev::core

file { '/var/www/protected/runtime':
  ensure => directory,
  mode   => '0777',
}

file { '/var/www/assets':
  ensure => directory,
  mode   => '0777',
}

file { '/var/framework':
  ensure => link,
  target => '/srv/code/framework/framework',
}

exec { 'create database':
  unless  => '/usr/bin/mysql -uroot strabismus',
  command => '/usr/bin/mysql -uroot -e "create database strabismus"',
  require => Service['mysql'],
}

exec { 'create database user':
  unless  => '/usr/bin/mysql -ustrabismus -p strabismus',
  command => '/usr/bin/mysql -uroot -e "\
  grant all privileges on strabismus.* to \'strabismus\'@\'%\' identified by \'strabismus\';\
  grant all privileges on strabismus.* to \'strabismus\'@\'localhost\' identified by \'strabismus\';\
  flush privileges;"',
  require => Exec['create database']
}

exec { 'load dump':
  unless => '/usr/bin/mysql -uroot strabismus -e "select * from user"',
  command => '/usr/bin/mysql -uroot strabismus < /srv/code/strabismus_dataset_2014-06-03.sql',
  require => Exec['create database'],
}
    

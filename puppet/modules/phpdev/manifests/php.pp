class phpdev::php {

  package {'php5-cli':
    ensure  => present,
    require => Exec['apt-get update'],
  }

  package {'php5-apache':
    name => 'libapache2-mod-suphp',
    ensure => present,
    notify  => Service['apache2'],
  }

  package {'php5-apache-nophp':
    name => 'libapache2-mod-php5',
    ensure => absent,
    notify => Service['apache2'],
  }

  package { 'php5-curl':
    ensure  => present,
    require => [
      Exec['apt-get update'],
      Package['curl','php5-apache'],
    ],
    notify  => Service['apache2']
  }
}

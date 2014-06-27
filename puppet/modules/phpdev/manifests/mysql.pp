class phpdev::mysql {
  package { 'mysql-server':
    ensure  => latest,
    require => Exec['apt-get update'],
  }

  package { 'php5-mysql':
    ensure  => present,
    require => Package['php5-apache'],
    notify  => Service['apache2'],
  }

  service { 'mysql':
    ensure  => running,
    require => Package['mysql-server'],
  }

  file { 'mysql configuration':
    path    => '/etc/mysql/conf.d/phpdev.cnf',
    ensure  => present,
    source => "puppet:///modules/phpdev/mysql.cnf",
    require => Package['mysql-server'],
    notify  => Service['mysql'],
    mode    => 644,
  }
}

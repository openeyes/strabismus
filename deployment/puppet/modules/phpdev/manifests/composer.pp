class phpdev::composer {
  
  exec { "composer:fetch":
    cwd => '/srv/code',
    command => "/usr/bin/curl -sS https://getcomposer.org/installer | /usr/bin/php",
    creates => "/srv/code/composer.phar",
    require => [
      Package['curl', 'git-core', 'php5-cli', 'apache2'],
    ],
  } ->

  exec { "composer:install":
    cwd => '/srv/code',
    command => "/srv/code/composer.phar install --prefer-source --no-interaction --working-dir /srv/code",
  }

}

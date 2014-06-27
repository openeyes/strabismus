class phpdev::packages {
  package {'git-core':
    ensure => installed,
  }
  package {'curl':
    ensure => installed,
  }
  package {'postfix':
    ensure => installed,
  }
  package {'mailutils':
    ensure => installed,
  }
}

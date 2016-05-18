class php {

  $phplist = ["php5","php5-mysql",libapache2-mod-php5]

  package { $phplist:
    ensure => present,
  }

}


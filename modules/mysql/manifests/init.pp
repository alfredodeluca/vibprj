class mysql {

  Exec {
    path => ["/usr/bin", "/bin", "/usr/sbin", "/sbin", "/usr/local/bin", "/usr/local/sbin"]
  }

  $sqlpass="Mysql00"

# Install mysql server
  package { "mysql-server":
    ensure => present,
  }

# Ensure mysql runs
  service { "mysql":
    ensure => running,
    require => Package["mysql-server"],
  }
  exec { "set-mysql-password":
    unless => "mysqladmin -uroot -p$sqlpass status",
    command => "mysqladmin -uroot password $sqlpass",
    require => Service["mysql"],
  }
 # create db called vibrato then a table with id,fname,lname,location
  exec { "create-db":
    command => "mysql --host=localhost --user=root --password=$sqlpass < /vagrant/vibrato.sql",
    require => Exec["set-mysql-password"],
  }

}

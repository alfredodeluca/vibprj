class mysql {

# Install mysql server
  package { "mysql-server":
    ensure => present,
  }

# Ensure mysql runs
  service { "mysql":
    ensure => running,
  }

}

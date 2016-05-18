class apache {

# Install apache 
  package { "apache2":
    ensure => present,
  }

# Enable the website
  file {"/etc/apache2/sites-enabled":
    ensure => directory,
    recurse => true,
    purge => true,
    force => true,
    before => File["/etc/apache2/sites-enabled/vagrant_docroot"],
    require => Package["apache2"],
  }

  file { "/etc/apache2/sites-available/vagrant_docroot":
    ensure => present,
    source => "/vagrant/manifests/vagrant_docroot",
    require => Package["apache2"],
  }

  file { "/etc/apache2/sites-enabled/vagrant_docroot":
    ensure => link,
    target => "/etc/apache2/sites-available/vagrant_docroot",
    require => File["/etc/apache2/sites-available/vagrant_docroot"],
    notify => Service["apache2"],
  }

# Refresh apache if the file changes
  service { "apache2":
    ensure => running,
    require => Package["apache2"],
    subscribe => [
      File["/etc/apache2/sites-available/vagrant_docroot"]
    ],
  }

}

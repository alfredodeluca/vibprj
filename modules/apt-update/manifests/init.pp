class apt-upgate {

  # ensure local apt cache index is up to date before beginning
  exec { 'apt-get update':
    command => '/usr/bin/apt-get update'
  }
}

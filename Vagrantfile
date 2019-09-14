SUBNET="192.168.100"


Vagrant.configure(2) do |config|
  config.vm.define "vibrato" do |vibrato|
    vibrato.vm.box = "ubuntu/precise32"
    vibrato.vm.provision :puppet do |puppet|
      puppet.manifests_path = "manifests"
      puppet.manifest_file = "default.pp"
      puppet.module_path = "modules"
    end
#  config.vm.network :forwarded_port, guest: 80, host: 80
  config.vm.network "private_network", ip: "#{SUBNET}.10"
  config.vm.synced_folder "docroot/", "/vagrant/docroot/", :owner => "www-data"

  end
end

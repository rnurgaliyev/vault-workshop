Vagrant.configure("2") do |config|

  # lab01 machine
  config.vm.define "lab01" do |lab01|
    lab01.vm.box = "ubuntu/bionic64"
    lab01.vm.hostname = "lab01"
    lab01.vm.network "private_network", ip: "192.168.238.11"
    lab01.vm.provider "virtualbox" do |vb|
      vb.memory = "1024"
      vb.customize [ "modifyvm", :id, "--uartmode1", "disconnected" ]
      vb.customize [ "modifyvm", :id, "--natdnshostresolver1", "on" ]
    end
    lab01.vm.provision :file, source: "~/.ssh/id_rsa.pub", destination: "/tmp/host.pub"
    lab01.vm.provision :shell, inline: "cat /tmp/host.pub >> ~ubuntu/.ssh/authorized_keys"
  end

  # lab02 machine
  config.vm.define "lab02" do |lab02|
    lab02.vm.box = "ubuntu/bionic64"
    lab02.vm.hostname = "lab02"
    lab02.vm.network "private_network", ip: "192.168.238.12"
    lab02.vm.provider "virtualbox" do |vb|
      vb.memory = "1024"
      vb.customize [ "modifyvm", :id, "--uartmode1", "disconnected" ]
      vb.customize [ "modifyvm", :id, "--natdnshostresolver1", "on" ]
    end
    lab02.vm.provision :file, source: "~/.ssh/id_rsa.pub", destination: "/tmp/host.pub"
    lab02.vm.provision :shell, inline: "cat /tmp/host.pub >> ~ubuntu/.ssh/authorized_keys"
  end

    # lab03 machine
  config.vm.define "lab03" do |lab03|
    lab03.vm.box = "ubuntu/bionic64"
    lab03.vm.hostname = "lab03"
    lab03.vm.network "private_network", ip: "192.168.238.13"
    lab03.vm.provider "virtualbox" do |vb|
      vb.memory = "1024"
      vb.customize [ "modifyvm", :id, "--uartmode1", "disconnected" ]
      vb.customize [ "modifyvm", :id, "--natdnshostresolver1", "on" ]
    end
    lab03.vm.provision :file, source: "~/.ssh/id_rsa.pub", destination: "/tmp/host.pub"
    lab03.vm.provision :shell, inline: "cat /tmp/host.pub >> ~ubuntu/.ssh/authorized_keys"
  end

  # lab04 machine
  config.vm.define "lab04" do |lab04|
    lab04.vm.box = "ubuntu/bionic64"
    lab04.vm.hostname = "lab04"
    lab04.vm.network "private_network", ip: "192.168.238.14"
    lab04.vm.provider "virtualbox" do |vb|
      vb.memory = "1024"
      vb.customize [ "modifyvm", :id, "--uartmode1", "disconnected" ]
      vb.customize [ "modifyvm", :id, "--natdnshostresolver1", "on" ]
    end
    lab04.vm.provision :file, source: "~/.ssh/id_rsa.pub", destination: "/tmp/host.pub"
    lab04.vm.provision :shell, inline: "cat /tmp/host.pub >> ~ubuntu/.ssh/authorized_keys"
  end

  # lab05 machine
  config.vm.define "lab05" do |lab05|
    lab05.vm.box = "ubuntu/bionic64"
    lab05.vm.hostname = "lab05"
    lab05.vm.network "private_network", ip: "192.168.238.15"
    lab05.vm.provider "virtualbox" do |vb|
      vb.memory = "1024"
      vb.customize [ "modifyvm", :id, "--uartmode1", "disconnected" ]
      vb.customize [ "modifyvm", :id, "--natdnshostresolver1", "on" ]
    end
    lab05.vm.provision :file, source: "~/.ssh/id_rsa.pub", destination: "/tmp/host.pub"
    lab05.vm.provision :shell, inline: "cat /tmp/host.pub >> ~ubuntu/.ssh/authorized_keys"
  end

  # lab06 machine
  config.vm.define "lab06" do |lab06|
    lab06.vm.box = "ubuntu/bionic64"
    lab06.vm.hostname = "lab06"
    lab06.vm.network "private_network", ip: "192.168.238.16"
    lab06.vm.provider "virtualbox" do |vb|
      vb.memory = "1024"
      vb.customize [ "modifyvm", :id, "--uartmode1", "disconnected" ]
      vb.customize [ "modifyvm", :id, "--natdnshostresolver1", "on" ]
    end
    lab06.vm.provision :file, source: "~/.ssh/id_rsa.pub", destination: "/tmp/host.pub"
    lab06.vm.provision :shell do |s|
      s.inline = <<-EOF
        cat /tmp/host.pub >> ~ubuntu/.ssh/authorized_keys
        apt-get update
        apt-get -qy install python-minimal python-pip
        pip install ansible hvac
      EOF
    end
  end

end

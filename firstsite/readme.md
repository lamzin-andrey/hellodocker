# Installation

1. Install docker and docker-compose (
    For ubuntu 18.04 see https://docs.docker.com/install/linux/docker-ce/ubuntu/
    For ubuntu 20.04 see https://linuxconfig.org/how-to-install-docker-on-ubuntu-20-04-lts-focal-fossa
   )

2. `git clone https://github.com/lamzin-andrey/hellodocker.git`

3. `cd firstsite`

4. `mkdir docker/db`

5. `sudo docker network create front`

6. `sudo docker-compose up -d --build`

7. Write in your hosts file 

````ini
127.0.0.1 my.example.com
127.0.0.1 pma.example.com
````


# Start
`sudo docker-compose up -d --build`

# Stop
`sudo docker-compose down`
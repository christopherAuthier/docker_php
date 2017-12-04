<?php

echo 'Docker commands'. PHP_EOL;
echo '<hr>';

echo "docker build -t friendlyname .  # Create image using this directory's Dockerfile";
echo "<br/>";
echo "docker run -p 4000:80 friendlyname  # Run \"friendlyname\" mapping port 4000 to 80". PHP_EOL;
echo "docker run -d -p 4000:80 friendlyname         # Same thing, but in detached mode". PHP_EOL;
echo "docker container ls                                # List all running containers". PHP_EOL;
echo "docker container ls -a             # List all containers, even those not running". PHP_EOL;
echo "docker container stop <hash>           # Gracefully stop the specified container". PHP_EOL;
echo "docker container kill <hash>         # Force shutdown of the specified container". PHP_EOL;
echo "docker container rm <hash>        # Remove specified container from this machine". PHP_EOL;
echo "docker container rm $(docker container ls -a -q)         # Remove all containers". PHP_EOL;
echo "docker image ls -a                             # List all images on this machine". PHP_EOL;
echo "docker image rm <image id>            # Remove specified image from this machine". PHP_EOL;
echo "docker image rm $(docker image ls -a -q)   # Remove all images from this machine". PHP_EOL;
echo "docker login             # Log in this CLI session using your Docker credentials". PHP_EOL;
echo "docker tag <image> username/repository:tag  # Tag <image> for upload to registry". PHP_EOL;
echo "docker push username/repository:tag            # Upload tagged image to registry". PHP_EOL;
echo "docker run username/repository:tag                   # Run image from a registry". PHP_EOL;

echo '<hr>';

echo "docker stack ls                                            # List stacks or apps". PHP_EOL;
echo "docker stack deploy -c <composefile> <appname>  # Run the specified Compose file". PHP_EOL;
echo "docker service ls                 # List running services associated with an app". PHP_EOL;
echo "docker service ps <service>                  # List tasks associated with an app". PHP_EOL;
echo "docker inspect <task or container>                   # Inspect task or container". PHP_EOL;
echo "docker container ls -q                                      # List container IDs". PHP_EOL;
echo "docker stack rm <appname>                             # Tear down an application". PHP_EOL;
echo "docker swarm leave --force      # Take down a single node swarm from the manager". PHP_EOL;

echo '<hr>';

echo "docker-machine create --driver virtualbox myvm1 # Create a VM (Mac, Win7, Linux)". PHP_EOL;
echo "docker-machine create -d hyperv --hyperv-virtual-switch \"myswitch\" myvm1 # Win10". PHP_EOL;
echo "docker-machine env myvm1                # View basic information about your node". PHP_EOL;
echo "docker-machine ssh myvm1 \"docker node ls\"         # List the nodes in your swarm". PHP_EOL;
echo "docker-machine ssh myvm1 \"docker node inspect <node ID>\"        # Inspect a node". PHP_EOL;
echo "docker-machine ssh myvm1 \"docker swarm join-token -q worker\"   # View join token". PHP_EOL;
echo "docker-machine ssh myvm1   # Open an SSH session with the VM; type \"exit\" to end". PHP_EOL;
echo "docker node ls                # View nodes in swarm (while logged on to manager)". PHP_EOL;
echo "docker-machine ssh myvm2 \"docker swarm leave\"  # Make the worker leave the swarm". PHP_EOL;
echo "docker-machine ssh myvm1 \"docker swarm leave -f\" # Make master leave, kill swarm". PHP_EOL;
echo "docker-machine ls # list VMs, asterisk shows which VM this shell is talking to". PHP_EOL;
echo "docker-machine start myvm1            # Start a VM that is currently not running". PHP_EOL;
echo "docker-machine env myvm1      # show environment variables and command for myvm1". PHP_EOL;
echo "eval $(docker-machine env myvm1)         # Mac command to connect shell to myvm1". PHP_EOL;
echo "& \"C:\Program Files\Docker\Docker\Resources\bin\docker-machine.exe\" env myvm1 | Invoke-Expression   # Windows command to connect shell to myvm1". PHP_EOL;
echo "docker stack deploy -c <file> <app>  # Deploy an app; command shell must be set to talk to manager (myvm1), uses local Compose file". PHP_EOL;
echo "docker-machine scp docker-compose.yml myvm1:~ # Copy file to node's home dir (only required if you use ssh to connect to manager and deploy the app)". PHP_EOL;
echo "docker-machine ssh myvm1 \"docker stack deploy -c <file> <app>\"   # Deploy an app using ssh (you must have first copied the Compose file to myvm1)". PHP_EOL;
echo "eval $(docker-machine env -u)     # Disconnect shell from VMs, use native docker". PHP_EOL;
echo "docker-machine stop $(docker-machine ls -q)               # Stop all running VMs". PHP_EOL;
echo "docker-machine rm $(docker-machine ls -q) # Delete all VMs and their disk images". PHP_EOL;

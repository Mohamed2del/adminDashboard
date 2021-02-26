# Bundle

## Template to create a new Symfony project

### Require :

- Docker
- GIT
- Read Symfony documentation if needed

This template contains all you need to start a new project easily. All u need is open ``.env`` file and put your 
.ssh folder path on SSH_KEY_PATH key. It will allow your container to download depedencies on gitlab.

Once.. open terminal in your project folder and run :
>docker-compose up

It will create two container, one for nginx and another for PHP. Composer will being installed in your container.
Just enter in it with docker and run :
>composer create-project symfony/skeleton

http://locahost:80  

It's done ! :)
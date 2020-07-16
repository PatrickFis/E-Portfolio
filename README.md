Readme for git repo

Build this with the command:
sudo docker build -t <name> .
If you're not going to run this with a docker-compose file, then run it with this command:
sudo docker run -d -p 8080:80 <name>
Otherwise, just run this with this command:
sudo docker-compose up -d

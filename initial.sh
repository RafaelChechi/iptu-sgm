


#rm -rf src/vendor/ src/composer.lock

docker rm -f iptu-sgm

docker build . --file "Dockerfile" --no-cache --tag iptu-sgm

docker run -d -p 80:80 --name iptu-sgm iptu-sgm

docker ps
docker exec -it --user root iptu-sgm bash
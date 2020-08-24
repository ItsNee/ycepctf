#!/bin/bash

#NEE
cd ./netcatintome
pwd
command=$(docker-compose down)
echo "netcatintome has now been stopped!"
cd ../



cd ./injectme
pwd
command=$(docker-compose down)
echo "injectme has now been stopped!"
cd ../


cd ./safensound
pwd
command=$(docker-compose down)
echo "safensound has now been stopped!"
cd ../


cd ./supersecurelogin
pwd
command=$(docker-compose down)
echo "supersecurelogin has now been stopped!"
cd ../


cd ./xorhunt
pwd
command=$(docker-compose down)
echo "xorhunt has now been stopped!"
cd ../


#HRITHIE
cd ./canyourespond
pwd
command=$(docker-compose down)
echo "can you respond has now been stopped!"
cd ../


cd ./mrrobot
pwd
command=$(docker-compose down)
echo "mr robot has now been stopped!"
cd ../


cd ./siteseeing
pwd
command=$(docker-compose down)
echo "siteseeing has now been stopped!"
cd ../

















##LEAVE THIS AT THE BOTTOM! PLACE YOUR CONFIG ON TOP OF THIS PLZZZZZZZZZ ~NEE <3
#CTFD
cd /root/CTFd
pwd
command=$(docker-compose down)
echo "CTFd has now been stopped!"

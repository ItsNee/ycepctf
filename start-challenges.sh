#!/bin/bash

#NEE
#command=$(docker-compose up -d)
cd ./netcatintome
pwd
command=$(docker-compose up -d)
echo "netcatintome is up now!"
cd ../



cd ./injectme
pwd
command=$(docker-compose up -d)
echo "injectme is up now!"
cd ../


cd ./safensound
pwd
command=$(docker-compose up -d)
echo "safensound is up now!"
cd ../


cd ./supersecurelogin
pwd
command=$(docker-compose up -d)
echo "supersecurelogin is up now!"
cd ../


cd ./xorhunt
pwd
command=$(docker-compose up -d)
echo "xorhunt is up now!"
cd ../



#Hrithie
cd ./canyourespond
pwd
command=$(docker-compose up -d)
echo "can you respond is up now!"
cd ../


cd ./mrrobot
pwd
command=$(docker-compose up -d)
echo "mr robot is up now!"
cd ../


cd ./siteseeing
pwd
command=$(docker-compose up -d)
echo "siteseeing is up now!"
cd ../















##LEAVE THIS AT THE BOTTOM! PLACE YOUR CONFIG ON TOP OF THIS PLZZZZZZZZZ ~NEE <3
#CTFD
cd /root/CTFd
pwd
command=$(docker-compose up -d)
echo "CTFd is up now!"

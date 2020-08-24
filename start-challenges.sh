#!/bin/bash

#CTFD

cd /root/CTFd
pwd
command=$(docker-compose up -d)
echo "CTFd is up now!"


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

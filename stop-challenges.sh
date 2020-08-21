#!/bin/bash

#command=$(docker-compose up -d)
cd ./netcatintome
pwd
command=$(docker-compose down)
echo "netcatintome is up now!"
cd ../



cd ./injectme
pwd
command=$(docker-compose down)
echo "injectme is up now!"
cd ../


cd ./safensound
pwd
command=$(docker-compose down)
echo "safensound is up now!"
cd ../


cd ./supersecurelogin
pwd
command=$(docker-compose down)
echo "supersecurelogin is up now!"
cd ../


cd ./xorhunt
pwd
command=$(docker-compose down)
echo "xorhunt is up now!"
cd ../

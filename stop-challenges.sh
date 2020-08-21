#!/bin/bash

#command=$(docker-compose up -d)
cd ./netcatintome
pwd
command=$(docker-compose down)
echo "netcatintome is down now!"
cd ../



cd ./injectme
pwd
command=$(docker-compose down)
echo "injectme is down now!"
cd ../


cd ./safensound
pwd
command=$(docker-compose down)
echo "safensound is down now!"
cd ../


cd ./supersecurelogin
pwd
command=$(docker-compose down)
echo "supersecurelogin is down now!"
cd ../


cd ./xorhunt
pwd
command=$(docker-compose down)
echo "xorhunt is down now!"
cd ../

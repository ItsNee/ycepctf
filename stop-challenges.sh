#!/bin/bash

#NEE
cd ./netcatintome
pwd
command=$(docker-compose down)
echo "Netcat Into Me has now been stopped!"
cd ../



cd ./injectme
pwd
command=$(docker-compose down)
echo "Inject Me has now been stopped!"
cd ../


cd ./safensound
pwd
command=$(docker-compose down)
echo "Safe n Sound has now been stopped!"
cd ../


cd ./supersecurelogin
pwd
command=$(docker-compose down)
echo "Super Secure Login has now been stopped!"
cd ../


cd ./xorhunt
pwd
command=$(docker-compose down)
echo "XOR Hunt has now been stopped!"
cd ../


#HRITHIE
cd ./canyourespond
pwd
command=$(docker-compose down)
echo "Can You Respond has now been stopped!"
cd ../


cd ./mrrobot
pwd
command=$(docker-compose down)
echo "Mr Robot has now been stopped!"
cd ../


cd ./siteseeing
pwd
command=$(docker-compose down)
echo "Siteseeing has now been stopped!"
cd ../



#Ariel
cd ./AdminHijinx
pwd
command=$(docker-compose down)
echo "Admin Hijinx has now been stopped!"
cd ../

cd ./FastCash18Up
pwd
command=$(docker-compose down)
echo "FastCash18Up has now been stopped!"
cd ../

cd ./PythonEscape
pwd
command=$(docker-compose down)
echo "PythonEscape is has now been stopped!"
cd ../

cd ./SniffSniff
pwd
command=$(docker-compose down)
echo "SniffSniff has now been stopped!"
cd ../

cd ./SocialEngineering101
pwd
command=$(docker-compose down)
echo "SocialEngineering101 has now been stopped!"
cd ../


cd ./XSS4Kids
pwd
command=$(docker-compose down)
echo "XSS4Kids has now been stopped!"
cd ../















##LEAVE THIS AT THE BOTTOM! PLACE YOUR CONFIG ON TOP OF THIS PLZZZZZZZZZ ~NEE <3

#Hrithie (FTP)
command=$(apt-get remove vsftpd -y)
command=$(rm -rf /home/lol/)
echo "Fly To Pluto has now been stopped!"

#CTFD
cd /root/CTFd
pwd
command=$(docker-compose down)
echo "CTFd has now been stopped!"

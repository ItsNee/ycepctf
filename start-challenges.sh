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


#Ariel
cd ./AdminHijinx
pwd
command=$(docker-compose up -d)
echo "Admin Hijinx is up now!"
cd ../

cd ./FastCash18Up
pwd
command=$(docker-compose up -d)
echo "FastCash18Up is up now!"
cd ../

cd ./PythonEscape
pwd
command=$(docker-compose up -d)
echo "PythonEscape is up now!"
cd ../

cd ./SniffSniff
pwd
command=$(docker-compose up -d)
echo "SniffSniff is up now!"
cd ../

cd ./SocialEngineering101
pwd
command=$(docker-compose up -d)
echo "SocialEngineering101 is up now!"
cd ../


cd ./XSS4Kids
pwd
command=$(docker-compose up -d)
echo "XSS4Kids is up now!"
cd ../













##LEAVE THIS AT THE BOTTOM! PLACE YOUR CONFIG ON TOP OF THIS PLZZZZZZZZZ ~NEE <3

#Hrithie (FTP)
command=$(apt-get remove vsftpd -y)
command=$(apt-get install vsftpd)
echo "latest version of vsftpd installed"
sed -i 's/anonymous_enable=NO/anonymous_enable=YES/g' /etc/vsftpd.conf
command=$(echo 'anon_root=/home/lol' >> /etc/vsftpd.conf)
echo "vsftpd file configured"
cd /
cd ./home
command=$(mkdir lol)
cd ./lol
command=$(touch flag.txt)
command=$(echo 'flag{dwarf}' >> flag.txt)
command=$(systemctl start vsftpd)
command=$(systemctl enable vsftpd)
echo "vsftpd is enabled on boot"
echo "fly to pluto is up now!"

#CTFD
cd /root/CTFd
pwd
command=$(docker-compose up -d)
echo "CTFd is up now!"

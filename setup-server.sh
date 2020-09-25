#!/bin/bash
#
#PLZ RUN ME IN ROOOOOOOT
#Hi if this breaks..... Discord:Nee#9999
#
echo " "
echo "INSTALLING DOCKER, DOCKER-COMPOSE and GIT!"
echo " "
sudo apt install docker.io docker-compose git -y
sudo cd /root/
echo " "
echo "SETTING UP CTFd!"
echo " "
git clone https://github.com/CTFd/CTFd.git
# cd CTFd
# docker-compose up -d 
echo " "
echo "SETTING UP YCEP CTF CHALLENGES!"
echo " "
# cd ../
git clone https://github.com/ItsNee/ycepctf.git
echo " "
echo "SETTING UP SYSTEMD FOR YCEP CTF!"
echo " "
cd ycepctf
cp ctf.service /etc/systemd/system/
systemctl start ctf.service
systemctl enable ctf.service
cp ctfstop.service /etc/systemd/system/
systemctl start ctfstop.service
systemctl enable ctfstop.service
chmod 777 start-challenges.sh
chmod 777 stop-challenges.sh
chmod 777 restart-challenges.sh
echo " "
echo "STARTING CHALLENGES!"
echo " "
./start-challenges.sh
echo " "
echo "YCEP CTF HAS NOW BEEN SETUP!"
echo "VISIT PORT 80 AND PROFFFFITT??"
echo " "




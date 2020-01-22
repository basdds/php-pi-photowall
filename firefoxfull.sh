#!/bin/bash

# /home/pi/firefoxfull.sh 
# This scripts starts firefox in full screen mode on a raspberry pi. 
# requres firefox and the xdotool package. 
# On raspbian: sudo apt-get install firefox-esr && sudo apt-get install xdotool   

export export DISPLAY=:0
firefox 'http://192.168.1.2' & # change the URL to point to the photowall webserver on your local network
sleep 20
xdotool key F11 # hit full screen

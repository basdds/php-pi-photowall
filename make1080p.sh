#!/bin/bash

# /var/www/make1080p.sh
# script for downsizing your 'photowall' pictures to 1080p (average monitor resolution) 
# WARNING: make sure your files in the 'photowall' dir are copies of your original footage!
# Requires the imagemagick package
# on raspbian: sudo apt-get install imagemagick

echo > /tmp/image-1080-error.log
cd /var/www/photowall/
mkdir ../1080
echo "logging to /tmp/image-1080-error.log"
for i in $(find *.jpg); do convert -verbose -resize 'x1080' $i ../1080/$i 2>>/tmp/image-1080-error.log; done
rm -rvf * 
mv ../1080/* . 
rmdir ../1080

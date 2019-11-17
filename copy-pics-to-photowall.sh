#!/bin/bash
# one-liner to recursively find all jpg pictures in a working directory and copy them to your 'photowall': 
# renaming all files to their md5 hash, like 'fc418381d242b0e7cf491153e2497be5.jpg'
find ./ -type f | grep -i jpg |perl -MDigest::MD5 -ne 'chomp; print "cp -n \"$_\" /var/www/frame/photowall/". Digest::MD5::md5_hex($_) . ".jpg\n" ' |sh

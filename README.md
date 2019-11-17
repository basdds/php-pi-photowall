# php-pi-photowall
A simple PHP script, for displaying randomly-chosen pictures on my 6 PiWall nodes.

**About this Script** 

A long time ago, I've built a 6*2 'PiWall'; A grid of 6 old 19' Monitors, each having a Raspberry Pi behind it. This PiWall is capable of running the http://www.piwall.co.uk/ video streaming software. See these video's for what this 'piwall' can do. 

https://www.youtube.com/watch?v=Kru--U1kRy8 

https://www.youtube.com/watch?v=ba8TSUSKBKM

And how it was built, using some wood for a frame :-) 

https://www.facebook.com/bas.dds.nl/media_set?set=a.1429959373697741.1073741893.100000510777171&type=1&l=a61e0e0002

The video streaming is fun! However.. All Pi's also have a full desktop with a web browser. Each Pi-Screen is running the Ubuntu-Mate distro for Arm.

I was looking for a easy way to show a collection of (20k) pictures ramdomly on each screen. 

**Usage** 

On any PHP capable webserver; create this folder structure, where 'frame' can be anything you want of course.

I suggest using one of the Pi's on your local network running this webserver; for faster content delivery.

```
/var/www/frame
/var/www/frame/photowall
/var/www/frame/thummbs
```

Put your collection of pictures in the folder 'photowall' and the PHP script in the main folder. (in this example in /var/www/frame/ my local webserver's DocumentRoot)

Then fire up your browser(s)   

**Addons** 

I will add some extra scripts for managing the picture collection later.

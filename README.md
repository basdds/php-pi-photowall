# php-pi-photowall
A simple PHP script, for displaying randomly-chosen pictures on my 6 PiWall nodes.

**About this Script** 

A few years ago, I've built a 6*2 'PiWall'; A grid of 6 old 19' Monitors, each having a Raspberry Pi behind it. This PiWall is capable of running the http://www.piwall.co.uk/ video streaming software. See this video for what this 'piwall' can do. 

https://www.youtube.com/watch?v=Kru--U1kRy8 

And how it was built, using some wood for a supporting frame :-) 

https://www.facebook.com/bas.dds.nl/media_set?set=a.1429959373697741.1073741893.100000510777171&type=1&l=a61e0e0002

The video streaming is fun! However.. All Pi's also have a full desktop with a web browser. Each Pi-Screen is running the Ubuntu-Mate distro.

I was looking for a easy way to show a collection of (20k) pictures ramdomly on each screen, so I've made this PHP script.

**Usage** 

On any PHP capable webserver; download this repo in the documentroot, or create this (example) folder structure:

```
/var/www/frame
/var/www/frame/photowall
```

I suggest using one of the Pi's on your local network running this webserver; for faster content delivery.

Put your collection of pictures in the folder 'photowall' and the PHP script + jquery.min.js file in the main folder. (in this example /var/www/frame/ is my local webserver's DocumentRoot)

Then fire up your browser(s) to point it at your webserver + F-11!

When cloning this repo, you'll only need the index.php and jquery.min.js file. The 'photowall' folder conatains some example pictures, for demonstration. 


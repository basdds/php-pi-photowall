# php-pi-photowall
A simple PHP script, for displaying randomly-chosen pictures on my 6 PiWall nodes.

**About this Script** 

See: [This blogpost](https://bas.rel.nl/2020/01/21/Raspberry-Pi-Photowall.html)

**Usage**

On any PHP capable webserver; download the repo in the documentroot of your webserver and create this folder structure:

```
/var/www/frame
/var/www/frame/photowall
```

I suggest using one of the Pi's on your local network, for running this webserver. For fast **local** content delivery. (I use Nginx + php-fpm on #wall1)

Put your collection of pictures in the folder 'photowall' and the PHP script + jquery.min.js file in the main folder. (in this example /var/www/frame/ is my local webserver's DocumentRoot)

Then fire up your browser(s) to point it at your webserver + F-11! (or script this with xdotool)

When cloning this repo, you'll only need the index.php and jquery.min.js file. The 'photowall' folder contains some example pictures, just for demonstration.

# Multi-Env Config

I'm used to developing with multiple environments. A typical site that I work on 
may live in a variety of different locations. In this multi-environment config I 
have accounted for the environments that I use the most frequently. You can adapt 
this configuration to suit your own needs by following the config.ENVIRONMENT.php 
naming convention I've used in the config/ directory.

If you develop locally, push to a staging site that you maintain and push final 
releases to a production site, you may only want the following file structure:

* craft/config/config.local.php
* craft/config/config.staging.php
* craft/config/config.prod.php

## Changes in convention

### Database Information

By default Craft stores database information in craft/config/db.php. I've learned 
that it's much easier to maintain all environment information in a single place.  
It's especially nice for maintaining a claen repository without managing multiple 
files.

db.php now simply acts as a place to store shared defaults across the databases.

### Multiple Config.* Files

By default Craft utilizes a single general.php file for maintaing a site's config
settings. The documented method for maintaing multiple environments is to build 
upon that array. We're still doing that here, but we're only creating an array of
the values that we need and we're storing the individual arrays seperately for 
a bit more seperation. 

### I'm not supporting web.config

I don't know anything about this Microsoft stuff... Sorry.

### Craft Environment is set in .htaccess

I would rather never have to touch the index.php file again and it's a messy file
to ignore. On the other hand, .htaccess files often need to be modified for 
different environments anyway, so I'm setting $_SERVER['ENV'] there and calling 
to it in public/index.php.

## More documentation coming soon.
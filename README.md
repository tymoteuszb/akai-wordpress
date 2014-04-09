== AKAI Wordpress Webpage

## Requirements

* apache + php 5.4
* npm
* ruby (`sass` gem)
* mysql

## Stack

* [YeoPress generator](wesleytodd/YeoPress) - used only on beginning
* [WordMove](https://github.com/welaika/wordmove) - easily deploy Wordpress to staging/production servers
* [grunt-wp-theme](https://github.com/10up/grunt-wp-theme) - configure theme with grunt, and .sass files

## Installation

1. Clone the repo or copy the app from other server by PHP
2. Configure database access in wp-config.php
3. See if all is working correctly
4. `cd wp-content/themes/akai-new && npm install && grunt build`

## Usage

#### Install a plugin

`yo wordpress:plugin`

#### Configure theme

```
cd wp-content/themes/akai-new && grunt
# Now you can edit akai-new theme.

# Don't manually edit ./assets/css/*.css and ./assets/js/*.js files!
# Grunt will automatically compile ./assets/ files from ./assets/css/src/*.sass and ./assets/js/src/*.js files.
```

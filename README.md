== AKAI Wordpress Webpage

## Stack

* [YeoPress generator](wesleytodd/YeoPress) - used only on beginning
* [WordMove](https://github.com/welaika/wordmove) - easily deploy Wordpress to staging/production servers
* [grunt-wp-theme](https://github.com/10up/grunt-wp-theme) - configure theme with grunt, and .sass files

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

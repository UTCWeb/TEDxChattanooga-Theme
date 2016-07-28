```
       _____ ___________      _____ _           _   _   
      |_   _|  ___|  _  \    /  __ \ |         | | | |  
        | | | |__ | | | |_  _| /  \/ |__   __ _| |_| |_ 
        | | |  __|| | | \ \/ / |   | '_ \ / _` | __| __|
        | | | |___| |/ / >  <| \__/\ | | | (_| | |_| |_ 
        \_/ \____/|___/ /_/\_\\____/_| |_|\__,_|\__|\__|
        
```

# TEDx-Theme

This theme was forked from an origina that was designed and coded by [The Working Group](http://twg.ca) and [TEDxToronto](http://www.tedxtoronto.com) in the hopes that other TEDx organizations will find this easy to use to promote and manage their own events.

We have modified some features and tweaked some layouts to better fit our needs at [TEDxChattanooga](https://www.tedxchattanooga.com/).

### Requirements

* **PHP 5.4** or greater
* **MySQL 5.0** or greater
* The **mod_rewrite** Apache module or similar configuration for Nginx
* A recent version of **WordPress**

### Installation (Developers)

* `cd /wordpress/wp-content`
* `git clone git@github.com:twg/TEDxTheme.git`
* Install the plugin dependencies:
    * [Advanced Custom Fields](http://www.advancedcustomfields.com/)
    * [Option Tree](https://wordpress.org/plugins/option-tree/)


### Development

We've done our best to setup an efficient workflow using [Gulp.js](http://gulpjs.com/) and [Bower](http://bower.io/). You'll need to have `npm` installed before getting started. Development requires an understanding of the following commands:

* `npm install` - Install development dependencies
* `gulp watch` - Starts the Grunt task that builds css and js. Also has a livereload server running
* `gulp vendor-js vendor-css` - Concats and minifies Bower dependencies into a single `plugin.min.js` file. These dependencies are declared in the `Gulpfile.js`. To add a new plugin we recommend installing it with Bower and then declaring it in the gulp file.

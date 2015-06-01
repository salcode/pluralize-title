Pluralize Title - WordPress Plugin
==================================

When active this plugin pluralizes all post titles on display.
For example: a post titled "Apple", would display as "Apples"

This plugin has little use on its own but is intended as a demonstration of
adding third-party code to a plugin using [Composer](http://getcomposer.org).

Is this Plugin Broken?
----------------------
When you try to activate this plugin, you may see error messages like

    Warning: require(vendor/autoload.php): failed to open stream: No such file or directory

and/or

    Fatal error: require(): Failed opening required 'vendor/autoload.php'

This is because there is third-party code that is not included in this
repository.

### How to Load Third-Party Code via Composer
1. [Install Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx),
my short version from the command line on a Mac is  
`curl -sS https://getcomposer.org/installer | php;mv composer.phar /usr/local/bin/composer`
2. Load the third-party code as defined in __composer.json__ by running  
`composer install` from the root directory of this plugin

Now the third-party code is added in the directory `vendor/` within the plugin
along with auto-loading code that the plugin takes advantage of.

Author
------
This plugin was initially created by
[Sal Ferrarello](http://salferrarello.com/)
([@salcode](http://twitter.com/salcode))
as part of his
[2015 WordCamp Philly](http://philly.wordcamp.org/2015/) presentation
[Getting Started with Composer](https://philly.wordcamp.org/2015/session/getting-started-with-composer/).

You may also want to read [Sal's posts on Composer](http://salferrarello.com/tag/composer/)




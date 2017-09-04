# WP Project Base
## Version: 0.0.0

### By Bain Design

## 1. Setup

- [NPM]. Open project directory in terminal and run `npm install` to install all grunt plugins. See `package.json`for details. 
- Run `bower install` to download Bower components (and their dependencies) to `/bower_components`. See `bower.json`for details.
- Run `grunt copyassets`to copy assets from `/bower_components`to the appropriate theme directory. See `Gruntfile.js`for details.

## 2. Development

- Run `grunt` to compile your Sass and run the watch task. See `Gruntfile.js`for details.

### This project uses Git Flow

[NPM]: https://www.npmjs.com/
[interconnectit/Search-Replace-DB]: https://github.com/interconnectit/Search-Replace-DB
[markbaindesign/mbd-wp-deploy-scripts]: https://github.com/markbaindesign/mbd-wp-deploy-scripts
[mbd-wp-deploy-scripts/scripts/README.md]: https://github.com/markbaindesign/mbd-wp-deploy-scripts/blob/master/scripts/README.md
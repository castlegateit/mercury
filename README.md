# Mercury

Mercury is a basic site template written in [PHP](https://www.php.net/) and intended for use on an [Apache](https://httpd.apache.org/) web server. It uses [npm](https://www.npmjs.com/) and [Composer](https://getcomposer.org/) to manage its PHP dependencies and [Gulp](https://gulpjs.com/) to compile its CSS and JavaScript files.

## Install

    git clone https://github.com/castlegateit/mercury.git
    cd mercury
    composer install
    npm install

## Core

The contents of the `core` directory are essential parts of Mercury and should not be modified with the rest of the site.

## Extend

The site uses [Boostrap](https://getbootstrap.com/) and [Atlas](https://github.com/castlegateit/atlas) to provide basic styles. The class name prefix used by Atlas components is set in the `config.json` file, which is read by Gulp and PHP to ensure that the prefix is set consistently in the HTML, CSS, and JavaScript output.

The prefix is available as `$atlas-prefix` in Sass, `ATLAS_PREFIX` in JavaScript, and `ATLAS_PREFIX` in PHP.

### CSS

Edit the following files to configure the theme:

*   Edit `src/scss/_bootstrap.scss` to override the default Bootstrap variables defined in `node_modules/bootstrap/scss/_variables.scss`.
*   Edit `src/scss/_atlas.scss` to override the default Atlas variables defined in `node_modules/@castlegate/atlas/src/scss/_variables.scss`.

You can also edit `src/scss/style.scss` to provide your own styles. You will need to run `gulp` or `gulp watch` to compile the production CSS files.

As far as possible, the CSS should be written using the [BEM](http://getbem.com/) method. Each __block__ should have its own Sass file in `src/scss/components`.

### JavaScript

The site includes [jQuery](https://jquery.com/), Bootstrap, Atlas. Any additional files in the `src/js` directory will be compiled into the production JavaScript files when you run `gulp`.

Third-party scripts should be installed with npm. For example:

    npm install --save-dev @castlegate/jquery-truncate
    npm install --save-dev magnific-popup
    npm install --save-dev tiny-slider

You will then need to edit `gulpfile.js` and `src/scss/style.scss` to include the necessary files. Example Gulp configuration:

~~~ javascript
const config = {
    paths: {
        src: {
            css: './src/scss/*.scss',
            js: [
                './node_modules/jquery/dist/jquery.js',
                './node_modules/bootstrap/dist/js/bootstrap.js',
                './node_modules/@castlegate/atlas/src/js/**/*.js',
                '!./node_modules/@castlegate/atlas/src/js/atlas.js',

                './node_modules/@castlegate/jquery-truncate/dist/truncate.js',
                './node_modules/magnific-popup/dist/jquery.magnific-popup.js',
                './node_modules/tiny-slider/dist/tiny-slider.js',

                './src/js/**/*.js'
            ]
        }
        // ...
    },
    // ...
};
~~~

Example Sass import:

~~~ scss
// Framework and library source
@import 'node_modules/bootstrap/scss/bootstrap';
@import 'node_modules/@castlegate/atlas/src/scss/atlas';
@import 'node_modules/magnific-popup/src/main';
@import 'node_modules/tiny-slider/src/tiny-slider';
// ...
~~~

You can also add files to `src/js` to provide your own JavaScript code. You will need to run `gulp` or `gulp watch` to compile these files into the production JavaScript file.

### PHP

#### Constants

The `config.php` file contains various constants available on all pages of the site. You can edit or add to these constants to provide different values across the site.

#### Pages and components

Pages are PHP files stored in the `pages` directory. Page requests are rewritten so that, for example, the `/about/` URL will load the `pages/about.php` file. Requests without a trailing slash or with a file extension will redirect to their corresponding canonical URLs, which never have a file extension and always end in a slash.

Pages may load components from the `components` directory. As far as possible, each component file should contain a single BEM block and should have a corresponding Sass file defining the styles for that block. For example `components/text-box.php` would contain a block with the BEM class `text-box` and the styles for that class would be defined in `src/scss/components/_text-box.scss`.

#### Classes

PHP classes should be saved as separate files in the `classes` directory and should follow the [PHP-FIG](https://www.php-fig.org/) standards. The classes defined in this directory are autoloaded by Composer in the `Castlegate\Mercury\Theme` namespace.

#### Functions

PHP function should be saved in the `functions.php` file. These functions will also be autoloaded by Composer in the `Castlegate\Mercury\Theme` namespace.

#### Composer

Third-party PHP code should be installed via Composer. For example:

    composer require phpmailer/phpmailer
    composer require spatie/schema-org

### Static files

Static files, including images, should be stored in the `dist` directory. For example, images would be stored in `dist/images`. Do not edit the compiled CSS and JavaScript files in `dist/css` and `dist/js`.

## License

Copyright (c) 2019 Castlegate IT. All rights reserved.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see <https://www.gnu.org/licenses/>.

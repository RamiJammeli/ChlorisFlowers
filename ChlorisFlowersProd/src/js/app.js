/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../styles/app.css';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.

const $ = require('jquery')
require('popper.js')
require('instafeed')
require('wowjs')
require('wow.js')
require('slick-carousel')
require('slick-slider')
require('webpack-jquery-ui');

global.$ = global.jQuery = $;
require('bootstrap')
console.log('Hello Webpack Encore! Edit me in assets/app.js');

require('../styles/style.css')
require('../styles/all-icon-font.css')
require('../styles/css-plugins.css')
require('../styles/responsive.css')
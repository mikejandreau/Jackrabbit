// PROJECT VARIABLES
var projectURL          = 'dev3';          // project URL, can be "localhost:3000" or something else 
var styleSource         = './sass/style.scss';  // path to main SCSS file
var styleDestination    = './';                 // location to save compiled CSS file
var scriptSource        = [ './js/src/class-helpers.js', 
                            './js/src/navigation.js', 
                            './js/src/scrollup.js' ]; // Path to JS vendor and custom files in order
var scriptDestination   = './js';           // location to save compiled/minified JS file
var scriptBabelPreset   = '@babel/env';         // ES6 preset
var scriptFilename      = 'scripts.min.js';       // filename for compiled/minified JS
var watchPathFiles      = './**/*.php';         // watch path for PHP template files
var watchPathStyles     = './sass/**/*.scss';   // watch path for SCSS
var watchPathScripts    = './js/src/*.js';          // watch path for JS

// GULP PLUGINS
const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass');
const minifyCSS = require('gulp-csso');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const browserSync = require('browser-sync').create();

// STYLE TASK - Compile SCSS, minify, save to root directory
function css() {
    return src(styleSource, { sourcemaps: true })
        .pipe(sass())
        .pipe(minifyCSS())
        .pipe(dest(styleDestination), { sourcemaps: true })
        .pipe(browserSync.stream());
}

// SCRIPTS TASK - Get JS source files, compile, concat, rename, minify, save to JS folder
function js() {
    return src(scriptSource, { sourcemaps: true })
        .pipe(babel({
            presets: [scriptBabelPreset]
        }))
        .pipe(concat(scriptFilename))
        .pipe(dest(scriptDestination, { sourcemaps: true }));
}

// BROWSERSYNC - Live reload, CSS/JS injection, and localhost tunneling
function browser() {
    browserSync.init({
        proxy: projectURL,
        files: [ watchPathFiles ]
    });

    watch(watchPathStyles, css);
    watch(watchPathScripts, js).on('change', browserSync.reload);
}

exports.css = css;
exports.js = js;
exports.default = browser;
var gulp = require('gulp');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var flatten = require('gulp-flatten');

var watchers = {
    scss: ['./scss/**/*.scss'],
    js: ['./js/**/*.js']
};

var paths = {
    node: ['./node_modules/'],
    dist: ['../dist/'],
    img: ['./img/'],
    fonts: ['./fonts/'], 
    scss: ['./scss/'],
    js: ['./js/']
};

gulp.task('images', function() {

    gulp
        .src([
            paths.img+'**/*'
        ])
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest(paths.dist+'img'));

});

gulp.task('fonts', function() {

    gulp.src( paths.fonts+'**/*')
        .pipe(flatten())
        .pipe(gulp.dest(paths.dist+'fonts'));

});


gulp.task('scss', function(done) { 

    gulp
        .src([
            paths.scss+'app.scss'
        ])
        .pipe(sass({
            errLogToConsole: true,
            includePaths: [
                paths.node+'foundation-sites/scss',
                paths.node+'hamburgers/_sass/hamburgers/'
            ]
        }))
        .pipe(gulp.dest(paths.dist+'css/'))
        .pipe(minifyCss({
            keepSpecialComments: 0
        }))
        .pipe(rename({ extname: '.min.css' }))
        .pipe(gulp.dest(paths.dist+'css/'))
        .on('end', done);
});

gulp.task('js', function(done) {

    gulp
        .src([
            paths.node+'jquery/dist/jquery.js',
            paths.js+'app.js'
        ])
        .pipe(concat('app.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(paths.dist+'js'))
        .on('end', done);
});

gulp.task('watch', function() {

    gulp.watch(watchers.scss, ['scss']);
    gulp.watch(watchers.js, ['js']);

});

gulp.task('install', ['images', 'fonts', 'scss', 'js']);
gulp.task('default', ['scss', 'js']);
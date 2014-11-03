//load plugins
var gulp             = require('gulp'),
    compass          = require('gulp-compass'),
    minifycss        = require('gulp-minify-css'),
    uglify           = require('gulp-uglify'),
    rename           = require('gulp-rename'),
    concat           = require('gulp-concat'),
    plumber          = require('gulp-plumber'),
    path             = require('path');
//styles
gulp.task('styles', function() {
    return gulp.src(['src/scss/**/*.scss'])
        .pipe(compass({
            css: 'html/css',
            sass: 'src/scss',
            image: 'html/images'
        }))
        .pipe(gulp.dest('html/css'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(minifycss())
        .pipe(gulp.dest('html/css'));
});

//scripts
gulp.task('scripts', function() {
    return gulp.src('src/js/**/*.js')
        .pipe(concat('main.js'))
        .pipe(gulp.dest('html/js'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify())
        .pipe(gulp.dest('html/js'));
});

//watch
gulp.task('live', function() {

    //watch .scss files
    gulp.watch('src/scss/**/*.scss', ['styles']);

    //watch .js files
    gulp.watch('src/js/**/*.js', ['scripts']);

    //reload when a template file, the minified css, or the minified js file changes
    gulp.watch('templates/**/*.html', 'html/css/styles.min.css', 'html/js/main.min.js', function(event) {
        gulp.src(event.path)
            .pipe(plumber())
    });
});
gulp.task('default',['styles','scripts','live']);
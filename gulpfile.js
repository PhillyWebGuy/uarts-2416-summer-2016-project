var gulp = require('gulp'),
    concat = require('gulp-concat'),
    clean = require('gulp-clean'),
    cleanCSS = require('gulp-clean-css'),
    copy = require('gulp-copy');
 
gulp.task('minify-css', function() {
  return gulp.src('./src/styles/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./dist'));
});

gulp.task('copy-files', function() {
	 gulp.src('./src/php/*.php', {cwd: './'}).pipe(gulp.dest('./dist/php'));
	 gulp.src('./src/html/*.php', {cwd: './'}).pipe(gulp.dest('./dist'));
	 gulp.src('./node_modules/bootstrap/dist/css/*.css', {cwd: './'}).pipe(gulp.dest('./dist/css'));
	 gulp.src('./node_modules/bootstrap/dist/fonts/*', {cwd: './'}).pipe(gulp.dest('./dist/fonts'));
});

// Delete the dist directory
gulp.task('clean', function() {
 return gulp.src(bases.dist)
 .pipe(clean());
});

gulp.task('libraries', function() {
  return gulp.src(['./node_modules/jquery/dist/jquery.js','./node_modules/underscore/underscore.js', './node_modules/bootstrap/dist/js/bootstrap.js'])
    .pipe(concat('libraries.js'))
    .pipe(gulp.dest('./dist/scripts/'));
});

gulp.task('scripts', function() {
  return gulp.src(['./src/scripts/*.js'])
    .pipe(concat('app.js'))
    .pipe(gulp.dest('./dist/scripts/'));
});

gulp.task('default', ['libraries', 'scripts', 'minify-css', 'copy-files']);




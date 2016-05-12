'use strict';

// *************************************
//  Gulpfile
// *************************************

var gulp         = require('gulp');
var sass         = require('gulp-sass');
var shell        = require('gulp-shell');
var autoprefixer = require('gulp-autoprefixer');
var browserSync  = require('browser-sync').create();

// -------------------------------------
//  Options
// -------------------------------------

var options = {
	sass: {
		files	    : 'assets/scss/**/*.scss',
		destination : '_site/assets/css/'
	}
};

// -------------------------------------
//  Task: build
// -------------------------------------

gulp.task('build', shell.task(['jekyll serve']));

// -------------------------------------
//  Task: serve with browser-sync
// -------------------------------------

gulp.task('serve', function () {
	browserSync.init({server: {baseDir: '_site/'}});
	gulp.watch(options.sass.files, ['styles']);
	gulp.watch('_site/**/*.*').on('change', browserSync.reload);
});

// -------------------------------------
//  Task: styles
// -------------------------------------

gulp.task('styles', function() {
	return gulp.src(options.sass.files)
		.pipe(sass({outputStyle: 'compressed'}))
		.pipe(autoprefixer('last 2 versions', '> 2%'))
		.pipe(gulp.dest(options.sass.destination))
		.pipe(browserSync.stream());
});

// -------------------------------------
//  Task: deploy
// -------------------------------------

gulp.task('deploy', shell.task(['jekyll build && rsync -vrzc --delete --exclude=wildside --exclude=bf --exclude=st _site/ edmundojr:www']));

// -------------------------------------
//  Task: default
// -------------------------------------

gulp.task('default', ['build', 'serve']);

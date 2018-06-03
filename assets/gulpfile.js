var gulp           = require('gulp'),
		gutil          = require('gulp-util' ),
		sass           = require('gulp-sass'),
		browserSync    = require('browser-sync'),
		concat         = require('gulp-concat'),
		uglify         = require('gulp-uglify'),
		cleanCSS       = require('gulp-clean-css'),
		rename         = require('gulp-rename'),
		del            = require('del'),
		imagemin       = require('gulp-imagemin'),
		cache          = require('gulp-cache'),
		autoprefixer   = require('gulp-autoprefixer'),
		ftp            = require('vinyl-ftp'),
		notify         = require("gulp-notify"),
		rsync          = require('gulp-rsync'),
		purify         = require('gulp-purifycss');


gulp.task('js', function() {
	return gulp.src([
		'scripts/*.js',
		])
	.pipe(concat('scripts.min.js'))
	.pipe(gulp.dest('dist/js/'));
});

gulp.task('sass', function() {
	return gulp.src('scss/*.scss')
	.pipe(sass({outputStyle: 'expand'}).on("error", notify.onError()))
	.pipe(rename({suffix: '.min', prefix : ''}))
	.pipe(autoprefixer(['last 15 versions']))
	//.pipe(cleanCSS()) //розкоментувати для мініфікації
	.pipe(gulp.dest('dist/css'));
});

gulp.task('watch', ['sass', 'js'], function() {
	gulp.watch(['scss/*.scss', 'scss/**/*.scss'], function(event, cb) {
		setTimeout(function(){gulp.start('sass');},0);
	});
	gulp.watch(['scripts/*.js'], ['js']);
});

gulp.task('default', ['watch']);

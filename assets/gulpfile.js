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

var templatesPattern = '../views/**/*.php';

gulp.task('js', function() {
	return gulp.src([
		'scripts/*.js',
		])
	.pipe(concat('scripts.min.js'))
	.pipe(gulp.dest('dist/js/'));
});

gulp.task('browser-sync', function() {
	browserSync({
		proxy: 'aao',
		notify: false,
		// tunnel: true,
		// tunnel: "projectmane", //Demonstration page: http://projectmane.localtunnel.me
	});
});

gulp.task('sass', function() {
	return gulp.src('scss/*.scss')
	.pipe(sass({outputStyle: 'expand'}).on("error", notify.onError()))
	.pipe(rename({suffix: '.min', prefix : ''}))
	.pipe(autoprefixer(['last 15 versions']))
	//.pipe(cleanCSS()) //розкоментувати для мініфікації
	.pipe(gulp.dest('dist/css'))
	.pipe(browserSync.reload({stream: true}));
});

gulp.task('watch', ['sass', 'js', 'browser-sync'], function() {
	gulp.watch(['scss/*.scss', 'scss/**/*.scss'], function(event, cb) {
		setTimeout(function(){gulp.start('sass');},1000);
	});
	gulp.watch(['scripts/*.js'], ['js']);
	gulp.watch(templatesPattern, browserSync.reload);
});

gulp.task('default', ['watch']);

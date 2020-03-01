// Gulp.js configuration
'use strict';

const

  // source and build folders
  dir = {
    src         : './',
    build       : '../src/wp-content/themes/afronteira/'
  },

  // Gulp and plugins
  gulp          = require('gulp'),
  gutil         = require('gulp-util'),
  newer         = require('gulp-newer'),
  imagemin      = require('gulp-imagemin'),
  sass          = require('gulp-sass'),
  deporder      = require('gulp-deporder'),
  stripdebug    = require('gulp-strip-debug'),
  uglify        = require('gulp-uglify')
;

// Browser-sync
var browsersync = false;


// PHP settings
const php = {
  src           : dir.src + 'template/**/*.php',
  build         : dir.build
};

// copy PHP files
gulp.task('php', () => {
  return gulp.src(php.src)
    .pipe(newer(php.build))
    .pipe(gulp.dest(php.build));
});

// image settings
const images = {
  src         : dir.src + 'images/**/*',
  build       : dir.build + 'assets/images/'
};

// image processing
gulp.task('images', () => {
  return gulp.src(images.src)
    .pipe(newer(images.build))
    .pipe(imagemin())
    .pipe(gulp.dest(images.build));
});

// CSS settings
var css = {
  watch       : dir.src + 'scss/**/*',
  build       : dir.build + 'assets/css/',
  sassOpts: {
    outputStyle     : 'compressed'
  }
};

// CSS processing
gulp.task('css', () => {
  return gulp.src([
    'node_modules/bootstrap/scss/bootstrap.scss',
    dir.src + 'scss/main.scss',
])
    .pipe(sass(css.sassOpts))
    .pipe(gulp.dest(css.build))
    .pipe(browsersync ? browsersync.reload({ stream: true }) : gutil.noop());
});

// JavaScript settings
const js = {
  src         : dir.src + 'js/**/*',
  build       : dir.build + 'assets/js/'
};

// JavaScript processing
gulp.task('js', () => {

  return gulp.src(js.src)
    .pipe(deporder())
    .pipe(stripdebug())
    .pipe(uglify())
    .pipe(gulp.dest(js.build))
    .pipe(browsersync ? browsersync.reload({ stream: true }) : gutil.noop());

});

gulp.task('build', gulp.parallel('php', 'images', 'css', 'js'));

// Browsersync options
const syncOpts = {
  proxy       : 'localhost:8000/',
  files       : dir.build + '**/*',
  open        : false,
  notify      : false,
  ghostMode   : false,
  ui: {
    port: 8001
  }
};


// browser-sync
gulp.task('browsersync', () => {
  if (browsersync === false) {
    browsersync = require('browser-sync').create();
    browsersync.init(syncOpts);
  }
});

// watch for file changes
gulp.task('watch', () => {

  // page changes
  gulp.watch(php.src,  gulp.series('php'), browsersync.reload);

  // image changes
  gulp.watch(images.src,  gulp.series('images'));

    // CSS changes
  gulp.watch(css.watch,  gulp.series('css'));

  // JavaScript main changes
  gulp.watch(js.src,  gulp.series('js'));

});

// default task
gulp.task('default', gulp.parallel('browsersync', 'watch'));

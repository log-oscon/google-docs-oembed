(function() {
  'use strict';

  var gulp     = require('gulp');
  var composer = require('gulp-composer');

  gulp.task('composer', function() {

    composer({
      cwd: './',
      bin: 'composer'
    });

  });

})();

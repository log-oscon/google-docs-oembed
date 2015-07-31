(function() {
  'use strict';

  var gulp   = require('gulp');
  var readme = require('gulp-readme-to-markdown');

  gulp.task('readme', function() {

    return gulp
            .src(['README.txt'])
            .pipe(readme({
              screenshot_ext: ['jpg', 'png'],
              extract: {
                'changelog': 'CHANGELOG',
                'Frequently Asked Questions': 'FAQ'
              }
            }))
            .pipe(gulp.dest('.'));

  });

})();

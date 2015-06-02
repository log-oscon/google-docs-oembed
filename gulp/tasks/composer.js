(function() {
  'use strict';

  var gulp     = require( 'gulp' ),
      composer = require( 'gulp-composer' );
 
  gulp.task( 'composer', function() {
      
    composer({ 
      cwd: './', 
      bin: 'composer' 
    });
    
  });

})();

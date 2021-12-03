var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
 
gulp.task('sass', function () { 
    return gulp.src('../base/templates/**/*.scss')
        .pipe(sass()) 
        .pipe(gulp.dest('../base/assets/css'));
 
});
 
gulp.task('default', function(){ 
    console.log('default gulp task...'); 
});

gulp.task('watch', function(){
    gulp.watch('../base/templates/**/*.scss', gulp.series('sass')); 
    // Other watchers
});
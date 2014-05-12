var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('default', ['watch']);

gulp.task('sass', function(){
  gulp.src('./assets/stylesheets/style.sass')
    .pipe(sass())
    .pipe(gulp.dest('./style.css'));
});

gulp.task('watch', function() {
  gulp.watch('./assets/stylesheets/*', ['sass'])
});


var gulp =require('gulp');
    rename = require('gulp-rename');


gulp.task('copyPHP',function(){
    return gulp.src('./wp/*.php')
           .pipe(gulp.dest('//Applications/XAMPP/xamppfiles/htdocs/Resume/wp-content/themes/resume'));

});
gulp.task('copyCSS',function() {
    return gulp.src('./dist/styles.css')
           .pipe(rename('style.css'))
           .pipe(gulp.dest('//Applications/XAMPP/xamppfiles/htdocs/Resume/wp-content/themes/resume'));

});
gulp.task('copyJS',function(){
    return gulp.src('./dist/scripts/App.js')
        .pipe(rename('script.js'))
        .pipe(gulp.dest('//Applications/XAMPP/xamppfiles/htdocs/Resume/wp-content/themes/resume'));
});
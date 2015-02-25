var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');

/* SERVER */
gulp.task('s', function() {
    browserSync({
        proxy: 'http://thebespokeapparel.dev/',
        files: ['index.php', 'css/builds/**'],
        ghostMode: false
    });
});

gulp.task('sass', function () {
    gulp.src('frontend/scss/main.scss')
        .pipe(sass())
        .pipe(gulp.dest('css/builds'));
});

gulp.task('build', ['sass']);


gulp.task('watch', function() {
    gulp.watch('frontend/scss/**/*.scss', ['sass']);
});

gulp.task('default', ['build', 'watch']);
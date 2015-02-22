var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');

/* SERVER */
gulp.task('s', function() {
    browserSync({
        server: {
            baseDir: "./public"
        },
        files: ['public/css/builds/**'],
        ghostMode: false
    });
});

gulp.task('sass', function () {
    gulp.src('frontend/scss/main.scss')
        .pipe(sass())
        .pipe(gulp.dest('public/css/builds'));
});

gulp.task('build', ['sass']);


gulp.task('watch', function() {
    gulp.watch('frontend/scss/**/*.scss', ['sass']);
});

gulp.task('default', ['build', 'watch']);
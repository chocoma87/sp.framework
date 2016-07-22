


var gulp = require('gulp');
var concatCss = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var gulpUtil = require('gulp-util');

var cssDest = 'markany/css';


gulp.task('default', function(){
    return gulp.src(['markany/asset/*.css', 'markany/asset/last/*.css'])
        // 결과물 파일 이름
        .pipe(concatCss('style.css'))
        .pipe(gulp.dest(cssDest))
});

gulp.watch('markany/asset/**/*.css', ['default']);
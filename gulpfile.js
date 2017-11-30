const gulp        = require('gulp')
const sass        = require('gulp-sass')
const concat      = require('gulp-concat')
const rename      = require('gulp-rename')
const uglify      = require('gulp-uglify')
const uglifyCss   = require('gulp-uglifycss')
const browserSync = require('browser-sync').create()

gulp.task('serve', ['sass', 'js'], () => {
  browserSync.init({
    proxy: "localhost:8080"
  })
  gulp.watch('brainbow/sass/**/*.scss', ['sass'])
  gulp.watch('brainbow/js/*.js', ['js'])
  gulp.watch('brainbow/**/*.php').on('change', browserSync.reload)
})

gulp.task('sass', () => {
  return gulp.src('brainbow/sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('brainbow'))
    .pipe(browserSync.stream())
    .pipe(uglifyCss())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('brainbow'))
})

gulp.task('js', () => {
  return gulp.src('brainbow/js/*.js')
    .pipe(concat('brainbow.js'))
    .pipe(gulp.dest('brainbow'))
    .pipe(browserSync.stream())
    .pipe(rename('brainbow.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('brainbow'))
})

gulp.task('default', ['serve'])

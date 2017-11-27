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
  gulp.watch('theme/sass/**/*.scss', ['sass'])
  gulp.watch('theme/js/*.js', ['js'])
  gulp.watch('theme/**/*.php').on('change', browserSync.reload)
})

gulp.task('sass', () => {
  return gulp.src('theme/sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('theme'))
    .pipe(browserSync.stream())
    .pipe(uglifyCss())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('theme'))
})

gulp.task('js', () => {
  return gulp.src('theme/js/*.js')
    .pipe(concat('brainbow.js'))
    .pipe(gulp.dest('theme'))
    .pipe(browserSync.stream())
    .pipe(rename('brainbow.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('theme'))
})

gulp.task('default', ['serve'])

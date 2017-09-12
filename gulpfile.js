const gulp        = require('gulp')
const browserSync = require('browser-sync').create()
const sass        = require('gulp-sass')

gulp.task('serve', ['sass'], () => {
  browserSync.init({
    proxy: "localhost:8080"
  })
  gulp.watch('theme/sass/**/*.scss', ['sass'])
  gulp.watch('theme/**/*.php').on('change', browserSync.reload)
})

gulp.task('sass', () => {
  return gulp.src('theme/sass/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('theme'))
    .pipe(browserSync.stream())
})

gulp.task('default', ['serve'])

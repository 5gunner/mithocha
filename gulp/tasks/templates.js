import config from '../../config.json';
import gulp from 'gulp';
import gulpLoadPlugins from 'gulp-load-plugins';
import errorHandler from '../lib/errorHandler';

const $ = gulpLoadPlugins()

const templates = () => {

  

      return gulp
        .src(config.src.templates + '**/*.*')
        .pipe(gulp.dest(config.dist.markup));

  

}

gulp.task('templates', templates);
module.exports = { templates }

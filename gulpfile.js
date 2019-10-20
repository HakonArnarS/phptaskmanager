const browserSync = require('browser-sync');
const gulp = require('gulp');
const connectPHP = require('gulp-connect-php');

// Create server
function serve() {
    browserSync({
        proxy: '127.0.0.1:80', // Points to XAMPP's Apache
    });
}

// BrowserSync Reload
function browserSyncReload(done) {
    browserSync.reload();
    done();
}

// Watch files
function watch() {
    gulp.watch('./**/*.php', browserSyncReload);
}

exports.default = gulp.parallel([watch, serve]);
exports.serve = gulp.series(serve);
'use strict';
module.exports = function(grunt) {

    grunt.initConfig({
    /* Copia os arquivos para o diretório 'dist' */
    copy: {
        public: {
            expand: true,
            cwd: 'public',
            src: '**',
            dest: 'dist'
        }
    },
    /* Limpa o diretório 'dist' */
    clean: {
        dist: {
            src: 'dist'
        }
    },

    useminPrepare: {
        html: 'dist/**/*.php'
    },

    usemin: {
        html: 'dist/**/*.php'
    },
    /* Mimifica img */
    imagemin: {
        public: {
            expand: true,
            cwd: 'dist/img',
            src: '**/*.{png,jpg,gif}',
            dest: 'dist/img'
        }
    },

    htmlmin: {
       dist: {
          options: {
             removeComments: true,
             collapseWhitespace: true
          },
          files: [{
            expand: true,
            cwd: 'public/',
            src: '**.php',
            dest: 'dist/'
          }]
       }
    },


    cssmin: {
        target: {
            files: [{
            expand: true,
            cwd: 'public/css/',
            src: ['*.css', '!*.min.css'],
            dest: 'dist/css/',
            ext: '.css'
            }]
        }
    },

    uglify: {
        target: {
            files: [{
            expand: true,
            cwd: 'public/js/',
            src: ['*.js', '!*.min.js'],
            dest: 'dist/js/',
            ext: '.js'
            }]
        }
    },   


     watch: {
            php: {
                files: ['public/**/*.php']
            }
        },
        browserSync: {
            dev: {
                bsFiles: {
                    src: 'public/**/*.php'
                },
                options: {
                    proxy: '127.0.0.1:8010', //our PHP server
                    port: 8080, // our new port
                    open: true,
                    watchTask: true
                }
            }
        },
        php: {
            dev: {
                options: {
                    port: 8010,
                    base: 'public'
                }
            }
        }


  });

    grunt.registerTask('server', ['php', 'browserSync', 'watch']);
    grunt.registerTask('dist', ['clean', 'copy']);
    grunt.registerTask('minifica', ['useminPrepare', 'uglify', 'htmlmin', 'cssmin', /*'rev:minificados',*/ 'usemin', /*'imagemin'*/ ]);
    grunt.registerTask('default', ['dist', 'minifica']);

    // carregando tasks
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-browser-sync');
    grunt.loadNpmTasks('grunt-usemin');
    grunt.loadNpmTasks('grunt-rev');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');

    grunt.loadNpmTasks('grunt-php');

    
}
module.exports = function(grunt) {

    //Initializing the configuration object
    grunt.initConfig({

        // Task configuration
        copy: {  
            main: {
                files: [
                    {
                        expand: true,
                        flatten: true,
                        src: ['bower_components/fontawesome/fonts/*'], 
                        dest: 'fonts/', 
                        filter: 'isFile'
                    },
                    {
                        expand: true,
                        flatten: true,
                        src: ['bower_components/bootstrap/fonts/*'], 
                        dest: 'fonts/', 
                        filter: 'isFile'
                    }
                ]
            }
        },

        less: {
            development: {
                options: {
                    compress: true,
                    cleancss: true,
                    strictImports: true
                },
                files: {
                    "./sif.css": "./stylesheets/sif.less"
                }
            }
        },

        concat: {
            options: {
                separator: ';\n',
            },
            js_frontend: {
                src: [
                    './bower_components/jquery/dist/jquery.min.js',
                    './bower_components/bootstrap/dist/js/bootstrap.js'
                ],
                dest: './public/assets/javascript/panel.js'
            }
        },

        uglify: {
            options: {
                mangle: false  // Use if you want the names of your functions and variables unchanged
            },
            frontend: {
                files: {
                    './public/assets/javascript/dm.js': './public/assets/javascript/dm.js',
                }
            }
        },

        watch: {
            js_frontend: {
                files: ['./javascript/*.js'],   
                tasks: ['concat:js_frontend'],
                options: {
                    livereload: true
                }
            },

            less: {
                files: ['./stylesheets/*.less'],
                tasks: ['less'],
                options: {
                    livereload: true
                }
            }
        },

        'cache-busting': {
            css: {
                replace: ['header.php'],
                replacement: 'panel.css',
                file: 'sif.css',
                cleanup: true
            }
        },

        cssmin: {
            combine: {
                files: {
                    'sif.css': ['sif.css']
                }
            }
        }

    });

    // Plugin loading
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-cache-busting');
    grunt.loadNpmTasks('grunt-contrib-cssmin');

    // Task definition
    grunt.registerTask('production', ['copy', 'less', 'concat', 'uglify', 'cssmin' ,'cache-busting']);
    grunt.registerTask('default', ['watch']);

};
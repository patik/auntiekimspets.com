/*global module: false */
module.exports = function(grunt) {

    var globule = require('globule'); // Declare globule for use in the Gruntfile

    // Project configuration
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                mangle: false // Don't change variable and function names
            },
            foundation: {
                files:
                    globule.findMapping(
                    [
                         'js/foundation/*.js', // Source files to find
                        '!js/foundation/*.min.js' // Source files to exclude
                    ],
                    {
                        ext: '.min.js', // Give them a .min.js extension
                        extDot: 'last'  // Fixes the issue of finding multiple dots in a filename
                    })
            },
            vendor: {
                files:
                    globule.findMapping(
                    [
                         'js/vendor/*.js', // Source files to find
                        '!js/vendor/*.min.js', // Source files to exclude
                        '!js/vendor/respond.js', // Source files to exclude
                        '!js/vendor/jquery.js' // Source files to exclude
                    ],
                    {
                        ext: '.min.js', // Give them a .min.js extension
                        extDot: 'last'  // Fixes the issue of finding multiple dots in a filename
                    })
            },
            akp: {
                files:
                    globule.findMapping(
                    [
                         'js/*.js', // Source files to find
                        '!js/*.min.js' // Source files to exclude
                    ],
                    {
                        ext: '.min.js', // Give them a .min.js extension
                        extDot: 'last'  // Fixes the issue of finding multiple dots in a filename
                    })
            }
        },
        jshint: {
            options: {
                curly: true,
                eqeqeq: true,
                eqnull: true,
                browser: true,
                globals: {
                    jQuery: true,
                    Modernizr: true,
                    EWF: true
                }
            },
            files: [
                'js/*.js',
                '!js/*.min.js',
                '!js/vendor/*.js',
                '!js/ga.js',
                '!js/gs.js',
                '!js/*.min.js',
                '!js/vendor.js'
            ]
        },
        watch: {
            scripts: {
                options: {
                    interrupt: true
                },
                files: [
                    'js/*.js',
                    '!js/*.min.js',
                    '!js/vendor.js'
                ],
                tasks: ['jshint']
            },
            sass: {
                files: [
                    'scss/**/**.scss'
                ],
                tasks: [
                    'dev' // 'sass:akp'
                ]
            }
        },
        sass: {
            vendor: {
                options: {
                    style: 'compressed'
                },
                files: {
                    'css/vendor.css': [
                        'scss/normalize.scss',
                        'scss/foundation.scss'
                    ]
                }
            },
            akp: {
                options: {
                    style: 'expanded',
                    compass: 'config.rb',
                    lineNumbers: true
                },
                files: {
                    'css/site.css': 'scss/style.scss'
                }
            }
        },
        concat: {
            akpCSS: {
                files: [
                    {
                        src: [
                            'css/vendor.css',
                            'css/site.css'
                        ],
                        dest: 'css/style.css'
                    }
                ]
            },
            akpJS: {
                files: [
                    {
                        src: [
                            'js/vendor/jquery.min.js',
                            'js/vendor/jquery.magnific-popup.min.js',
                            'js/vendor/fastclick.min.js'
                            // 'js/foundation/foundation.js'
                        ],
                        dest: 'js/vendor.js'
                    }
                ]
            }
        },
        cssmin: {
            akp: {
                files: [
                    {
                        src: ['css/style.css'],
                        dest: 'css/style.min.css'
                    }
                ]

            }
        }
    });

    // Load the plugins
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-sass');

    // Development
    grunt.registerTask('dev', 'Development build', function(args) {
        grunt.task.run([
            'sass:akp', // Create project CSS files
            'jshint',

            // Because dev files also point to .min.css
            'concat:akpCSS',
            'cssmin'
        ]);
    });

    // Production
    grunt.registerTask('prod', 'Production build', function(args) {
        grunt.task.run([
            'sass',
            'uglify:akp',
            'concat',
            'cssmin'
        ]);
    });

    // Default task (Force to development build)
    grunt.registerTask('default', 'dev');
};

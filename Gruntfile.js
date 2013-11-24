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
                         'inc/js/foundation/*.js', // Source files to find
                        '!inc/js/foundation/*.min.js' // Source files to exclude
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
                         'inc/js/vendor/*.js', // Source files to find
                        '!inc/js/vendor/*.min.js', // Source files to exclude
                        '!inc/js/vendor/respond.js', // Source files to exclude
                        '!inc/js/vendor/jquery.js' // Source files to exclude
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
                         'inc/js/*.js', // Source files to find
                        '!inc/js/*.min.js' // Source files to exclude
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
                'inc/js/*.js',
                '!inc/js/*.min.js',
                '!inc/js/vendor/*.js',
                '!inc/js/ga.js',
                '!inc/js/gs.js',
                '!inc/js/*.min.js',
                '!inc/js/vendor.js'
            ]
        },
        watch: {
            scripts: {
                options: {
                    interrupt: true
                },
                files: [
                    'inc/js/*.js',
                    '!inc/js/*.min.js',
                    '!inc/js/vendor.js'
                ],
                tasks: ['jshint']
            },
            sass: {
                files: [
                    'inc/scss/**/**.scss'
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
                    'inc/css/vendor.css': [
                        'inc/scss/normalize.scss',
                        'inc/scss/foundation.scss'
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
                    'inc/css/site.css': 'inc/scss/style.scss'
                }
            }
        },
        concat: {
            akpCSS: {
                files: [
                    {
                        src: [
                            'inc/css/vendor.css',
                            'inc/css/site.css'
                        ],
                        dest: 'inc/css/style.css'
                    }
                ]
            },
            akpJS: {
                files: [
                    {
                        src: [
                            'inc/js/vendor/jquery.min.js',
                            'inc/js/vendor/jquery.magnific-popup.min.js',
                            'inc/js/vendor/fastclick.min.js'
                            // 'inc/js/foundation/foundation.js'
                        ],
                        dest: 'inc/js/vendor.js'
                    }
                ]
            }
        },
        cssmin: {
            akp: {
                files: [
                    {
                        src: ['inc/css/style.css'],
                        dest: 'inc/css/style.min.css'
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

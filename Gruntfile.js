module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            dev: {
                files: [{
                    expand: true,
                    cwd: 'tmp/scripts',
                    src: ['jquery.min.js','bootstrap.min.js','jwt-decode.min.js'],
                    dest: 'public/scripts'
                }]
            }
        },
        browserify : {
            dev : {
                src : 'templates/script/app.js',
                dest : "public/scripts/app.js",
                options : {
                    browserifyOptions : {
                        debug : true
                    }
                }
            }
        },
        cssmin: {
            options: {
                mergeIntoShorthands: false,
                roundingPrecision: -1
            },
            target: {
                files: [{
                    expand: true,
                    cwd: 'tmp/css/',
                    src: ['*.css', '!*.min.css'],
                    dest: 'public/css/',
                    ext: '.min.css'
                }]
            }
        },
        // Copy web assets from bower_components to more convenient directories.
        copy: {
            main: {
                files: [
                    // Vendor scripts.
                    {
                        expand: true,
                        cwd: 'bower_components/jquery/dist/',
                        src: ['**/*.min.js'],
                        dest: 'tmp/scripts'
                    },
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap-sass/assets/javascripts/',
                        src: ['**/*.min.js'],
                        dest: 'tmp/scripts'
                    },
                    {
                        expand: true,
                        cwd: 'bower_components/jwt-decode/build/',
                        src: ['**/*.min.js'],
                        dest: 'tmp/scripts'
                    },
                    // Fonts.
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap-sass/assets/fonts/',
                        src: '**',
                        dest: 'public/fonts/'
                    },

                    // Stylesheets
                    {
                        expand: true,
                        cwd: 'bower_components/bootstrap-sass/assets/stylesheets/',
                        src: ['**/*.scss'],
                        dest: 'tmp/scss'
                    }
                ]
            },
        },

        sass: {
            options: {
                includePaths: ['bower_components/bootstrap-sass/assets/stylesheets']
            },
            dist: {
                options: {
                    outputStyle: 'expanded'
                },
                files: {
                    'tmp/css/app.css': 'templates/css/app.scss'
                }
            }
        },

        // Watch these files and notify of changes.
        watch: {
            grunt: { files: ['Gruntfile.js'] },

            sass: {
                files: [
                    'tmp/scss/**/*.scss'
                ],
                tasks: ['sass','cssmin']
            }
        }
    });

    // Load externally defined tasks. 
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-browserify');

    // Establish tasks we can run from the terminal.
    grunt.registerTask('build', ['sass','copy','cssmin','uglify','browserify']); //uglify
    grunt.registerTask('default', ['build','watch']); //''
}

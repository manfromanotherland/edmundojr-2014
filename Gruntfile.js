module.exports = function (grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		// sass: {
		// 	dist: {
		// 		options: {
		// 			outputStyle: 'compressed',
		// 			sourceMap: true,
		// 		},
		// 		files: {
		// 			'assets/css/main.css': 'assets/scss/main.scss',
		// 		},
		// 	},
		// },

		// postcss: {
		// 	options: {
		// 		processors: require('autoprefixer-core')({browsers: 'last 2 versions'}),
		// 	},
		// 	dist: {
		// 		src: 'assets/css/*.css',
		// 	},
		// },

		// jshint: {
		// 	options: {
		// 		reporter: require('jshint-stylish'),
		// 	},
		// 	all: ['Gruntfile.js', 'assets/js/*.js', '!assets/js/*.min.js'],
		// },

		// uglify: {
		// 	dist: {
		// 		files: {
		// 			'assets/js/main.min.js': ['assets/js/main.js'],
		// 		},
		// 	},
		// },

		shell: {
			jekyllBuild: {
				command: 'jekyll build'
			},
			jekyllServe: {
				command: 'jekyll serve'
			}
		},

		watch: {
			files: ['_layouts/*.html',
					'_posts/*.md',
					'assets/scss/*.scss',
					'assets/js/*.js',
					'index.html',
					'blog/index.html',
					'work/index.html',
					'contact/index.html',
					'Gruntfile.js',
					'_config.yml'],
			tasks: ['shell:jekyllServe'],
			options: {
				spawn: false,
				interrupt: true,
				atBegin: true,
				livereload: true
			}
		},

	});

	// grunt.loadNpmTasks('grunt-sass');
	// grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	// grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-shell');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['shell:jekyllServe']);

};
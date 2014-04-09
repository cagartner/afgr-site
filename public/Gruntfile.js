module.exports = function( grunt ) {
 
  grunt.initConfig({
    // Tasks que o Grunt deve executar
    uglify : {
      options : {
        mangle : false,
      },

      my_target : {
        files : {
          'assets/js/main.js' : [
            'assets/_js/main.js' // Usar esse javascript para funcionar no IE7 e 8.
          ]
        }
      }
    }, // uglify

    less: {
      development: {
        options: {
          cleancss: true,
          compress: true
        },

        files: {
          "assets/css/style.css": "assets/_less/style.less"
        }
      }
    },  // less

    watch : {
      dist : {
        files : [
          'assets/_js/**/*',
          'assets/_less/**/*',
          'bower_components/bootstrap/less/**/*'
        ],

        tasks : [ 'uglify', 'less' ]
      }
    } // watch

  });

  // Plugins do Grunt
  grunt.loadNpmTasks( 'grunt-contrib-uglify' );
  grunt.loadNpmTasks( 'grunt-contrib-less' );
  grunt.loadNpmTasks( 'grunt-contrib-watch' );

  // Tarefas que serão executadas
  grunt.registerTask( 'default', [ 'uglify', 'less' ] );

  // Tarefa para Watch
  grunt.registerTask( 'w', [ 'watch' ] );
};
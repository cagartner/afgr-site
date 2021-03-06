
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ URL::asset('assets/ico/favicon.ico') }}">

    <title>AFGR - Engenharia elétrica</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('bower_components/bootstrap/dist/css/bootstrap.min.css') }}
    {{ HTML::style('bower_components/blueimp-gallery/css/blueimp-gallery.min.css') }}
    {{ HTML::style('social/socicon.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('http://fonts.googleapis.com/css?family=Lato:400,400italic') }}
    {{ HTML::style('assets/css/style.css') }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
       {{ HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
       {{ HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo-top text-hide" href="#home">AFGR - Engenharia</a> <span class="pull-left" style="margin-top: 15px">Ideias inovadoras geram grandes soluções tecnológicas</span>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#contato">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    @yield('content')

    <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
	<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
	    <div class="slides"></div>
	    <h3 class="title"></h3>
	    <a class="prev">‹</a>
	    <a class="next">›</a>
	    <a class="close">×</a>
	    <a class="play-pause"></a>
	    <ol class="indicator"></ol>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('bower_components/jquery/jquery.min.js') }}
    {{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
    {{ HTML::script('bower_components/blueimp-gallery/js/blueimp-gallery.min.js') }}
    {{ HTML::script('bower_components/blueimp-gallery/js/blueimp-gallery-fullscreen.js') }}
    {{ HTML::script('bower_components/blueimp-gallery/js/blueimp-gallery-indicator.js') }}
    {{ HTML::script('bower_components/blueimp-gallery/js/jquery.blueimp-gallery.js') }}
    {{ HTML::script('assets/js/main.js') }}

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51027603-1', 'afgr.com.br');
      ga('send', 'pageview');

    </script>
  </body>
</html>

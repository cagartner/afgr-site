
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

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/main.css') }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
       {{ HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}
       {{ HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand logo-top hide-text" href="#">AFGR - Engenharia</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#servicos">Contato</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    @yield('content')

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('bower_components/jquery/jquery.min.js') }}
    {{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}
    {{ HTML::script('bower_components/blueimp-gallery/js/blueimp-gallery.min.js') }}
  </body>
</html>

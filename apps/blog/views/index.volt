<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ico/favicon.ico">

    <title>RRHH - UNELLEZ</title>

    <!-- CSS Global -->
    {{ stylesheet_link('web/css/style.css') }}

    <!-- CSS Plugins -->
    {{ stylesheet_link('centaurus/fonts/font-awesome/css/font-awesome.min.css') }}
    {{ stylesheet_link('web/css/animate.css') }}

    <!-- Google Fonts -->
    {{ stylesheet_link('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700') }}
    {{ stylesheet_link('http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700') }}

  </head>

  <body>

    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="img/unellez_logo.png" alt="..."></a>
        </div>
        <div class="collapse navbar-collapse">
          <a class="btn btn-theme-primary navbar-btn navbar-right hidden-sm hidden-xs">Entrar</a>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="active">
              <a href="{{ url('/blog') }}">Blog</a>
            </li>
            <li >
              <a href="{{ url() }}">Circulares</b></a>
            </li>
            <li >
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cordinaciones<b class="caret"></b></a>
            	<ul class="dropdown-menu">
	                <li>
	                  <a href="{{ url() }}">Cordinaciones</a>
	                </li>
	            </ul>
            </li>
            <li >
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Servicios<b class="caret"></b></a>
            	<ul class="dropdown-menu">
	                <li>
	                  <a href="{{ url() }}">Validar Constancias</a>
	                </li>
	                <li>
	                  <a href="{{ url() }}">Cronograma de Nominas</a>
	                </li>
	            </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">¿Quienes Somos? <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="{{ url() }}">Mision</a>
                </li>
                <li>
                  <a href="{{ url() }}">Vision</a>
                  <!--<ul class="dropdown-menu">
                    <li><a href="blog-post_sidebar-right.html">Menu 2.1</a></li>
                    <li><a href="blog-post_sidebar-left.html">Menu 2.2</a></li>
                    <li><a href="blog-post_sidebar-no.html">Menu 2.3</a></li>
                  </ul>-->
                </li>
                <li>
                  <a href="{{ url() }}">Organigrama</a>
                  <!--<ul class="dropdown-menu">
                    <li><a href="blog-post_sidebar-right.html">Menu 2.1</a></li>
                    <li><a href="blog-post_sidebar-left.html">Menu 2.2</a></li>
                    <li><a href="blog-post_sidebar-no.html">Menu 2.3</a></li>
                  </ul>-->
                </li>
                <li>
                  <a href="{{ url() }}">Acerca de Nosotros</a>
                </li>
              </ul>
            </li>
            
            <!-- Navbar Search -->
            <li class="hidden-xs hidden-sm" id="navbar-search">
              <a href="#">
                <i class="fa fa-search"></i>
              </a>
              <div class="hidden" id="navbar-search-box">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Buscar">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Buscar</button>
                  </span>
                </div>
              </div>
            </li>
          </ul>
          <!-- Mobile Search -->
          <form class="navbar-form navbar-right visible-xs visible-sm" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Buscar">
              <span class="input-group-btn">
                <button class="btn btn-theme-primary" type="button">Buscar!</button>
              </span>
            </div>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </div> 
    <!-- / .navigation -->

   {{ content() }}

  <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <!-- Contact Us -->
          <div class="col-sm-4">
            <h4><i class="fa fa-map-marker text-theme-primary"></i> Contactanos</h4>
            <p>
              Barinas, Av 23 de Enero<br />
              UNELLEZ, cabaña 6 y 12<br />
              Telefono: +0 000 000 00 00<br />
              Fax: +0 000 000 00 00<br />
              Correo: <a href="#">rrhh@unellez.edu.ve</a>
            </p>
          </div>
          <!-- Recent Tweets -->
          <div class="col-sm-4">
            <h4><i class="fa fa-twitter-square text-theme-primary"></i> Tweets Recientes</h4>
            <div class="tweet">
              <i class="fa fa-twitter fa-2x"></i>
              <p>
                Ultimo twet escrito
                <a href="#">hace 1 dia</a>
              </p>
            </div>
            <div class="tweet">
              <i class="fa fa-twitter fa-2x"></i>
              <p>
                Penultimo twet escrito
                <a href="#">hace 2 dias</a>
              </p>
            </div>
          </div>
          <!-- Newsletter -->
          <div class="col-sm-4">
            <h4><i class="fa fa-envelope text-theme-primary"></i> Suscribete</h4>
            <p>
              Introduce tu correo electronico e inscribete en nuestras noticias diarias
              <br>
              Nuestro compromiso es informarte.
            </p>
            <form class="form" role="form">
              <div class="row">
                <div class="col-sm-8">
                  <div class="input-group">
                    <label class="sr-only" for="subscribe-email">Correo Electronico</label>
                    <input type="email" class="form-control" id="subscribe-email" placeholder="Correo">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-default">OK</button>
                    </span>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </footer>

    <!-- Copyright -->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright">
            Copyright 2014 - 2015 Paperclip Tema creado por <a href="https://twitter.com/YevSim">Yevgeny S.</a>  Modificado por <a href="https://twitter.com/MarlonCepeda">Marlon Cepeda</a> | Todos los Derechos Reservados
          </div>
        </div>
      </div>  <!-- / .row -->
    </div> <!-- / .container -->

    <!-- JavaScript
    ================================================== -->
    
    <!-- JS Global -->
    {{ javascript_include('web/js/jquery.min.js') }}
    {{ javascript_include('web/js/bootstrap/bootstrap.min.js') }}
    
    <!-- JS Plugins -->
    {{ javascript_include('web/js/scrolltopcontrol.js') }}
    
    <!-- JS Custom -->
    {{ javascript_include('web/js/custom.js') }}
    {{ javascript_include('web/js/index.js') }}

  </body>
</html>
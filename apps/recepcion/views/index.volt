<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>SIREHU - Documentos</title>

      {{ stylesheet_link('back/css/bootstrap/bootstrap.min.css') }}
      {{ stylesheet_link('back/css/libs/font-awesome.css') }}
      {{ stylesheet_link('back/css/libs/nanoscroller.css') }}
      {{ stylesheet_link('back/css/compiled/layout.css') }}
      {{ stylesheet_link('back/css/compiled/elements.css') }}
      {{ stylesheet_link('back/css/libs/fullcalendar.css') }}
      {{ stylesheet_link('back/css/libs/fullcalendar.print.css') }}
      {{ stylesheet_link('back/css/compiled/calendar.css') }}
      {{ stylesheet_link('back/css/libs/morris.css') }}
      {{ stylesheet_link('back/css/libs/daterangepicker.css') }}
      {{ stylesheet_link('back/css/libs/jquery-jvectormap-1.2.2.css') }}
      <!--{{ stylesheet_link('f="favicon.png" rel="shortcut icon') }}
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400" rel="stylesheet" type="text/css">-->

      <style type="text/css">
      .cf-hidden { display: none; } 
      .cf-invisible { visibility: hidden; } 
      .blockm{ height: 120px;} 
      }
      </style>
   </head>
   <body class="pace-done theme-red">
      <div class="pace  pace-inactive">
         <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
            <div class="pace-progress-inner"></div>
         </div>
         <div class="pace-activity"></div>
      </div>
      <div id="theme-wrapper">
         <header class="navbar" id="header-navbar">
            <div class="container">
               <a href="index.html" id="logo" class="navbar-brand">
               <img src="img/logo.png" alt="" class="normal-logo logo-white"/>
               <img src="img/logo-black.png" alt="" class="normal-logo logo-black"/>
               <img src="img/logo-small.png" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
               </a>
               <div class="clearfix">
                  <button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="fa fa-bars"></span>
                  </button>
                  <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                     <ul class="nav navbar-nav pull-left">
                        <li>
                           <a class="btn" id="make-small-nav">
                           <i class="fa fa-bars"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="nav-no-collapse pull-right" id="header-nav">
                     <ul class="nav navbar-nav pull-right">
                        <li class="mobile-search">
                           <a class="btn">
                           <i class="fa fa-search"></i>
                           </a>
                           <div class="drowdown-search">
                              <form role="search">
                                 <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Buscar Departamento...">
                                    <i class="fa fa-search nav-search-icon"></i>
                                 </div>
                              </form>
                           </div>
                        </li>
          
                        
                        <li class="dropdown profile-dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <img src="img/samples/scarlet-159.png" alt=""/>
                           <span class="hidden-xs">{{ session.get('userlast') }}, {{ session.get('usernames') }}       </span> <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu">
                              <li><a href=""><i class="fa fa-user"></i>Perfil</a></li>
                              <li><a href=""><i class="fa fa-envelope-o"></i>Mesajes</a></li>
                              <li><a href=""><i class="fa fa-power-off"></i>Salir</a></li>
                           </ul>
                        </li>
                        <li class="hidden-xxs">
                           <a class="btn">
                           <i class="fa fa-power-off"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </header>
         <div id="page-wrapper" class="container">
            <div class="row">
               <div id="nav-col">
                  <section id="col-left" class="col-left-nano">
                     <div id="col-left-inner" class="col-left-nano-content">
                        <div id="user-left-box" class="clearfix hidden-sm hidden-xs">
                           <img alt="" src="img/samples/scarlet-159.png">
                           <div class="user-box">
                              <span class="name">
                              admin<br>
                              admin
                              </span>
                              <span class="status">
                              <i class="fa fa-circle"></i> Online
                              </span>
                           </div>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
                           <ul class="nav nav-pills nav-stacked">
                              <!-- Menu Options-->
                              <li class="active">
                                 <a href="{{ url('cpanel') }}">
                                 <i class="fa fa-dashboard"></i>
                                 <span>Inicio</span>
                                 <!--<span class="label label-info label-circle pull-right">28</span>-->
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="dropdown-toggle">
                                    <i class="fa fa-edit"></i>
                                    <span>Documentos</span>
                                    <i class="fa fa-chevron-circle-right drop-icon"></i>
                                 </a>
                                 <ul class="submenu">
                            
                                    <li>
                                       <a href="#" class="dropdown-toggle">
                                          Articulos
                                          <i class="fa fa-chevron-circle-right drop-icon"></i>
                                       </a>
                                    <ul class="submenu">
                                    <li>
                                       <a href="{{ url('cpanel/blog') }}">
                                          Ver Todos
                                       </a>
                                    </li>
                                    <li>
                                       <a href="{{ url('cpanel/blog/posts/add') }}">
                                          Crear
                                       </a>
                                    </li>
                                 </ul>
                              </li>
                                
                              <!--End Menu Options-->
                           </ul>
                        </div>
                     </div>
                  </section>
               </div>
               <div id="content-wrapper">
                  {{ content() }}
                  <footer id="footer-bar" class="row" style="opacity: 1;">
                     <p id="footer-copyright" class="col-xs-12">
                        © 2014 <a href="http://www.adbee.sk/" target="_blank">Adbee digital</a>. Powered by Centaurus Theme.
                     </p>
                  </footer>
               </div>
            </div>
         </div>
      </div>

      {{ javascript_include('back/js/demo-skin-changer.js') }}  
      {{ javascript_include('back/js/jquery.js') }}
      {{ javascript_include('back/js/bootstrap.js') }}
      {{ javascript_include('back/js/jquery.nanoscroller.min.js') }}
      {{ javascript_include('back/js/demo.js') }}  
      {{ javascript_include('back/js/jquery-ui.custom.min.js') }}
      {{ javascript_include('back/js/fullcalendar.min.js') }}
      {{ javascript_include('back/js/jquery.slimscroll.min.js') }}
      {{ javascript_include('back/js/raphael-min.js') }}
      {{ javascript_include('back/js/morris.min.js') }}
      {{ javascript_include('back/js/moment.min.js') }}
      {{ javascript_include('back/js/daterangepicker.js') }}
      {{ javascript_include('back/js/jquery-jvectormap-1.2.2.min.js') }}
      {{ javascript_include('back/js/jquery-jvectormap-world-merc-en.js') }}
      {{ javascript_include('back/js/gdp-data.js') }}
      {{ javascript_include('back/js/flot/jquery.flot.js') }}>
      {{ javascript_include('back/js/flot/jquery.flot.min.js') }}
      {{ javascript_include('back/js/flot/jquery.flot.pie.min.js') }}
      {{ javascript_include('back/js/flot/jquery.flot.stack.min.js') }}
      {{ javascript_include('back/js/flot/jquery.flot.resize.min.js') }}
      {{ javascript_include('back/js/flot/jquery.flot.time.min.js') }}
      {{ javascript_include('back/js/flot/jquery.flot.threshold.js') }}
      {{ javascript_include('back/js/scripts.js') }}
      {{ javascript_include('back/js/pace.min.js') }}
    </body>
</html>


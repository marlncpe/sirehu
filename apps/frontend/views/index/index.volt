	<!-- Fullscreen Picture -->
    <div class="fullscreen">
        <!-- Carousel -->
        <div id="home-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#home-slider" data-slide-to="0" class="active"></li>
            <li data-target="#home-slider" data-slide-to="1"></li>
            <li data-target="#home-slider" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
          {% for slider in sliders %}
            <!-- Slide #1 -->
            {% if slider.Core_status.nombre =='principal' %}
            <div class="item active" id="item-{{ slider.id }}">
            {% else %}
            <div class="item " id="item-{{ slider.id }}">
            {% endif %}  
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="home-slider__content">
                      <h1 class="first-child animated slideInDown delay-2">Powerful Responsive Theme For Business and Personal Projects</h1>
                      <h3 class="animated slideInDown delay-3">Beautiful Theme That Works Out Of The Box</h3>
                      <p class="text-muted animated slideInLeft delay-4">Nulla pretium libero interdum, tempus lorem non, rutrum diam. Quisque pellentesque diam sed pulvinar lobortis. <a href="#" id="tooltip" data-toggle="tooltip" data-placement="top" title="Quisque pellentesque diam.">Vestibulum ante ipsum</a> primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                      <a href="#" class="btn btn-lg btn-theme-primary animated fadeInUpBig delay-5">Purchase Now</a>
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->
              <div class="bg-img hidden-xs">
                <img src="img/item-1.png" alt="...">
              </div>
            </div> <!-- / .item -->
          {% endfor %}
          </div> <!-- / .carousel -->
          <!-- Controls -->
          <a class="carousel-arrow carousel-arrow-prev" href="#home-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-arrow carousel-arrow-next" href="#home-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
    </div> 
    <!-- / .fullscreen -->

    <!-- Wrapper -->
    <!-- <div class="wrapper"> wrapper removed due to the fullscreen homepage image -->

      <!-- Mision Vision -->
      <div class="home-services">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-12">
              <ul>
                <li>
                  <i class="fa fa-gears"></i>
                  <p>Mision</p>
                </li>
                <li>
                  <i class="fa fa-flag"></i>
                  <p>Vision</p>
                </li>
                <li>
                  <i class="fa fa-picture-o"></i>
                  <p>Objetivos</p>
                </li>
                <li>
                  <i class="fa fa-envelope-o"></i>
                  <p>Organigrama</p>
                </li>
              </ul>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / Mision Vision -->
      <h2 align="center">Cordinaciones que conforman RRHH {{ departaments }}</h2>
      <!-- cordinaciones -->
      <div class="main-services">
        <div class="container">
          <div class="row">
          {% for departamento in departamentos %}
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-gear"></i>
                  <div class="service-desc">
                    <h4>{{ departamento.nombre }}</h4>
                    <p>{{ departamento.descripcion }}</p>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
          {% endfor %}
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .main-features -->

      <!-- Feedback -->
      <div class="feedbacks">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="headline-lg">Comentarios Recientes</h2>
            </div>
          </div> <!-- / .row -->
          <div class="row">
            <div class="col-sm-6 col-md-4">
              <div class="feedback">
                <i class="fa fa-user fa-2x"></i>
                <div>
                  <p>
                    Comentario relevante o ultimo realizado en el blog.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="feedback">
                <i class="fa fa-user fa-2x"></i>
                <div>
                  <p>
                    Comentario relevante o ultimo realizado en el blog.
                  </p>
                </div>
              </div>
            </div>
            <div class="hidden-sm col-md-4">
              <div class="feedback">
                <i class="fa fa-user fa-2x"></i>
                <div>
                  <p>
                   Comentario relevante o ultimo realizado en el blog.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="feedback">
                <i class="fa fa-user fa-2x"></i>
                <div>
                  <p>
                    Comentario relevante o ultimo realizado en el blog.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6">
              <div class="feedback">
                <i class="fa fa-user fa-2x"></i>
                <div>
                  <p>
                    Comentario relevante o ultimo realizado en el blog.
                  </p>
                </div>
              </div>
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .feedback -->

      <!-- Recent Blog Posts -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="headline-lg">Ultimas Publicaciones en el Blog</h2>
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-sm-6">
            <div class="blog">
              <img src="img/photo-1.jpg" alt="...">
              <div class="blog-desc">
                <h3>
                  <a href="post.html">Ultima Actualizacion en el Blog</a>
                </h3>
                <hr>
                <p class="text-muted">Escrito por: Autor prueba</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisi lorem, elementum sed feugiat ac, pharetra lacinia mi. Integer iaculis risus sed quam vehicula, sit amet lacinia sem rutrum. Integer ligula orci.</p>
                <a class="btn btn-lg btn-theme-primary" href="blog-post.html">Leer Mas...</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="blog">
              <img src="img/photo-2.jpg" alt="...">
              <div class="blog-desc">
                <h3>
                  <a href="blog-post.html">Penultima Actualizacion en el Blog.</a>
                </h3>
                <hr>
                <p class="text-muted">Escrito por: Autor Prueba</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc nisi lorem, elementum sed feugiat ac, pharetra lacinia mi. Integer iaculis risus sed quam vehicula, sit amet lacinia sem rutrum. Integer ligula orci.</p>
                <a class="btn btn-lg btn-theme-primary" href="blog-post.html">Leer Mas...</a>
              </div>
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    <!-- </div> wrapper removed due to the fullscreen homepage image -->
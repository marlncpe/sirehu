
  

    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <h3>Blog</h3>
            </div>
            <div class="col-sm-8">
              <ol class="breadcrumb pull-right hidden-xs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <!-- Search -->
            <form role="form">
              <div class="well">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Buscar Aqui">
                      <span class="input-group-btn">
                        <button class="btn btn-theme-primary" type="button"><i class="fa fa-search"></i></button>
                      </span>
                    </div><!-- /input-group -->
                  </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
              </div>
            </form>
            <!-- Categories -->
            <div class="panel panel-default">
              <div class="panel-heading">
                Categorias
              </div>
              <div class="panel-body">
                <ul>
                  <li><a href="#">Circulares (12)</a></li>
                  <li><a href="#">Notas (25)</a></li>
                  <li><a href="#">Notas Duelo (17)</a></li>
                  <li><a href="#">Felicitaciones (15)</a></li>
                  <li><a href="#">Agradecimientos (8)</a></li>
                </ul>
              </div>
            </div>
            <!-- Tags -->
            <p class="blog-tags">
              <a href="#">Etiqueta 1</a>
              <a href="#">Etiqueta 2</a>
              <a href="#">Etiqueta 3</a>
            </p>
          </div>
          <div class="col-sm-9">
          {% for post in posts %}
            <!-- Blog Post #post.id-->
            <div class="blog">
              <img src="{{ post.core_users.img }}" alt="...">
              <div class="blog-desc">
                <h3>
                  <a href="blog-post_sidebar-left.html">{{ post.titulo }}.</a>
                </h3>
                <hr>
                <p class="text-muted">Escrito por: {{ post.core_users.nombres }},{{ post.core_users.apellidos }} el {{ post.fechacreacion }}</p>
                <p>
                  {{ post.resumen }}...
                </p>
                <a class="btn btn-lg btn-theme-primary" href="blog-post_sidebar-left.html">Leer Mas...</a>
                <br />
                <br />
                <p class="blog-tags">
                  <a href="#">Etiqueta 1</a>
                  <a href="#">Etiqueta 2</a>
                  <a href="#">Etiqueta 3</a>
                  <a href="#">Etiqueta 4</a>
                </p>
              </div>
            </div>
            <br />
          {% endfor %}
            <!-- Pagination -->
            <ul class="pagination pull-right">
              <li><a href="#">&laquo;</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->
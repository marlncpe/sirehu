
          <div class="col-sm-9">
            <!-- Blog Post #1 -->
            <div class="blog">
              <img src="img/photo-1.jpg" alt="...">
              <div class="blog-desc">
                <h3>
                  <a href="blog-post_sidebar-left.html">{{ post.titulo }}</a>
                </h3>
                <hr>
                <p class="text-muted">Escrito por: {{ post.core_users.nombres }}, {{ post.core_users.apellidos }} Prueba el {{ post.fechacreacion }}</p>
                <p>
                  {{ post.descripcion }}
                </p>
                <!-- Tags -->
                <p class="blog-tags">
                  <a href="#">Etiqueta 1</a>
                  <a href="#">Etiqueta 2</a>
                  <a href="#">Etiqueta 3</a>
                  <a href="#">Etiqueta 4</a>
                </p>
              </div>
            </div>
           
            <div class="clearfix"></div>
            
            <div class="comments">
            <!-- New comment form -->
              <div class="cmt well">
                <img src="img/photo-1.jpg" alt="...">
                <div class="cmt-block">
                  <strong>Autor Prueba</strong>
                  <form role="form" class="cmt-body">
                    <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Escribe tu comentario"></textarea>
                    </div>
                    <button type="submit" class="btn btn-theme-primary btn-sm">Enviar</button>
                  </form>
                </div>
              </div>
              <!-- List of comments -->
              <!--
              <h4 class="text-right">3 comentarios</h4>
              <hr>
              <div class="cmt">
                <img src="img/photo-2.jpg" alt="...">
                <div class="cmt-block">
                  <a href="user-profile.html" class="profile-link">Autor Prueba 1</a> <span class="text-muted time">20 minutos atras</span>
                  <span class="rating pull-right">
                    <span class="up">0</span>
                    <i class="fa fa-thumbs-up voteup"></i>  <i class="fa fa-thumbs-down votedown"></i>
                    <span class="down">0</span>
                  </span>
                  <p class="cmt-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis nibh nibh, a aliquam leo suscipit ac. Praesent ultricies nibh quis nisi placerat tristique non lobortis diam!
                  </p>
                  <ul class="list-inline">
                    <li><a href="#">Responder</a></li>
                  </ul>
                </div>
              </div>
              <div class="cmt">
                <img src="img/photo-3.jpg" alt="...">
                <div class="cmt-block">
                  <a href="user-profile.html" class="profile-link">Autor Prueba 2</a> <span class="text-muted time">1 hora atras</span>
                  <span class="rating pull-right">
                    <span class="up">0</span>
                    <i class="fa fa-thumbs-up voteup"></i>  <i class="fa fa-thumbs-down votedown"></i>
                    <span class="down">4</span>
                  </span>
                  <p class="cmt-body">
                    Praesent ultricies nibh quis nisi placerat tristique non lobortis diam. Quisque ac quam ut magna malesuada imperdiet ut a odio. Aliquam erat volutpat. Nullam non elit orci.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#">Responder</a></li>
                  </ul>
                </div>
              </div>
              <div class="cmt">
                <img src="img/photo-1.jpg" alt="...">
                <div class="cmt-block">
                  <a href="user-profile.html" class="profile-link">Autor Prueba 3</a> <span class="text-muted time">08/01/2015</span>
                  <span class="rating pull-right">
                    <span class="up">0</span>
                    <i class="fa fa-thumbs-up voteup"></i>  <i class="fa fa-thumbs-down votedown"></i>
                    <span class="down">0</span>
                  </span>
                  <p class="cmt-body">
                    Duis vitae mollis massa. Nunc eleifend velit sit amet lorem commodo, a faucibus metus imperdiet. Maecenas vitae pellentesque lacus. Duis cursus lacus non porta eleifend. Nunc elementum, metus vitae ornare euismod, nulla felis pulvinar nunc, condimentum bibendum lacus elit in neque. Nunc hendrerit sit amet ipsum in elementum. Maecenas vel libero varius, convallis dui vel, ultricies urna.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#">Responder</a></li>
                  </ul>
                </div>
              </div>-->
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->

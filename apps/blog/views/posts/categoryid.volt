
          <div class="col-sm-9">
          {% if page.items is defined %}
            {% for post in page.items %}
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
                  <a class="btn btn-lg btn-theme-primary" href="blog/post?post={{ post.id }}">Leer Mas...</a>
                  <br />
                  <br />
                  <p class="blog-tags">
                    <a href="#">{{ post.tags }}</a>
                  </p>
                </div>
              </div>
              <br />
            {% endfor %}
          {% endif %}
            <!-- Pagination -->
            <ul class="pagination pull-right">
              <li class="active">{{ link_to("blog/search", "Primero") }}</li>
              <li>{{ link_to("blog/search?page="~page.before, "<<") }}</li>
              <li><a href="#">[{{ page.current~"/"~page.total_pages }}]</a></li>
              <li>{{ link_to("blog/search?page="~page.next, ">>") }}</li>
              <li>{{ link_to("blog/search?page="~page.last, "Ultimo") }}</li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->
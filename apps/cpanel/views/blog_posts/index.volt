                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">BLOG</a></li>
                                 <li class="active"><span>Todos</span></li>
                              </ol>
                              <h1>Todos los Articulos del Blog</h1>
                           </div>
                        </div>
                        
                        <div class="row">
                           {% for post in posts %}
                           <div class="col-lg-4 col-sm-4 col-xs-12">
                              <a href="{{ url('/cpanel/blog/posts/search?id=')}}{{ post.id }}">
                                 <div class="main-box infographic-box blockm">
                                    {% if post.idcategory == 2 %}
                                    <i class="fa fa-file red-bg"></i>
                                    {% else %}
                                    <i class="fa fa-edit red-bg"></i>
                                    {% endif %}
                                    <span class=""><strong>{{ post.titulo }}</strong></span>
                                 </div>
                              </a>
                           </div>
                           {% endfor %}
                        </div>
                     </div>
                  </div>
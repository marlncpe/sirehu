                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">Users</a></li>
                                 <li class="active"><span>Todos</span></li>
                              </ol>
                              <h1>Todos los usuarios Registrados</h1>
                           </div>
                        </div>
                        
                        <div class="row">
                           {% for user in users %}
                           <div class="col-lg-4 col-sm-4 col-xs-12">
                              <a href="{{ url('/cpanel/users/search?id=')}}{{ user.id }}">
                                 <div class="main-box infographic-box blockm">
                                    <i >{{ image('user.foto','width':'64','height':'64') }}</i>
                                    <span class=""><strong>{{ user.nombres }}, {{ user.apellidos }}</strong></span>
                                    <span class="">Cargo: {{ user.CoreCharges.nombre }}</span>
                                    <span class="">Estatus: {{ user.CoreCharges.nombre }}</span>
                                 </div>
                              </a>
                           </div>
                           {% endfor %}
                        </div>
                     </div>
                  </div>
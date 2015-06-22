                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">BLOG</a></li>
                                 <li class="active"><span>{{ post.titulo }}</span></li>
                              </ol>
                              <h1>Articulo del Blog: {{ post.titulo }}</h1>
                           </div>
                        </div>
                        
                        <div class="row">
                           <div class="col-lg-12 col-sm-12 col-xs-6">
                              <!-- Form editable -->
                              <div class="main-box">
                                 <br />
                                 <div class="table-responsive">
                                    <p align="center">
                                       Informacion Detallada del Articulo
                                       &nbsp;&nbsp;
                                       <a href="{{ url('cpanel/posts/edit?id=')}}{{ post.id }}">
                                          <i class="glyphicon glyphicon-pencil"></i> 
                                       </a> 
                                       &nbsp;&nbsp;
                                       <a href="{{ url('cpanel/posts/delete?id=')}}{{ post.id }}">
                                          <i class="glyphicon glyphicon-trash"></i> 
                                       </a>
                                    </p>
                                    <table id="user" class="table table-hover" style="clear: both">
                                       <tbody>
                                          <tr>
                                             <td width="15%">Nombre</td>
                                             <td width="75%"><a href="#" name="nombre" >{{ post.titulo }}</a></td>
                                          </tr>
                                          <tr>
                                             <td width="15%">Creador</td>
                                             <td width="75%"><a href="#" name="nombre" >{{ post.Core_users.nombres }}, {{ post.Core_users.apellidos }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Fecha de Creacion</td>
                                             <td><a href="#" name="fecha">{{ post.fechaCreacion }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Descripcion</td>
                                             <td><a href="#" name="descripcion">{{ post.descripcion }}</a></td>
                                          </tr>
                                    </table>
                                 </div>
                                 <!-- end form editable-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
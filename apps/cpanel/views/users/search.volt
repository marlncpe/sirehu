                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">Usuarios</a></li>
                                 <li class="active"><span>Información</span></li>
                              </ol>
                              <h1>Información del Usuario</h1>
                           </div>
                        </div>
                        
                        <div class="row">
                           <div class="col-lg-12 col-sm-12 col-xs-6">
                              <!-- Form editable -->
                              <div class="main-box">
                                 <br />
                                 <div class="table-responsive">
                                    <p align="center">
                                       Información del Usuario
                                       &nbsp;&nbsp;
                                       <a href="{{ url('cpanel/users/edit?id=')}}{{ user.id }}">
                                          <i class="glyphicon glyphicon-pencil"></i> 
                                       </a> 
                                       &nbsp;&nbsp;
                                       <a href="{{ url('cpanel/users/delete?id=')}}{{ user.id }}">
                                          <i class="glyphicon glyphicon-trash"></i> 
                                       </a>
                                    </p>
                                    <table id="user" class="table table-hover" style="clear: both">
                                       <tbody>
                                          <tr>
                                             <td width="15%">Nombre</td>
                                             <td width="75%"><a href="#" name="nombre" >{{ user.nombres }}, {{ user.apellidos }}</a></td>
                                          </tr>
                                          <tr>
                                             <td width="15%">Cedula</td>
                                             <td width="75%"><a href="#" name="nombre" >{{ user.cedula }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Fecha de Registro</td>
                                             <td><a href="#" name="fecha">{{ user.fechaCreacion }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Descripcion</td>
                                             <td><a href="#" name="descripcion">{{ user.descripcion }}</a></td>
                                          </tr>
                                    </table>
                                 </div>
                                 <!-- end form editable-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
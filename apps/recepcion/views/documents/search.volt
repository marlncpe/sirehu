                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Documentos</a></li>
                                 <li class="active"><span>{{ document.titulo }}</span></li>
                              </ol>
                              <h1>Documento: {{ document.titulo }}</h1>
                           </div>
                        </div>
                        
                        <div class="row">
                           <div class="col-lg-12 col-sm-12 col-xs-6">
                              <!-- Form editable -->
                              <div class="main-box">
                                 <br />
                                 <div class="table-responsive">
                                    <p align="center">
                                       Informacion Detallada del Documento
                                       &nbsp;&nbsp;
                                       &nbsp;&nbsp;
                                       <a href="{{ url('documents/delete?id=')}}{{ document.id }}">
                                          <i class="glyphicon glyphicon-trash"></i> 
                                       </a>
                                    </p>
                                    <table id="user" class="table table-hover" style="clear: both">
                                       <tbody>
                                          <tr>
                                             <td width="15%">Nombre</td>
                                             <td width="75%"><a href="#" name="nombre" >{{ document.titulo }}</a></td>
                                          </tr>
                                          <tr>
                                             <td width="15%">Creador</td>
                                             <td width="75%"><a href="#" name="nombre" >{{ document.Core_users.nombres }}, {{ document.Core_users.apellidos }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Fecha de Creacion</td>
                                             <td><a href="#" name="fecha">{{ document.fechaCreacion }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Descripcion</td>
                                             <td><a href="#" name="descripcion">{{ document.desscripcion }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Enlace</td>
                                             <td><a href="{{ url('document.urlDocumento') }}" name="descripcion">Abir: {{ document.titulo }}</a></td>
                                          </tr>
                                    </table>
                                 </div>
                                 <!-- end form editable-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">Cargos</a></li>
                                 <li><a class="active"><span>{{ charge.nombre }}</span></a></li>
                              </ol>
                              <h1>Informacion de {{ charge.nombre }}</h1>
                           </div>
                        </div>
                        
                       
                         <div class="row">
                           <div class="col-lg-3 col-sm-3 col-xs-12">
                           </div>
                           <div class="col-lg-6 col-sm-6 col-xs-12">
                              <!-- Form editable -->
                              <div class="main-box">
                                 <br />
                                 <div class="table-responsive">
                                    <p align="center">
                                       Informacion Detallada del Cargo
                                       &nbsp;&nbsp;
                                       <a href="{{ url('cpanel/charges/edit?id=')}}{{ charge.id }}">
                                          <i class="glyphicon glyphicon-pencil"></i> 
                                       </a> 
                                       &nbsp;&nbsp;
                                       <a href="{{ url('cpanel/charges/delete?id=')}}{{ charge.id }}">
                                          <i class="glyphicon glyphicon-trash"></i> 
                                       </a>
                                    </p>
                                    <table id="user" class="table table-hover" style="clear: both">
                                       <tbody>
                                          <tr>
                                             <td width="35%">Nombre</td>
                                             <td width="65%"><a href="#" name="nombre" >{{ charge.nombre }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Descripcion</td>
                                             <td><a href="#" name="descripcion">{{ charge.descripcion }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Fecha de Creacion</td>
                                             <td><a href="#" name="fecha">{{ charge.fechaCreacion }}</a></td>
                                          </tr>
                                    </table>
                                 </div>
                                 <!-- end form editable-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
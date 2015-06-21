                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">Coordinaciones</a></li>
                                 <li><a class="active"><span>{{ department.nombre }}</span></a></li>
                              </ol>
                              <h1>Informacion de {{ department.nombre }}</h1>
                           </div>
                        </div>
                        
                        <div class="row">
                           <div class="col-lg-4 col-sm-4 col-xs-12">
                              <a href="{{ url('/cpanel/departments/search?id=')}}{{ department.id }}">
                                 <div class="main-box infographic-box blockm">
                                    <i class="fa fa-user red-bg"></i>
                                    <span class=""><strong>{{ department.nombre }}</strong></span>
                                 </div>
                              </a>
                           </div>
                           <div class="col-lg-4 col-sm-4 col-xs-12">
                              <img src="{{ department.picture }}.jpg">
                           </div>
                        </div>
                         <div class="row">
                           <div class="col-lg-6 col-sm-6 col-xs-6">
                              <!-- Form editable -->
                              <div class="main-box">
                                 <br />
                                 <div class="table-responsive">
                                    <p align="center">
                                       Informacion Detallada
                                       &nbsp;&nbsp;
                                       <a href="">
                                          <i class="glyphicon glyphicon-pencil"></i> 
                                       </a> 
                                       &nbsp;&nbsp;
                                       <a href="">
                                          <i class="glyphicon glyphicon-trash"></i> 
                                       </a>
                                    </p>
                                    <table id="user" class="table table-hover" style="clear: both">
                                       <tbody>
                                          <tr>
                                             <td width="35%">Nombre</td>
                                             <td width="65%"><a href="#" name="nombre" >{{ department.nombre }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Descripcion</td>
                                             <td><a href="#" name="descripcion">{{ department.descripcion }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Correo</td>
                                             <td><a href="#" name="email">{{ department.email }}</a></td>
                                          </tr>
                                          <tr>
                                             <td>Fechar de Creacion</td>
                                             <td><a href="#" name="fecha">{{ department.fechaCreacion }}</a></td>
                                          </tr>
                                    </table>
                                 </div>
                                 <!-- end form editable-->
                              </div>
                           </div>
                           <div class="col-lg-6 col-sm-6 col-xs-6">
                              <!-- Form que_ofrecemos editable -->
                              <div class="main-box">
                                 <div class="table-responsive">
                                    <br />
                                    <p align="center">¿Que Ofrecemos?</p>
                                    <table id="user" class="table table-hover" style="clear: both">
                                       <tbody>
                                          {% for departmentinfo in departmentinfos %}
                                          <tr>
                                             <td width="35%" align="center">
                                                <a href="">
                                                   <i class="glyphicon glyphicon-pencil"></i> 
                                                </a> 
                                                &nbsp;&nbsp;
                                                <a href="">
                                                   <i class="glyphicon glyphicon-trash"></i> 
                                                </a>
                                             </td>
                                             <td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username" class="editable editable-click">{{ departmentinfo.titulo }}</a></td>
                                          </tr>
                                          {% endfor %}
                                    </table>
                                 </div>
                                 <!-- end form que_ofrecemos editable-->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
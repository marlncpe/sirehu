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
                           <div class="col-lg-4 col-sm-1 col-xs-12">
                              <a href="{{ url('/cpanel/departments/search?id=')}}{{ department.id }}">
                                 <div class="main-box infographic-box blockm">
                                    <i class="fa fa-user red-bg"></i>
                                    <span class=""><strong>{{ department.nombre }}</strong></span>
                                    <br />
                                    <br />
                                    <span class="headline" >{{ department.email  }}</span>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
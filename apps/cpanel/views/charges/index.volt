                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li class="active"><span>Cargos</span></li>
                              </ol>
                              <h1>Todas los Cargos</h1>
                           </div>
                        </div>
                        
                        <div class="row">
                           {% for charge in charges %}
                           <div class="col-lg-4 col-sm-4 col-xs-12">
                              <a href="{{ url('/cpanel/charges/search?id=')}}{{ charge.id }}">
                                 <div class="main-box infographic-box blockm">
                                    <i class="fa fa-user red-bg"></i>
                                    <span class=""><strong>{{ charge.nombre }}</strong></span>
                                 </div>
                              </a>
                           </div>
                           {% endfor %}
                        </div>
                     </div>
                  </div>
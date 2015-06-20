                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li class="active"><span>Coordinaciones</span></li>
                              </ol>
                              <h1>Todas las Coordinaciones</h1>
                           </div>
                        </div>
                        
                        <div class="row">
                           {% for department in deparments%}
                           <div class="col-lg-3 col-sm-6 col-xs-12">
                              <div class="main-box infographic-box">
                                 <i class="fa fa-user red-bg"></i>
                                 <span class="headline">{{ department.nombre }}</span>
                                 <span class="value">{{ department.email }}</span>
                              </div>
                           </div>
                           {% endfor %}
                        </div>
                     </div>
                  </div>
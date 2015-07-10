                {{ content() }}
                <div class="row" style="opacity: 1;">
                    <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">Coordinaciones</a></li>
                                 <li><a href="#">{{ department.core_departments.nombre }}</a></li>
                                 <li class="active"><span>Editar</span></li>
                              </ol>
                              <h1>Editar Servicio</h1>
                           </div>
                        </div>
                     </div>
                  </div>

               <div class="col-lg-3"></div>
               <div class="col-lg-6">
                  <div class="main-box">
                     <header class="main-box-header clearfix">
                     </header>
                     <div class="main-box-body clearfix">
                           
                        {{ form("cpanel/departments/information/update", "method":"post") }}
                           <div class="form-group">
                              <label for="labeldescripcion">Descripcion del Servicio</label>
                              {{ text_area("titulo", "rows" : 7, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Descripcion del servicio que tendra el Departamento de RRHH",'pattern':'[a-zA-Z  ]+','required':'true') }}
                           </div>
                           <div align="center">
                              <br />
                              <button type="submit" class="btn btn-primary">Actualizar Servicio</button>
                           </div>
                           {{ hidden_field("id") }}
                           
                        </form>
                     </div>
                  </div>
               </div>
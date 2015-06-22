                {{ content() }}
                <div class="row" style="opacity: 1;">
                    <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">Coordinaciones</a></li>
                                 <li class="active"><span>Editar</span></li>
                              </ol>
                              <h1>Editar Coordinaciones</h1>
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
                           
                        {{ form("cpanel/charges/update", "method":"post") }}
                           <div class="form-group">
                                <label for="labelnombre">Nombre del Cargo</label>                              
                                {{ text_field("nombre", "size" : 30, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Nombre que tendra el Departamento Nuevo a Integrar RRHH") }}
                           </div>
                           <div class="form-group">
                              <label for="labeldescripcion">Descripcion del Cargo</label>
                              {{ text_area("descripcion", "rows" : 7, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Descripcion que tendra el Departamento Nuevo a Integrar RRHH") }}
                           </div>
                           <div align="center">
                              <br />
                              <button type="submit" class="btn btn-primary">Editar Cargo</button>
                           </div>
                           {{ hidden_field("id") }}
                        </form>
                     </div>
                  </div>
               </div>
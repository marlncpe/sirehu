                {{ content() }}
                <div class="row" style="opacity: 1;">
                    <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">BLOG</a></li>
                                 <li class="active"><span>Editar</span></li>
                              </ol>
                              <h1>Editar Articulo</h1>
                           </div>
                        </div>
                     </div>
                  </div>

               <div class="col-lg-2"></div>
               <div class="col-lg-8">
                  <div class="main-box">
                     <header class="main-box-header clearfix">
                     </header>
                     <div class="main-box-body clearfix">
                           
                        {{ form("cpanel/blog/posts/update", "method":"post") }}
                           <div class="form-group">
                                <label for="labelnombre">Titulo Articulo</label>                              
                                {{ text_field("titulo", "size" : 30, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Nombre que tendra el Departamento Nuevo a Integrar RRHH") }}
                           </div>
                           <div class="form-group">
                              <label for="labeldescripcion">Resumen del Articulo</label>
                              {{ text_area("resumen", "rows" : 4, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Descripcion que tendra el Departamento Nuevo a Integrar RRHH") }}
                           </div>
                           <div class="form-group">
                              <label for="labeldescripcion">Descripcion del Articulo</label>
                              {{ text_area("descripcion", "rows" : 10, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Descripcion que tendra el Departamento Nuevo a Integrar RRHH") }}
                           </div>
                           <div class="form-group">
                              <label for="labelnombre">Etiquetas del Articulo</label>                              
                              {{ text_field("tags", "size" : 30, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Email que tendra el Departamento Nuevo a Integrar RRHH") }}
                           </div>
                           <div>
                              <label for="labelimagen">Fecha de Creacion</label>
                               {{ text_field("fecha", "size" : 30, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Imagen que tendra el Departamento Nuevo a Integrar RRHH") }}                              
                           </div>
                           <div align="center">
                              <br />
                              <button type="submit" class="btn btn-primary">Editar Coordinación</button>
                           </div>
                           {{ hidden_field("id") }}
                        </form>
                     </div>
                  </div>
               </div>
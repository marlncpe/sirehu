                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">BLOG</a></li>
                                 <li class="active"><span>Agregar</span></li>
                              </ol>
                              <h1>Agregar Articulo al Blog</h1>
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
                        {{ form("cpanel/blog/posts/create", "method":"post") }}
                           <div class="form-group">
                              <label for="labelnombre">Titulo del Articulo</label>                              
                              <input type="text" class="form-control" name="nombre" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nombre que tendra el Departamento Nuevo a Integrar RRHH">
                           </div>
                           <div class="form-group">
                              <label for="labeldescripcion">Resumen del Articulo</label>
                              <textarea class="form-control" name="descripcion" rows="3" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descripcion que tendra el Departamento Nuevo a Integrar RRHH"></textarea>
                           </div>
                           <div class="form-group">
                              <label for="labeldescripcion">Descripcion del Articulo</label>
                              <textarea class="form-control" name="descripcion" rows="3" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descripcion que tendra el Departamento Nuevo a Integrar RRHH"></textarea>
                           </div>
                           <div class="form-group">
                              <label for="labelnombre">Etiquetas del Articulo</label>                              
                              <input type="email" class="form-control" name="email" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Email que tendra el Departamento Nuevo a Integrar RRHH">
                           </div>
                           <div>
                              <label for="labelimagen">Categoria del Articulo</label>                              
                              <input type="file" class="form-control" name="imagen" data-toggle="tooltip" data-placement="bottom" data-original-title="Imagen que tendra el Departamento Nuevo a Integrar RRHH">
                           </div>
                           <div align="center">
                              <br />
                              <button type="submit" class="btn btn-primary">Crear Articulo</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
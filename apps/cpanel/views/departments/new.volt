                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">Coordinaciones</a></li>
                                 <li class="active"><span>Agregar</span></li>
                              </ol>
                              <h1>Agregar Coordinaciones</h1>
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
                        {{ form("cpanel/departments/create", "method":"post","enctype":"multipart/form-data") }}
                           <div class="form-group">
                              <label for="labelnombre">Nombre Departamento</label>                              
                              <input type="text" class="form-control" name="nombre" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nombre que tendra el Departamento Nuevo a Integrar RRHH">
                           </div>
                           <div class="form-group">
                              <label for="labeldescripcion">Descripcion del Departamento</label>
                              <textarea class="form-control" name="descripcion" rows="3" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descripcion que tendra el Departamento Nuevo a Integrar RRHH"></textarea>
                           </div>
                           <div class="form-group">
                              <label for="labelnombre">Email Departamento</label>                              
                              <input type="email" class="form-control" name="email" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Email que tendra el Departamento Nuevo a Integrar RRHH">
                           </div>
                           <div>
                              <label for="labelimagen">Imagen Departamento</label>                              
                              <input type="file" class="form-control" name="imagen" data-toggle="tooltip" data-placement="bottom" data-original-title="Imagen que tendra el Departamento Nuevo a Integrar RRHH">
                           </div>
                           <div align="center">
                              <br />
                              <button type="submit" class="btn btn-primary">Crear Coordinación</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
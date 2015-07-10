                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">Cargos</a></li>
                                 <li class="active"><span>Agregar</span></li>
                              </ol>
                              <h1>Agregar Cargos</h1>
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
                        {{ form("cpanel/charges/create", "method":"post") }}
                           <div class="form-group">
                              <label for="labelnombre">Nombre del cargo</label>                              
                              <input type="text" class="form-control" name="nombre" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Nombre que tendra el Cargo Nuevo a Integrar RRHH" pattern="[a-zA-Z ]+" required>
                           </div>
                           <div class="form-group">
                              <label for="labeldescripcion">Descripcion del Cargo</label>
                              <textarea class="form-control" name="descripcion" rows="3" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descripcion que tendra el cargo Nuevo a Integrar RRHH" required>></textarea>
                           </div>
                           <div align="center">
                              <br />
                              <button type="submit" class="btn btn-primary">Crear Cargo</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
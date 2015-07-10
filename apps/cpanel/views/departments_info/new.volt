                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">Coordinaciones</a></li>
                                 <li><a href="#">{{ department.nombre }}</a></li>
                                 <li class="active"><span>Agregar</span></li>
                              </ol>
                              <h1>Agregar Servicio</h1>
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
                        {{ form("cpanel/departments/information/create", "method":"post") }}
                           <div class="form-group">
                              <label for="labeldescripcion">Titulo del Servicio a prestar</label>
                              <textarea class="form-control" name="titulo" rows="3" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tienes un limite de 180 letras para crear el titulo del servicio a ofrecer por el departamento o coordinacion"></textarea>
                              <input type="hidden" value="{{ department.id }}" name="id_department">
                           </div>
                           <div align="center">
                              <br />
                              <button type="submit" class="btn btn-primary">Crear Servicio</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
                {{ content() }}
                <div class="row" style="opacity: 1;">
                    <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Cpanel</a></li>
                                 <li><a href="#">USUARIO</a></li>
                                 <li class="active"><span>Editar</span></li>
                              </ol>
                              <h1>Editar Usuario</h1>
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
                           
                        {{ form("cpanel/users/update", "method":"post") }}
                           <div class="form-group">
                                <label for="labelnombre">Nombres</label>                              
                                {{ text_field("nombres", "size" : 30, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Nombres usuario") }}
                           </div>
                           <div class="form-group">
                                <label for="labelnombre">Apellidos</label>                              
                                {{ text_field("apellidos", "size" : 30, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Apellidos usuario") }}
                           </div>
                           <div class="form-group">
                                <label for="labelnombre">Cedula de Identidad</label>                              
                                {{ text_field("cedula", "size" : 30, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Cedula de Identidad") }}
                           </div>
                           <div class="form-group">
                                <label for="labelnombre">Correo Electronico</label>                              
                                {{ text_field("correo", "size" : 30, "class":"form-control", "data-toggle":"tooltip", "data-placement":"bottom", "title":"", "data-original-title":"Correo Electronico") }}
                           </div>
                           <div align="center">
                              <br />
                              <button type="submit" class="btn btn-primary">Editar Usuario</button>
                           </div>
                           {{ hidden_field("id") }}

                        </form>
                     </div>
                  </div>
               </div>
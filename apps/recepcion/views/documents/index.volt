                  <div class="row" style="opacity: 1;">
                     <div class="col-lg-12">
                        <div class="row">
                           <div class="col-lg-12">
                              <ol class="breadcrumb">
                                 <li><a href="#">Documentos</a></li>
                                 <li class="active"><span>Todos</span></li>
                              </ol>
                              <h1>Todos Documentos Pendientes</h1>
                           </div>
                        </div>
                        
                        <div class="row">
                           {% for document in documents %}
                           <div class="col-lg-4 col-sm-4 col-xs-12">
                              <a href="{{ url('documents/search?id=')}}{{ document.id }}">
                                 <div class="main-box infographic-box blockm">
                                    {% if document.tipo == 'comunicacion' %}
                                    <i class="fa fa-file red-bg"></i>
                                    {% else %}
                                    <i class="fa fa-edit red-bg"></i>
                                    {% endif %}
                                    <span class=""><strong>{{ document.titulo }}</strong></span><br />
                                    <span class="">Enviado: <strong>{{ document.Core_users.nombres }}, {{ document.Core_users.apellidos }}</strong></span><br />
                                    <span class="">Fecha: <strong>{{ document.fechaCreacion }}</strong></span>
                                 </div>
                              </a>
                           </div>
                           {% endfor %}
                        </div>
                     </div>
                  </div>
    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Team Picture -->
      <div class="b-team-photo">
      </div>

      <!-- About Us -->
      <div class="b-about-block">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2">
              <h2>{{ coordinacion.nombre }}</h2><br />
              {{ coordinacion.descripcion }}
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="headline-lg">
              Acerca de nosotros
            </h2>
          </div>
          <div class="col-sm-6">
            <h3 class="headline">
              <span>Que Ofrecemos</span>
            </h3>
            <p>
              Breve abre boca de lo que ofrecen en RRHH.
            </p>
            <ul class="ft-list">
              {% for coordinacioninfo in coordinacioninfos %}
              <li>{{ coordinacioninfo.titulo }}</li>
              {% endfor %}
            </ul>
          </div>
          <div class="col-sm-6">
            <h3 class="headline">
              <span>Nuestras Habilidades</span>
            </h3>
            {% for coordinacionskill in coordinacionskills %}
            <div class="progress">
              <div class="progress-bar progress-bar-theme-secondary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: {{ coordinacionskill.porcenetaje }}%;">
               {{ coordinacionskill.nombre }}
              </div>
            </div>
            {% endfor %}
          </div>
        </div> <!-- / .row -->
        <div class="row">
          <div class="col-sm-12">
            <h2 class="headline-lg">
              Nuestro Equipo
            </h2>
            <h4>Conoce a Nuestros Trabajadores</h4>
          </div>
        </div> <!-- / .row -->
        <div class="row">
          {% for staff in staffs %}
          <div class="col-sm-3">
            <div class="user-avatar shadow-effect text-center">
              <img class="img-responsive center-block" src="img/photo-4.jpg" alt="...">
              {{ staff.core_users.nombres }}, {{ staff.core_users.apellidos }}
              <p class="text-muted">{{ staff.Core_charges.nombre }}</p>
            </div>
          </div>
          {% endfor %}
        </div>
      </div> <!-- / .container -->

    </div> 
    <!-- / .wrapper -->
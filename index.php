<?php include_once 'includes/templates/header.php' ?>

<body>
<section class="seccion contenedor">
  <h2>Un sitio donde avanzar</h2>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
</section>

<section class="programa">
  <div class="contenedor-video">
    <video  autoplay  loop poster="img/bg-talleres.jpg">
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.webm" type="video/webm">
      <source src="video/video.ogv" type="video/ogg">
    </video>
  </div><!--contenedor del video -->

  <div class="contenido-programa">
    <div class="contenedor">
      <div class="programa-evento">
        <h2>Trabajos mas solicitados</h2>
        <nav class="menu-programa">
          <a href="#software"><i class="fas fa-code" aria-hidden="true"></i>Software</a>
          <a href="#diseño"><i class="fas fa-draw-polygon"aria-hidden="true"></i>Diseño</a>
          <a href="#marketing"><i class="fab fa-sellsy" aria-hidden="true"></i>Marketing</a>
        </nav>

        <div id="talleres" class="info-curso ocultar clearfix">

          <div class="detalle-evento">
            <h3>HTML5, CSS3 y Javascript</h3>
            <p><i class="fab fa-connectdevelop"></i>Desarrollo Web</p>
          </div>
          <div class="detalle-evento">
            <h3>Responsive Web Design</h3>
            <p><i class="fab fa-connectdevelop"></i>Desarrollo Web</p>
          </div>

          <a href="#" class="button float-right">Ver todos</a>
        </div><!--Talleres-->
      </div><!--Programa Evento -->
    </div><!--contenedor-->
  </div><!--contenido-programa-->
</section><!--Programa-->

<section class="alianzas contenedor seccion">
  <h2>Alianzas Educativas</h2>
  <ul class="lista-alianzas clearfix">
    <li>
      <div class="aliado">
        <img src="img/invitado1.png" alt="imagen de aliado">
        <p>CENALTEC</p>
      </div>
    </li>
    <li>
      <div class="aliado">
        <img src="img/invitado2.png" alt="imagen de aliado">
        <p>Tec de Juarez</p>
      </div>
    </li>
    <li>
      <div class="aliado">
        <img src="img/invitado3.png" alt="imagen de aliado">
        <p>UACJ</p>
      </div>
    </li>
    <li>
      <div class="aliado">
        <img src="img/invitado4.jpeg" alt="imagen de aliado">
        <p>Grupo Dextro</p>
      </div>
    </li>
    <li>
      <div class="aliado">
        <img src="img/invitado5.jpg" alt="imagen de aliado">
        <p>ITESM</p>
      </div>
    </li>
    <li>
      <div class="aliado">
        <img src="img/invitado6.jpeg" alt="imagen de aliado">
        <p>AMA</p>
      </div>
    </li>
  </ul>
</section>

<div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen-evento clearfix">
       <li><p class="numero">6</p> Alianzas</li>
       <li><p class="numero">15</p> Proyectos</li>
       <li><p class="numero">30</p> Colaboradores</li>
       <li><p class="numero">3</p> Opciones</li>
    </ul>
  </div>
</div>

<section class="precios seccion">
  <h2>Ofertas</h2>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>
        <div class="tabla-precio">
          <h3>Website</h3>
          <p class="numero">$50 <span>por hora</span></p>
          <ul>
            <li>Diseño a escoger</li>
            <li>1 a 3 secciones de informacion</li>
            <li>Dominio propio</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>Logotipo</h3>
          <p class="numero">$500<span>Por proyecto</span></p>
          <ul>
            <li>Diseño personalizado</li>
            <li>Multiples formatos</li>
            <li>Hasta 3 cambios en el diseño</li>
          </ul>
          <a href="#" class="button">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>Posicionamiento Web</h3>
          <p class="numero">$100 <span>Por dia</span></p>
          <ul>
            <li>Hasta 3 redes sociales</li>
            <li>Posicionamiento Google</li>
            <li>Hasta 100 usuarios nuevos por semana</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="seccion">
  <h2>Usuarios nuevos</h2>
  <div class="usuarios contenedor clearfix">
    <div class="usuario" id="usuario">
      <blockquote>
        <p id="acerca">Me gusta desarrollar aplicaciones en mi tiempo libre y quisiera ampliar mis habilidades</p>
        <footer class="nombresusuarios clearfix">
          <img src="img/testimonial.jpg" alt="">
          <cite id="nombre">Juanito Perez <span id="ocupacion">Estudiante Universitario</span></cite>
        </footer>
      </blockquote>
    </div><!--usuarios-->
    <div class="usuario" id="usuario">
      <blockquote>
        <p id="acerca">Me gusta desarrollar aplicaciones en mi tiempo libre y quisiera ampliar mis habilidades</p>
        <footer class="nombresusuarios clearfix">
          <img src="img/testimonial.jpg" alt="">
          <cite id="nombre">Juanito Perez <span id="ocupacion">Estudiante Universitario</span></cite>
        </footer>
      </blockquote>
    </div><!--usuarios-->
    <div class="usuario" id="usuario">
      <blockquote>
        <p id="acerca">Me gusta desarrollar aplicaciones en mi tiempo libre y quisiera ampliar mis habilidades</p>
        <footer class="nombresusuarios clearfix">
          <img src="img/testimonial.jpg" alt="">
          <cite id="nombre">Juanito Perez <span id="ocupacion">Estudiante Universitario</span></cite>
        </footer>
      </blockquote>
    </div><!--usuarios-->
  </div>
</section>

<?php include_once 'includes/templates/footer.php' ?>

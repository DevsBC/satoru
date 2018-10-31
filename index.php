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
            <p>Desarrollo Web</p>
          </div>
          <div class="detalle-evento">
            <h3>Responsive Web Design</h3>
            <p>Desarrollo Web</p>
          </div>

          <a href="#" class="button float-right">Ver todos</a>
        </div>
      </div>
    </div>
  </div><!--contenido-programa-->


</section><!--Programa-->

<?php include_once 'includes/templates/footer.php' ?>

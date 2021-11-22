<?php get_header(); ?>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center ">
  <div class="container-fluid container-xxl d-flex align-items-center">

    <div id="logo" class="me-auto">
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
      <a href="index.php" class="scrollto"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_hamuntay.png" alt="" title=""></a>
    </div>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
        <li><a class="nav-link scrollto" href="#about">Evento</a></li>
        <li><a class="nav-link scrollto" href="#schedule">Cronograma</a></li>
        <li><a class="nav-link scrollto" href="#gallery">Organizadores</a></li>
        <li><a class="nav-link scrollto" href="#supporters">Auspiciadores</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    <a class="buy-tickets scrollto" href="#buy-tickets">Inscripción</a>

  </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <h1 class="mb-4 pb-0">Vento Anual<br><span> Hamutay </span> </h1>
    <p class="mb-4 pb-0">13-17 Diciembre, Lima Perú</p>
    <a href="https://youtu.be/twvcmmwDp28" class="glightbox play-btn mb-4"></a>
    <a href="#about" class="about-btn scrollto">Sobre el evento</a>
  </div>
</section><!-- End Hero Section -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6">
          <h2>Sobre el evento</h2>
          <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
            accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
            est ut optio sequi unde.</p>
        </div>
        <div class="col-lg-3">
          <!--
            <h3>Cuando</h3>
            <p>Downtown Conference Center, New York</p>
            -->
        </div>
        <div class="col-lg-3">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/zoom.png" class="img-fluid" alt="zoom">
          <h3>Por Zoom</h3>
          <p>Lunes - Viernes<br>13-17 Diciembre</p>
          <a class="buy-tickets scrollto" href="#buy-tickets">Inscripción</a>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

  <?php include 'afiches.php'?>
  
  <?php include 'schedule.php'?>

  
  <?php include 'gallery.php' ?>

  <?php include 'Sponsors.php'?>
  
  <!-- ======= Subscribe Section ======= -->
  <section id="subscribe">
    <div class="container" data-aos="zoom-in">
      <div class="section-header">
        <h2>Inscripciones</h2>
        <p>Ingresa a nuestro formulario y llena tus datos</p>
      </div>


      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-10 d-flex justify-content-center">

          <a class="buy-tickets scrollto " style="cursor: pointer">Inscribirse</a>
        </div>
      </div>


    </div>
  </section><!-- End Subscribe Section -->


  <!--Social bar-->
  <div class="social-bar">
    <a href="https://www.facebook.com/hamutay" class="icon icon-facebook" target="_blank"></a>

    <a href="https://www.instagram.com/hamutay_ciencia/?hl=es-la" class="icon icon-instagram" target="_blank"></a>

    <a href="https://twitter.com/hamutay_ciencia" class="icon icon-twitter" target="_blank"></a>
  </div>

</main><!-- End #main -->

<?php get_footer(); ?>
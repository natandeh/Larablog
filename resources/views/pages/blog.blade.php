<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Page principale blog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets1/img/favicon.png" rel="icon">
  <link href="assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets1/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Jun 06 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="blog-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="assets1/imgicons/logosite-01.png" alt="logowebsite" style="width:170px;">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Accueil</a></li>
          <li class="dropdown"><a href="#"><span>Service</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="/service1">Accompagnement de projet et investissement</a></li>
              <li><a href="/service2">Conseil Financier</a></li>
              <li><a href="/service3">Amélioration des performances opérationnelles</a></li>
              <li><a href="/service4">Formation/Coaching d'affaires en gestion financière</a></li>
            </ul>
          </li>
          <li><a href="service4">Formations</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="{{ route('index') }}#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>


    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Blog</h1>
              <p class="mb-0">
                Bienvenue sur le blog de F&J ADVISORY, votre source d'informations et de conseils en finance et management.
                Découvrez des articles enrichissants, des analyses et des astuces pratiques pour vous aider à atteindre
                vos objectifs professionnels.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Accueil</a></li>
            <li class="current">Blog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">

      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-4">
            <article>

              <div class="post-img">
                <img src="assets1/img/blog/blogdemo.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category"><br></p>

              <h2 class="title">
                <a href="/blogcontent">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
              </div>

            </article>
          </div><!-- End post list item -->


        </div>
      </div>

    </section><!-- /Blog Posts Section -->

    <!-- Pagination Section -->
    <section id="pagination" class="pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div>
      </div>

    </section><!-- /Pagination Section -->

  </main>

  <footer id="footer" class="footer position-relative">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets1/imgicons/logosite-01.png" alt="logowebsite" style="height:200px;">
          </a>
          <p>Rejoignez notre communauté en ligne et ne manquez aucune de nos actualités !</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Lien utiles</h4>
          <ul>
            <li><a href="/service4">Formations</a></li>
            <li><a href="{{ route('index') }}#contact">Contact</a></li>
            <li><a href="/blog">Blog</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Nos services</h4>
          <ul>
            <li><a href="/service1">Accompagnement de projet et investissements</a></li>
            <li><a href="/service2">Conseil financier</a></li>
            <li><a href="/service3">Amélioration des performances opérationnelle</a></li>
            <li><a href="/service3">Formation/Coaching d'affaires en gestion financière</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contactez-nous</h4>
          <p>Cocody Angré, Bd Latrille, Face à la BHCI</p>
          <p>08 BP 643 Abidjan 08</p>
          <p> Côte d'Ivoire</p>
          <p class="mt-4"><strong>Téléphone:</strong> <span>+225 27 22 25 11 14/+225 07 77 21 32 29</span></p>
          <p><strong>Email:</strong> <span>info@fjadvisory.com</span></p>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/vendor/php-email-form/validate.js"></script>
  <script src="assets1/vendor/aos/aos.js"></script>
  <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets1/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets1/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets1/js/main.js"></script>

</body>

</html>

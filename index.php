<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home - groupedingenieursdigital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logowhite.png" alt=""> 
        <h1>GID</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#services">Services</a></li>
          <li><a href="index.php#contact">Contact</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a class="btn-getstarted" href="index.php#about">Get Started</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

      <img src="assets/img/004173iadd.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">GROUPE D'INGENIEURS DIGITAL</h2>
            <p data-aos="fade-up" data-aos-delay="200">Transformer demain avec des solutions informatiques innovantes</p>
          </div>
          <div class="col-lg-5">
            <form action="controllers/controllerUser.php" method="POST" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
              <input type="email" class="form-control"  name="email" placeholder="Enter email address">
              <input type="submit" class="btn btn-primary" name="connecter" value="Sign up">
            </form>
          </div>
        </div>
      </div>

    </section><!-- End Hero Section -->

    <!-- About Section - Home Page -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <h2>Groupe d'Ingénieurs Digital (GID)</h2>
            <p>est un groupe d'ingénierie et de technologie dynamique et avant-gardiste qui excelle dans le déploiement de solutions et de 
              services informatiques de pointe. En mettant l'accent sur l'innovation, l'adaptabilité et l'expertise, GID est à l'avant-garde de la
              fourniture de solutions technologiques exceptionnelles dans un paysage en constante évolution. En tant que partenaire de confiance des entreprises
              de divers secteurs, GID a constamment démontré son engagement à conduie la transformation numérique et à faciliter la croissance.
            </p>
            <a href="../Append/apropos.html" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4">

              <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box" style="text-align: center;">
                  <img src="assets/img/gid-2.png" alt="gid-2">
                  <h2>GID</h2>
                  <!--<marquee behavior="alternate" direction="left" loop="-1";>GROUPE D'INGENIEURS DIGITAL</marquee>-->
                  <div class="scrolling-text-container">
                    <div class="scrolling-text">
                      <p><strong>GROUPE D'INGENIEURS DIGITAL</strong></p>
                    </div>
                  </div>
                </div>
              </div> <!-- End Icon Box -->


            </div>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- Services Section - Home Page -->
    <section id="services" class="services">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>PRODUITS & SERVICES</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Développement de logiciels</a></h4>
                <p class="description">GID crée des solutions logicielles personnalisées qui répondent à des besoins commerciaux spécifiques, des applications mobiles aux systèmes d’entreprise complexes.</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Intégration du système</a></h4>
                <p class="description">Intégrant de manière transparente des systèmes disparates, GID optimise les processus, améliore le flux de données et améliore l’efficacité globale.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Cloud Computing</a></h4>
                <p class="description">GID exploite les technologies cloud pour fournir des solutions évolutives, sécurisées et rentables qui favorisent la flexibilité et l’innovation.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Cybersécurité</a></h4>
                <p class="description">la protection des données et des actifs des clients est primordiale, et GID utilise des mesures de cybersécurité robustes pour se protéger contre les menaces.
                  Analyse des données : en extrayant des informations à partir des données, GID permet aux clients de prendre des décisions éclairées et d’acquérir un avantage concurrentiel.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- End Services Section -->

    <!-- Features/Produits Section - Home Page -->
    <section id="features" class="features">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>PRODUITS</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 align-items-center features-item">
          <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h3>Vente de matériel informatique et consommables</h3>
            <p>
              Créé avec pour vision de combler le fossé entre la technologie et les besoins commerciaux, GROUPE D’INGÉNIEURS DIGITAL (GID) est rapidement devenu un leader du marché dans la fourniture de solutions informatiques complètes. <br>
              La gamme diversifiée de services et de solutions de GID englobe <br>
              – Matériel informatique et consommables, <br>
              – Service de maintenance monétique : Guichet Automatique de Billets GAB/Distributeur Automatique de Billets DAB, TPE, Compteuse, Trieuse , CERCLEUSE , détecteur de faux billets, estampeur, etc….
            </p>
          </div>
          <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="image-stack">
              <img src="assets/img/tpe-carte-magnetique-ingenico-move-5000-bluetooth-2ls-sanscontact-bem.jpg" alt="" class="stack-front">
              <img src="assets/img/717EdvK1chS._AC_UF1000,1000_QL80_.jpg" alt="" class="stack-back">
            </div>
          </div>
        </div><!-- Features Item -->

        <div class="row gy-4 align-items-stretch justify-content-between features-item ">
          <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
            <img src="assets/img/detecteur-de-faux-billets-tk-2028-grand.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
            
            <p>GID place les besoins de ses clients au premier plan, travaillant en étroite collaboration avec eux pour comprendre leurs défis, leurs objectifs et leurs aspirations. Cette approche centrée sur le client garantit des solutions qui s'alignent parfaitement sur les objectifs du client.</p>
            <ul>
              <li><i class="bi bi-check"></i> <span>Expertise</span></li>
              <li><i class="bi bi-check"></i><span>Innovation</span></li>
              <li><i class="bi bi-check"></i> <span>Agilité</span>.</li>
            </ul>
          </div>
        </div><!-- Features Item -->

      </div>

    </section><!-- End Features Section -->

    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Prenez contact avec nous, laissez nous un message par </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>C 17 Porto-Novo</p>
                  <p>République du Bénin</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+229 97481985</p>
                  <p>+229 65741686</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@groupedingenieursdigital.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>9:00AM - 06:30PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="controllers/controllerContact.php" method="POST" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="nom" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <!--<div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>-->

                  <input type="submit" class="btn btn-primary" name="contact" value="Send Message">
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>GID</span>
          </a>
          <div class="social-links d-flex mt-4">
            <a href="https://www.facebook.com/profile.php?id=100068387887295"><i class="bi bi-facebook"></i></a>
            <a href="https://api.whatsapp.com/send?phone=+22965741686&text=Bonjour+GID.+je+suis+intéressé+par+vos+services"><i class="bi bi-whatsapp"></i></a>
            <a href="tel:+229 65741686"><i class="bi bi-telephone"></i></a>
            <a href="info@groupedingenieursdigital.com"><i class="bi bi-envelope-at"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>



        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>C 17 Porto-Novo</p>
          <p>République du Bénin</p>
          <p class="mt-4"><strong>Phone:</strong> <span>+229 65741686</span></p>
          <p><strong>Email:</strong> <span>info@groupedingenieursdigital.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">2024 GID</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">k-celem</a>
      </div>
    </div>

  </footer><!-- End Footer -->

  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<!doctype html>
<html class="no-js" lang="fr">

<?php 
include('./includes/header_link.php')
?>
  <body>

    <?php
    include('./includes/header.php')
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    $(document).ready(function(){
        $('.single-slider').each(function(){
        var bg = $(this).data('background');
        if(bg){
            $(this).css('background-image', 'url(' + bg + ')');
        }
        });
    });
    
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      items: 1,              // 1 slide à la fois
      loop: true,            // boucle infinie
      autoplay: true,        // défilement automatique
      autoplayTimeout: 10000, // délai entre slides (5 secondes)
      animateOut: 'fadeOut', // animation de sortie
      nav: false,             // flèches de navigation
      dots: true,             // pagination
      //navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']

    });
  });
</script>

<style>
    .icon-blue {
  filter: brightness(0) saturate(100%) invert(19%) sepia(97%) saturate(3000%) hue-rotate(190deg) brightness(95%) contrast(90%);
}

.slider-area {
  position: relative;
}

.owl-nav {
  position: absolute;
  display: flex;
  justify-content: space-between;
  top: 80%;
  left: 50%;
  transform: translateX(-50%) translateY(-50%);
  width: auto;
  pointer-events: auto;
  padding: 0 5%;
}

.owl-prev:active, .owl-next:active {
  transform: none !important;
  position: relative;
}

.owl-prev { left: 5vw; }
.owl-next { right: 5vw; }

.owl-prev:hover, .owl-next:hover {
  background-color: rgba(0,0,0,0.8);
}

</style>
    
    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="owl-carousel">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/carousel1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Des Fondations Solides Pour Vos Projets</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">Bâtissons l’Avenir Ensemble</h1>
                                    <br> <br>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Construction et Génie Civil</h2>
                                        <h2>Construction et Génie Civil</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                       <span><a href="services.php">Nos Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/carousel2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Votre Partenaire en Travaux Publics</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">Expertise & Fiabilité</h1>
                                     <br> <br>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Infrastructures de Qualité</h2>
                                        <h2>Infrastructures de Qualité</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="services.php">Nos Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/carousel3.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-11">
                                <div class="hero__caption">
                                    <div class="hero-text1">
                                        <span data-animation="fadeInUp" data-delay=".3s">Matériel Moderne & Équipe Qualifiée</span>
                                    </div>
                                    <h1 data-animation="fadeInUp" data-delay=".5s">Vos Chantiers, Notre Priorité</h1>
                                     <br> <br>
                                    <div class="stock-text" data-animation="fadeInUp" data-delay=".8s">
                                        <h2>Routes Bâtiments</h2>
                                        <h2>Routes Bâtiments</h2>
                                    </div>
                                    <div class="hero-text2 mt-110" data-animation="fadeInUp" data-delay=".9s">
                                        <span><a href="services.php">Nos Services</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
         
<!-- About Area Start -->
<section class="support-company-area section-padding30 fix pt-10">
    <div class="support-wrapper align-items-end">
        <div class="left-content">
            <!-- section title -->
            <div class="section-tittle mb-55">
                <div class="front-text">
                    <h2 class="">Notre identité</h2>
                </div>
                <span class="back-text">Nous !</span>
            </div>
            <div class="support-caption">
                <p class="pera-top" style="text-align: justify;">
                    Fondée en 2017, <strong>BATIROUTE Sarl</strong> est une entreprise dynamique spécialisée dans la construction de bâtiments et les travaux publics.
                    Reconnue pour son professionnalisme et son sens de l’innovation, elle intervient sur de nombreux chantiers à travers le pays.
                </p>
                <p style="text-align: justify;">
                    Notre mission est d’être un partenaire de confiance pour nos clients, en concevant et réalisant des ouvrages durables, efficaces et de qualité. 
                    Grâce à une équipe compétente et à l’intégration de solutions technologiques modernes, nous assurons une exécution rapide et sécurisée de tous nos projets.<br>

                    Nos domaines d'intervention incluent : la construction de bâtiments, de routes et d’ouvrages d’art (ponts, dalots, canaux...), la réhabilitation d’infrastructures, 
                    ainsi que l’expertise en génie civil.
                </p>
                <a href="about.php" class="btn red-btn2">En savoir plus</a>
            </div>
        </div>
        <div class="right-content">
            <!-- img -->
            <div class="right-img">
                <img src="assets/img/gallery/builder.jpg" alt="Image Batiroute">
            </div>
            <div class="support-img-cap text-center">
                <span>2017</span>
                <p>Année de création</p>
            </div>
        </div>
    </div>
</section>
<!-- About Area End -->


<section class="hse-area section-padding20">
  <div class="container">
    <div class="section-tittle mb-55 text-center">
        <div class="front-text">
            <h2 class="">Sécurité, Hygiène et Environnement (HSE)</h2>
        </div>
        Chez <strong>BATIROUTE Sarl</strong>, la sécurité de nos collaborateurs, la préservation de leur santé, et la protection de l’environnement sont des priorités absolues. Notre politique HSE repose sur une approche rigoureuse de la prévention des risques, de la sensibilisation continue et du respect des normes en vigueur.
      </p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <p style="text-align: justify;">
          Nous mettons en place des protocoles stricts sur tous nos chantiers afin de garantir un environnement de travail sûr, sain et respectueux. Des formations régulières, des équipements adaptés et un suivi rigoureux des pratiques HSE permettent de minimiser les accidents, préserver la santé des équipes et limiter notre impact environnemental.
        </p>
        <p style="text-align: justify;">
          Nos actions HSE s’inscrivent dans une démarche d’amélioration continue, pour répondre aux exigences réglementaires et aux attentes de nos clients et partenaires.
        </p>
        <div class="text-center mt-4">
          <a href="documents/ENGAGEMENT_ ENVIRONNEMENTAL.pdf" class="btn red-btn2" target="_blank">
            Consulter notre politique HSE
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Services Area Start -->
        <div class="services-area1 section-padding30">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-55">
                            <div class="front-text">
                                <h2 class="">Nos Services</h2>
                            </div>
                            <span class="back-text">Services</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/building_construction.jpg" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.php?id=1">Construction de bâtiments</a></h4>
                                <a href="services_details.php?id=1" class="more-btn">Lire plus <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/roads_construction.jpeg" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.php?id=2">Construction de routes</a></h4>
                                <a href="services_details.php?id=2" class="more-btn">Lire plus <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                      <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/works_art_construction.jpg" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.php?id=3">Construction d'ouvrage d’art</a></h4>
                               <a href="services_details.php?id=3" class="more-btn">Lire plus <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="text-center mt-4">
                    <a href="services.php" class="btn red-btn2">
                        Tous nos services
                    </a>
                </div>     
            </div>
        </div>
        <!-- Services Area End -->


        <!-- Project Area Start -->
        <section class="project-area  section-padding20">
            <div class="container">
               <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3">
                                <div class="front-text">
                                    <h2 class="">Nos Projets</h2>
                                </div>
                                <span class="back-text">Galeries</span>
                            </div>
                        </div>
                    </div>
               </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Nav Card -->
                        <div class="tab-content active" id="nav-tabContent">
                            <!-- card ONE -->
                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">           
                                <div class="project-caption">
                                    <div class="row">
                                        
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/build_house11.jpg" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.php?id=1" class="plus-btn"><i class="ti-plus"></i></a>
                                                    <h4><a href="project_details.php?id=1">Construction de bâtiment</a></h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/build_house1.jpg" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.php?id=2" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.php?id=2">Construction de bâtiment</a></h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/build_dalle1.jpg" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.php?id=3" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.php?id=3">Travaux de dallage </a></h4>
                                                </div>
                                            </div>
                                        </div>        
                                    </div>
                                        <div class="text-center mt-4">
                                            <a href="project.php" class="btn red-btn2">
                                                Tous nos projets
                                            </a>
                                        </div> <br>

                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>

                </div>
            </div>
        </section>
        <!-- Project Area End -->


        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding" data-background="assets/img/gallery/section-bg2.jpg">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle6 mb-50">
                            <div class="front-text">
                                <h2 class="">Notre Mission</h2>
                            </div>
                            <span class="back-text">Engagement</span>
                        </div>
                    </div>
                </div>
               <div class="row">
                    <div class="col-xl-10 col-lg-11 col-md-10 offset-xl-1">
                        <div class="h1-testimonial-active">

                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="86px" height="63px">
                                        <path fill-rule="evenodd"  stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)"
                                        d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/>
                                        </svg>
                                        <p>
                                           La mission de <strong>Batiroute SARL</strong> est de concevoir, réaliser et suivre des projets de Bâtiment et de Travaux Publics avec un engagement fort en faveur de la <strong>sécurité</strong>, de la <strong>qualité</strong> et de la <strong>durabilité</strong>. 
                                           Nous œuvrons à instaurer un climat de <strong>confiance</strong> avec nos partenaires à travers une exécution rigoureuse, transparente et respectueuse des délais. 
                                           Notre expertise, alliée à notre esprit d’innovation, nous permet de répondre efficacement aux besoins de nos clients, tout en contribuant activement au développement des infrastructures modernes, sûres et fiables.
                                        </p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                       <div class="founder-text">
                                           <span>Mission de Batiroute SARL</span>
                                           <p>Engagement & Valeurs</p>
                                       </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <!-- SVG icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg"xmlns:xlink="http://www.w3.org/1999/xlink"width="86px" height="63px">
                                        <path fill-rule="evenodd"  stroke-width="1px" stroke="rgb(255, 95, 19)" fill-opacity="0" fill="rgb(0, 0, 0)"
                                        d="M82.623,59.861 L48.661,59.861 L48.661,25.988 L59.982,3.406 L76.963,3.406 L65.642,25.988 L82.623,25.988 L82.623,59.861 ZM3.377,25.988 L14.698,3.406 L31.679,3.406 L20.358,25.988 L37.340,25.988 L37.340,59.861 L3.377,59.861 L3.377,25.988 Z"/>
                                        </svg>
                                        <p>
                                        Nous instaurons un climat de <strong>confiance</strong> avec nos partenaires à travers une exécution <strong>rigoureuse</strong>, <strong>transparente</strong> et respectueuse des délais. Notre <strong>esprit d’innovation</strong> nous permet de relever les défis techniques les plus complexes, au service du développement durable et de la performance.
                                        </p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                       <div class="founder-text">
                                            <span>Mission de Batiroute SARL</span>
                                            <p>Engagement & Innovation</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

        

        <!-- Partenaires Area Start -->
        <section class="partners-area section-padding30 bg-light">
        <div class="container">
            <div class="section-tittle text-center mb-55">
                <div class="front-text">
                    <h2 class="">Nos partenaire</h2>
                </div>
            <p>Ils nous accompagnent dans la réalisation de nos projets à travers le pays.</p>
            </div>

            <div class="row justify-content-center g-4">
            <!-- Ligne 1 -->
            <div class="col-6 col-sm-4 col-md-3 text-center">
                <img src="assets/img/partenaires/anadeb.png" alt="Partenaire 1"
                    class="img-fluid rounded-circle shadow-sm"
                    style="width: 120px; height: 120px; object-fit: cover;">
            </div>

            <div class="col-6 col-sm-4 col-md-3 text-center">
                <img src="assets/img/partenaires/cct_batimat.png" alt="Partenaire 2"
                    class="img-fluid rounded-circle shadow-sm"
                    style="width: 120px; height: 120px; object-fit: cover;">
            </div>

            <div class="col-6 col-sm-4 col-md-3 text-center">
                <img src="assets/img/partenaires/cimco.jpg" alt="Partenaire 3"
                    class="img-fluid rounded-circle shadow-sm"
                    style="width: 120px; height: 120px; object-fit: cover;">
            </div>

            <div class="col-6 col-sm-4 col-md-3 text-center">
                <img src="assets/img/partenaires/le-watt.png" alt="Partenaire 4"
                    class="img-fluid rounded-circle shadow-sm"
                    style="width: 120px; height: 120px; object-fit: cover;">
            </div>

            <!-- Ligne 2 (ajout de la marge top) -->
            <div class="col-6 col-sm-4 col-md-3 text-center mt-4">
                <img src="assets/img/partenaires/la_poste.jpeg" alt="Partenaire 5"
                    class="img-fluid rounded-circle shadow-sm"
                    style="width: 120px; height: 120px; object-fit: cover;">
            </div>

            <div class="col-6 col-sm-4 col-md-3 text-center mt-4">
                <img src="assets/img/partenaires/ministere_travaux_publics.png" alt="Partenaire 6"
                    class="img-fluid rounded-circle shadow-sm"
                    style="width: 120px; height: 120px; object-fit: cover;">
            </div>

            <div class="col-6 col-sm-4 col-md-3 text-center mt-4">
                <img src="assets/img/partenaires/oryx_lubrifiant_sa.png" alt="Partenaire 7"
                    class="img-fluid rounded-circle shadow-sm"
                    style="width: 120px; height: 120px; object-fit: cover;">
            </div>

            <div class="col-6 col-sm-4 col-md-3 text-center mt-4">
                <img src="assets/img/partenaires/sototoles.jpg" alt="Partenaire 8"
                    class="img-fluid rounded-circle shadow-sm"
                    style="width: 120px; height: 120px; object-fit: cover;">
            </div>
            </div>
            <br>
        </div>
    </section>
    <!-- Partenaires Area End -->


    </main>
   <?php 
   include('./includes/footer.php')
   ?>
   
   <?php
   include('./includes/footer_link.php')
   ?>
        
    </body>
</html>
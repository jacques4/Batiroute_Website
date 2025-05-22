<!doctype html>
<html class="no-js" lang="fr">

<?php 
include('./includes/header_link.php')
?>

   <body>
      <?php
    include('./includes/header.php')
    ?>
    
    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/hero_top.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>Nos projets</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                    <li class="breadcrumb-item"><a href="#">Projets</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Project Area Start -->
        <section class="project-area  section-padding30">
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
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/build_market1.jpg" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.php?id=4" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.php?id=4">Construction de hangar </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/build_latrine1.jpg" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.php?id=5" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.php?id=5">Construction de latrine </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/build_house2.jpg" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.php?id=6" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.php?id=6">Construction d’une villa </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-project mb-30">
                                                <div class="project-img">
                                                    <img src="assets/img/gallery/build_poste1.jpg" alt="">
                                                </div>
                                                <div class="project-cap">
                                                    <a href="project_details.php?id=7" class="plus-btn"><i class="ti-plus"></i></a>
                                                   <h4><a href="project_details.php?id=7">Travaux de réhabilitation </a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>

                </div>
            </div>
        </section>
        <!-- Project Area End -->
    </main>
 <?php 
   include('./includes/footer.php')
   ?>
   
   <?php
   include('./includes/footer_link.php')
   ?>
        
    </body>
</html>
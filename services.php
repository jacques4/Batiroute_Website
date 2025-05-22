<!doctype html>
<html class="no-js" lang="fr">

<?php 
include('./includes/header_link.php')
?>

   <body>

    <?php
    include('./includes/header.php')
    ?>
<style>
    .icon-blue {
  filter: brightness(0) saturate(100%) invert(19%) sepia(97%) saturate(3000%) hue-rotate(190deg) brightness(95%) contrast(90%);
}
</style>
    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/hero_top.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>Services</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                    <li class="breadcrumb-item"><a href="#">Services</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

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

                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/rehabilitation.jpg" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.php?id=4">Réhabilitation d'ouvrages</a></h4>
                                <a href="services_details.php?id=4" class="more-btn">Lire plus <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-service-cap mb-30">
                            <div class="service-img">
                                <img src="assets/img/service/civil_engineering_expertise.jpeg" alt="">
                            </div>
                            <div class="service-cap">
                                <h4><a href="services_details.php?id=5">Expertise génie civil</a></h4>
                                <a href="services_details.php?id=5" class="more-btn">Lire plus <i class="ti-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Services Area End -->
    </main>
 <?php 
   include('./includes/footer.php')
   ?>
   
   <?php
   include('./includes/footer_link.php')
   ?>
        
    </body>
</html>
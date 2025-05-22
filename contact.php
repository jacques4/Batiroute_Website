<!doctype html>
<html class="no-js" lang="fr">

<?php 
include('./includes/header_link.php')
?>

<body>
  
    <?php
    include('./includes/header.php')
    ?>
    
    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/hero_top.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap pt-100">
                            <h2>Contact</h2>
                            <nav aria-label="breadcrumb ">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="#">Contact</a></li> 
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- slider Area End-->
    <!-- ================ contact section start ================= -->
<br>
<div class="mapouter">
  <div class="gmap_canvas">
    <iframe
      width="100%"
      height="350"
      id="gmap_canvas"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7706.969353332766!2d1.1714868782005399!3d6.210798044404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102159dbe4d1fe0b%3A0xeebb8e82cd8c7000!2sBATIROUTE%20SARL!5e0!3m2!1sfr!2stg!4v1747737872475!5m2!1sfr!2stg"
      frameborder="0"
      scrolling="no"
      marginheight="0"
      marginwidth="0"
      style="border:0;"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
  <style>
.mapouter {
  position: relative;
  width: 70%;
  height: 450px; /* ✅ ici */
  margin: 0 auto;
}

.gmap_canvas {
  overflow: hidden;
  background: none !important;
  height: 100%; /* ✅ ou fixe, comme 450px */
  width: 100%;
}

#gmap_canvas {
  height: 100%; /* ✅ ou fixe aussi */
  width: 100%;
}

  </style>
</div>

<section class="contact-section">
  <div class="container">  
    <div class="row">
      <div class="col-12">
        <h2 class="contact-title">Nous contactez</h2>
      </div>
      <div class="col-lg-8">

          <?php
          $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
          ?>

        <form class="form-contact contact_form" action="process/traitement_process.php" method="post">
          <div class="row">

            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control custom-input" name="name" id="name" type="text" 
                placeholder="Entrez votre nom" required>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control custom-input" name="email" id="email" type="email" 
                placeholder="Entrez votre e-mail" value="<?php echo $email; ?>" required>
              </div>
            </div>

            <div class="col-12">
              <div class="form-group">
                <input class="form-control custom-input" name="subject" id="subject" type="text" 
                placeholder="Entrez votre sujet" required>
              </div>
            </div>

            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control custom-input" name="message" id="message" rows="6"
                  placeholder="Entrez votre message" required></textarea>
              </div>
            </div>
          </div>



          <div id="loader" class="loading-dots" style="display: none;"></div>
              <div class="col-md-12 text-center mt-4">
                  <button type="submit" class="btn btn-primary" id="submitBtn">Envoyer</button>
              </div>
        </form>
      </div>

      <div class="col-lg-3 offset-lg-1">
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-home"></i></span>
          <div class="media-body">
            <h3>Non loin de MAMA Clinique.</h3>
            <p>Agoè Téléssou - 23 BP 180 </p>
            <p>Lomé - Togo</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-tablet"></i></span>
          <div class="media-body">
            <h3>+228 90 00 08 91</h3>
            <p>Du lundi au vendredi de 07h30 à 18h00</p>
            <p>Samedi de 09h00 à 12h00</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3>contact@batiroute.com</h3>
            <p>Envoyez-nous votre demande à tout moment !</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include('./modal/modal_view.php'); ?>


<style>

  input.custom-input,
  textarea.custom-input {
    border: 2px solid #d3d3d3 !important;
    border-radius: 6px !important;
    padding: 12px 16px !important;
    font-size: 16px !important;
    color: #000 !important;
    background-color: #fff !important;
    width: 100% !important;
  }

  input.custom-input::placeholder,
  textarea.custom-input::placeholder {
    color: #666 !important;
    opacity: 1 !important;
  }

  input.custom-input:focus,
  textarea.custom-input:focus {
    border-color: #0056b3 !important;
    outline: none !important;
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
  }
  </style>
</section>

    <!-- ================ contact section end ================= -->
 <?php 
   include('./includes/footer.php')
   ?>
   
   <?php
   include('./includes/footer_link.php')
   ?>
        
    </body>
    
    </html>
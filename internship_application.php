<!doctype html>
<html lang="fr">

<?php include('./includes/header_link.php') ?>

<body>
<?php include('./includes/header.php') ?>

<main>
    <!-- Section Titre -->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/hero_top.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8">
                        <div class="hero-cap hero-cap2 pt-120">
                            <h2>Demande de stage</h2>
                             <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                    <li class="breadcrumb-item"><a href="#">Carrière</a></li> 
                                    <li class="breadcrumb-item"><a href="#">Stage</a></li> 
                                    </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire de demande de stage -->
    <section class="contact-section pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-10 text-center">
                    <h3>Formulaire de candidature pour un stage</h3>
                    <p>Remplissez soigneusement ce formulaire pour soumettre votre demande de stage.</p>
                </div>
            </div>
            <form action="process/internship_process.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <!-- Informations personnelles -->
                    <div class="col-md-6 mb-3">
                        <label>Nom complet</label>
                        <input type="text" name="lastname" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Prénom</label>
                        <input type="text" name="firstname" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Téléphone</label>
                        <input type="number" name="phone" class="form-control" required>
                    </div>
                    <!-- Lettre de motivation -->
                    <div class="col-md-12 mb-3">
                        <label>Lettre de motivation</label>
                        <input type="file" name="motivation" accept=".pdf,.doc,.docx" class="form-control" required>
                    </div>
                    <!-- Pièces jointes -->
                    <div class="col-md-12 mb-3">
                        <label>Curriculum Vitae (CV)</label>
                        <input type="file" name="cv" accept=".pdf,.doc,.docx" class="form-control" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Copie légalisée des diplômes ou attestations</label>
                        <input type="file" name="diplomes[]" accept=".pdf,.jpg,.jpeg,.png" class="form-control" multiple required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Copie simple de la carte nationale d'identité</label>
                        <input type="file" name="cni" accept=".pdf,.jpg,.jpeg,.png" class="form-control" required>
                    </div>

                    <!-- Bouton -->
                     <div id="loader" class="loading-dots" style="display: none;"></div>

                    <div class="col-md-12 text-center mt-4">
                        <button type="submit" class="btn btn-primary" id="submitBtn">Soumettre la demande</button>
                    </div>
                </div>
            </form>
        </div>

    <?php include('./modal/modal_view.php'); ?>
    
    </section>
</main>

<?php include('./includes/footer.php') ?>
<?php include('./includes/footer_link.php') ?>

</body>
</html>

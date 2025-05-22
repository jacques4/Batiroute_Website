<!doctype html>
<html class="no-js" lang="fr">

<?php 
include('./includes/header_link.php');
?>

<body>

<?php
include('./includes/header.php');

// Déclaration des services
$services = [
    1 => [
        "title" => "Construction de bâtiments",
        "image" => "assets/img/service/building_construction.jpg",
        "content" => "Batiroute SARL conçoit et réalise des bâtiments modernes, fonctionnels et respectueux des normes de sécurité. Qu’il s’agisse d’infrastructures résidentielles, commerciales, institutionnelles ou industrielles, nous assurons un accompagnement complet allant de l’étude architecturale à la remise des clés. Notre approche intègre durabilité, esthétique et optimisation des coûts pour offrir des espaces confortables et pérennes."
    ],
    2 => [
        "title" => "Construction de routes",
        "image" => "assets/img/service/roads_construction.jpeg",
        "content" => "Spécialisée dans les travaux routiers, Batiroute SARL développe des routes fiables, résistantes et adaptées aux contraintes locales. Grâce à notre maîtrise des techniques de terrassement, de drainage, de chaussées et d’enduits, nous améliorons la mobilité des populations et facilitons les échanges économiques dans les zones urbaines comme rurales. La sécurité et la longévité de nos infrastructures sont au cœur de nos préoccupations."
    ],
    3 => [
        "title" => "Construction d’ouvrages d’art",
        "image" => "assets/img/service/works_art_construction.jpg",
        "content" => "Ponts, viaducs, passerelles, tunnels… Batiroute SARL réalise des ouvrages d’art complexes avec une exigence rigoureuse en matière de stabilité, de sécurité et de performances techniques. Nous combinons innovation et savoir-faire pour créer des structures fiables, esthétiques et durables, capables de résister aux charges dynamiques et aux aléas climatiques."
    ],
    4 => [
        "title" => "Réhabilitation d'ouvrages",
        "image" => "assets/img/service/rehabilitation.jpg",
        "content" => "Batiroute SARL intervient dans la réhabilitation d’ouvrages dégradés ou obsolètes en leur redonnant solidité, fonctionnalité et conformité. Grâce à des solutions techniques adaptées, nous prolongeons la durée de vie des infrastructures tout en respectant les exigences environnementales et réglementaires. Chaque intervention est réalisée dans une démarche de sécurité, de précision et de fiabilité."
    ],
    5 => [
        "title" => "Expertise en génie civil",
        "image" => "assets/img/service/civil_engineering_expertise.jpeg",
        "content" => "Notre bureau d’études en génie civil accompagne les maîtres d’ouvrage publics et privés dans la réussite de leurs projets. De l’étude de faisabilité aux diagnostics structurels, en passant par l’évaluation des sols et la modélisation des structures, Batiroute SARL propose des analyses techniques pointues, des audits détaillés et des recommandations fiables pour garantir la viabilité et la sécurité des ouvrages."
    ]
];

// Récupération de l'ID et vérification de sa validité
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$service = array_key_exists($id, $services) ? $services[$id] : null;
?>

<main>
    <!-- Section Slider -->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/hero_top.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8">
                        <div class="hero-cap hero-cap2 pt-120">
                            <h2><?= $service ? htmlspecialchars($service['title']) : 'Service introuvable' ?></h2>
                            <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                    <li class="breadcrumb-item"><a href="#">Détail du service</a></li> 
                                    </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Détails du service -->
    <?php if ($service): ?>
    <div class="services-details-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-services section-padding2">
                        <div class="details-img mb-40">
                            <img src="<?= htmlspecialchars($service['image']) ?>" alt="Image du service">
                        </div>
                        <div class="details-caption">
                            <b><i><?= htmlspecialchars($service['title']) ?></i></b>
                            <p style="text-align: justify;"><?= htmlspecialchars($service['content']) ?></p>

                            <h3>Comment pouvons-nous vous aider ?</h3>
                            <p>Notre équipe est disponible pour vous accompagner dans la réalisation de vos projets. Contactez-nous pour un devis personnalisé ou pour plus d'informations.</p>

                              <!-- Bouton de retour -->
                               <div class="text-center mt-4">
                                    <a href="services.php" class="btn red-btn2" >
                                        ← Retour aux services
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
    <div class="container text-center mt-5">
        <h2>Service introuvable</h2>
        <p>Le service que vous recherchez n'existe pas ou a été supprimé.</p>
        <a href="services.php" class="btn btn-primary mt-3">Retour aux services</a>
    </div>
    <?php endif; ?>
</main>

<?php 
include('./includes/footer.php');
include('./includes/footer_link.php');
?>

</body>
</html>

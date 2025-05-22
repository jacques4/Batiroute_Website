<!doctype html>
<html class="no-js" lang="fr">
    <?php 
    include('./includes/header_link.php')
    ?>

   <body>
    
    <?php
    include('./includes/header.php');

// Déclaration des projets
$services = [
    1 => [
        "title" => "Construction de bâtiments",
        "image" => ["assets/img/gallery/build_house11.jpg","assets/img/gallery/build_house12.jpg",
                    "assets/img/gallery/build_house13.jpg","assets/img/gallery/build_house14.jpg"],
        "content" => "Construction du bâtiment de la femme à la maison des jeunes et de la femme de Tsévié."
    ],
    2 => [
        "title" => "Construction de bâtiments",
        "image" => ["assets/img/gallery/build_house1.jpg"],
        "content" => "Construction du bâtiment."
    ],
    3 => [
        "title" => "Travaux de dallage",
        "image" => ["assets/img/gallery/build_dalle1.jpg","assets/img/gallery/build_dalle2.jpg",
                    "assets/img/gallery/build_dalle3.jpg","assets/img/gallery/build_dalle4.jpg"],
        "content" => "Dallage de 4000m2 à ORYX."
    ],
    4 => [
        "title" => "Construction de hangar",
        "image" => ["assets/img/gallery/build_market1.jpg","assets/img/gallery/build_market2.jpg"],
        "content" => "Construction de hangar pour le marché de Logoté."
    ],
    5 => [
        "title" => "Construction de latrine",
        "image" => ["assets/img/gallery/build_latrine1.jpg","assets/img/gallery/build_latrine2.jpg",
                    "assets/img/gallery/build_latrine3.jpg"],
        "content" => "Construction de latrine à EPP Hedzranawe."
    ],
    6 => [
        "title" => "Construction d’une villa",
        "image" => ["assets/img/gallery/build_house2.jpg"],
        "content" => "Construction d’une villa F7 à la Cité Oua"
    ],
    7 => [
        "title" => "Travaux de réhabilitation",
        "image" => ["assets/img/gallery/build_poste1.jpg","assets/img/gallery/build_poste2.jpg",
                    "assets/img/gallery/build_poste3.jpg"],
        "content" => "Réhabilitation du bureau de poste de Danyi et de Tohoun."
    ]
];

// Récupération de l'ID et vérification de sa validité
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$service = array_key_exists($id, $services) ? $services[$id] : null;
?>
    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/hero_top.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                 <h2><?= $service ? htmlspecialchars($service['title']) : 'Service introuvable' ?></h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                                    <li class="breadcrumb-item"><a href="#">Detail du projet</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->


        <!-- Services Details Start -->
        <?php if ($service): ?>
        <div class="services-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-services section-padding2">
                            <div class="row">
                            <?php foreach ($service['image'] as $img): ?>
                                <div class="col-md-6 mb-4"> <!-- Chaque image prend 6 colonnes (sur 12), donc 2 par ligne -->
                                    <div class="details-img">
                                        <img src="<?= htmlspecialchars($img) ?>" alt="Image du projet" class="img-fluid" style="max-height: 400px; object-fit: cover;">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                             </div>

                            <div class="details-caption">
                                <h3><?= nl2br(htmlspecialchars($service['content'])) ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p class="text-danger">Projet introuvable ou ID invalide.</p>
    <?php endif; ?>





        <!-- Services Details End -->
    </main>
 <?php 
   include('./includes/footer.php')
   ?>
   
   <?php
   include('./includes/footer_link.php')
   ?>
        
    </body>
</html>
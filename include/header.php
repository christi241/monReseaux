<?php

require_once "constant.php";
    include ("../controller/db.php");
$req2= "SELECT * FROM users";
$resp1=mysqli_query($conn,$req2);
print_r($_SERVER);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=isset($titrepage) && !empty($titrepage)?$titrepage."| ".TRITRESITE:TRITRESITE ?></title>
    <link rel="shortcut icon" href="./image/imagefavicon.jpg" type="image/jpg">
    <meta name="description" content="<?= isset($descriptionPage)&& !empty($descriptionPage)?$descriptionPage:description?>">
    <meta name="keywords" content="quelque, mots, clés, séparés, avec, des, virgules">
    <meta name="author" content="Auteur de la page">
    <link rel="stylesheet" href="./style/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/icons-1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./style/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="./style/scriptjs/script.js" async></script>
</head>
<body>
    <header class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="<?= ROOTPATH?>" class="navbar-brand" title="Afficher la page d'accueil">
                <?=TRITRESITE ?>
            </a>
            <button title="Afficher menu" class="navbar-toggler" aria-controls="offcanvasNavbar" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" type="button">
                <i class="navbar-toggler-icon"></i>
            </button>
            <nav class="nav offcanvas offcanvas-end" aria-labelledby="offcanvasNavbarLabel" id="offcanvasNavbar" tabindex="-1">
                <div class="offcanvas-header bg-info">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <a href="<?= ROOTPATH?>" title="Afficher la page d'accueil" class="navbar-brand text-dark">
                            <?=TRITRESITE?>
                        </a>
                    </h5>
                    <button class="btn-close" data-bs-dismiss="offcanvas" title="Fermer" type="button" aria-label="Fermer"></button>
                </div>
                <div class="offcanvas-body bg-dark">
                    <ul class="navbar-nav nav-pills" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="<?= ROOTPATH?>" aria-selected="true" title="Afficher la page d'accueil" id="nav-home-tab" aria-controls="nav-home" class="nav-link active" role="tab">
                                <i class="bi-house-fill"></i>
                                Accueil
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a id="nav-presentation-tab" aria-selected="false" aria-controls="nav-presentation" title="Afficher la page de présentation" href="apropos.html" class="nav-link" role="tab" >
                                <i class="bi-list"></i>
                                à propos de nous 
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a title="Afficher la page de contact" aria-controls="nav-contact"  href="nous-contacter.html"class="nav-link" aria-selected="false"  role="tab">
                                <i class="bi-telephone"></i>
                                Contact
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a title="Afficher la page de contact" aria-controls="nav-contact"  href="<?= ROOTPATH ?>inscription.html" class="btn btn-success" aria-selected="false"  role="tab">
                                <i class="bi-person-fill"></i>
                                inscription
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
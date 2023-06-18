<?php
//DEFINITION DES ROUTES
$routes->map("GET","/monReseaux/",function(){
    //le fichier a apeller si dans la bar url de l'utilisateur il y a "/monsiteEcommerce/ce-que-nous-voulons.html"
    require_once "./view/acceuil.php";
});
#route pour la page d;inscription
$routes->map("GET","/monReseaux/inscription.html",function(){
    //le fichier a apeller si dans la bar url de l'utilisateur il y a "/monsiteEcommerce/inscription.html"
    require_once "./view/inscription/incription.php";
});

$routes->map("GET","/monReseaux/apropos.html",function(){
    //le fichier a apeller si dans la bar url de l'utilisateur il y a "/monsiteEcommerce/apropos.html"
    require_once "./view/apropos.php";
});


$routes->map("GET","/monReseaux/nous-contacter.html",function(){
    //le fichier a apeller si dans la bar url de l'utilisateur il y a "/monsiteEcommerce/nous-contacter.html"
    require_once "./view/contact.php";
});




#route pour le traitement d'incription
$routes->map("POST","/monReseaux/inscription.html",function(){
    require_once "./controller/isncription/traitementInscription.php";
});

#route pour la base de donnes
$routes->map("GET","/monReseaux/base_donn.html",function(){
    require_once "./controller/db.php";
});

?>
<?php
$titrepage="inscription";
$descriptionPage= "voici   la page d'inscription";
require_once "./include/header.php";


?>
    <main class="home-main container my-5">
        <div class="row">

            <div class="col-md-8 col-lg-6 mx-auto">
                <section class="form-inscription">
            
            <form action="inscription.html" class="form-horizontal" method="POST" >

            <fieldset>
                <legend>
                    <h1 class="fs-3">
                        inscription
                    </h1>
                </legend>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="khady" name="prenomUtilisateur" require autofocus placeholder="prenom">
                    <label for="khady">votre prenom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control"  id="christ" require name="nomUtilisateur" placeholder="nom">
                    <label for="christ" >votre nom</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control"  id="email" require name="emailUtilisateur" placeholder="nom">
                    <label for="email" >votre email</label>
                </div>
                <div class="form-check mb-3">
                    <input type="radio" class="" name="sexeUtilisateur" value="M" id="male">
                    <label for="mal" >masculin</label>
                    <br>
                    <input type="radio" class="" name="sexeUtilisateur" value="f" id="femmelle">
                    <label for="femmelle" >feminin</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="autreprenom" name="motsDepasseUtilisateur" placeholder="votre mots de passe" require>
                    <label for="autreprenom" >votre mots de passe</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="confirmeprenom" name="confiremodts" placeholder="votre mots de passe" require>
                    <label for="confirmeprenom" >veuillez confirmer votre mots de passe</label>
                </div>
                <div class="form-group mb-e">
                    <button class="btn btn-success btn-lg " name="submit">
                        <i class="bi-check-circle"></i>je m'inscrit
                    </button>
                </div>
            </fieldset>
            </form>
            
            </section>

            </div>
          </div>
    </main>


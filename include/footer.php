<footer class="bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Adresses</h2>
                    <div class="sociaux fs-1">
                        <a title="Cliquer ici pour afficher notre page Facebook" aria-label="Facebook" href="https://m.facebook.com/groups/271809396727601" class="text-decoration-none">
                            <i class="bi-facebook"></i>
                        </a>
                        <a title="Cliquer ici pour entrer en contact avec nous sur WhatsApp" aria-label="Whatsapp" href="https://wa.me/+221762793498?text=Je suis intéressé par votre produit" class="text-decoration-none">
                            <i class="bi-whatsapp"></i>
                        </a>
                        <a title="Cliquer ici pour afficher notre page Instagram" aria-label="Instagram" href="#" class="text-decoration-none">
                            <i class="bi-instagram"></i>
                        </a>
                        <a title="Cliquer ici pour afficher notre page Twitter" aria-label="Twitter" href="#" class="text-decoration-none">
                            <i class="bi-twitter"></i>
                        </a>
                        <a title="Cliquer ici pour afficher notre page LinkedIn" aria-label="LinkedIn" href="#" class="text-decoration-none">
                            <i class="bi-linkedin"></i>
                        </a>
                    </div>
                    <address class="notre-adresse">
                        <div class="adresse">
                            <i class="bi-map" aria-label="Adresse"></i>
                            <a title="Cliquer ici pour tracer une itinéraire conduisant chez nous" href="https://goo.gl/maps/mPRozCWekiGWctyP9" target="_blank" class="text-decoration-none text-light">
                              :  Avenue Cheikh Anta DIOP
                            </a>
                        </div>
                        <div class="phone">
                            <a href="tel:+221762793498" class="text-decoration-none text-light">
                                <i class="bi-telephone"></i>
                               : Appel direct
                            </a>
                        </div>
                    </address>
                </div>
                <div class="col-md-4">
                    <h2>Liens rapides</h2>
                    <nav class="">
                        <div class="nav-item">
                            <a href="<?= ROOTPATH?>" class="nav-link btn btn-outline-success btn-lg">
                                Accueil
                            </a>
                        </div>
                        <br>
                        <div class="nav-item">
                            <a href="#" class="nav-link btn btn-outline-success btn-lg">
                                Contact
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="col-md-4">
                    <h2>Besoin d'aide ?</h2>
                    <form action="" method="POST" class="form-horizontal text-dark">
                        <div class="form-floating mb-3">
                            <input class="form-control" type="email" id="emailUtilisateur" name="adressemail" placeholder="Votre mail">
                            <label for="emailUtilisateur">Votre E-Mail ici</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control h-25" placeholder="Votre texte" name="messageaide" id="messg" cols="30" rows="10"></textarea>
                            <label for="messg">Vous pouvez détailler votre message ici (facultatif)</label>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi-send"></i>
                                Envoyer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <p class="coyright">
                        &copy; Mon site Tous droits réservés !
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
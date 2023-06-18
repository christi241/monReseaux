<?php
$titrepage="acceuil";
$descriptionPage= "description de la page d'acceuile";
require_once "./include/header.php";



?>

    <main class="home-main container">
        <h1 class="p-5 rounded shadow-lg my-5 bg-info">mon site web</h1>
        
    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h5">@LeeCross</div>
                        <div class="h7 text-muted">christopher</div>
                        <div class="h7">Developer of web applications, JavaScript, PHP, Java, Python, Ruby, Java, Node.js,
                            etc.
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6 gedf-main">

            <!-- tous sur le code php pour l'ajout des post -->

                
                <div class="card gedf-card">
                <div class="card-body">
                    <h1 class="text-center">faite des poste </h1>
                <form  method="post" action="index.php" >
                <div class="nb-3">
                <label for="prix" class="form-label">commentaire</label>
                <input type="text" class="form-control"  name="media" >
                </div>
                <div class="nb-3">
                <label for="img" class="form-label">image</label>
                <input type="file" class="form-control"  name="img" >
                </div>
                <br>
                <div class="user-box">
                </div>
            <br>
            <div class="nb-3">
                <button type="submit" class="btn btn-success mb-3" name="submit">Confirm</button>
                <button type="button" class="btn btn-danger mb-3" name="annulez">annulez</button>
            </div>
        </form>
                    </div>
                    
                </div>
         
                <!-- Post /////-->


               
                <form  method="post" action="#" enctype="multipart/form-data">
                <div class="card my-3">
                            <div class="card-header bg-white border-0 py-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between">
                                        <a href="#">
                                            <img class="rounded-circle" src="https://picsum.photos/80/80/?random?image=1" width="45" alt="" />
                                        </a>
                                        <div class="ml-3">
                                            <div class="h6 m-0">
                                                <a href="#"></a> <?php echo $row3['username']?> <a href="#"><?php echo $_SESSION["email"]?></a>
                                            </div>
                                            <div class="text-muted h8">Hace 5 miin <i class="fa fa-globe" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pt-0 pb-2">
                                La fuerza es el único lenguaje que el mal entiende. ¡Derrota monstruos para conseguir
                                muchas recompensas!
                            </div>
                            <img class="card-img-top rounded-0" src="https://picsum.photos/320/250/?random?image=1" alt="Card image cap">
                            <div class="card-footer bg-white border-0 p-0">
                                <div class="d-flex justify-content-between align-items-center py-2 mx-3 border-bottom">
                                    <div>

                                    </div>
                                    <div class="h7"> 3279 <a href="#"><?php echo $row['media']?></a> 44845 veces <a href="#">compartido</a></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center my-1">
                                    <div class="col">
                                        <button type="button" class="btn btn-fbook btn-block btn-sm"> <i class="fa fa-thumbs-up"
                                                aria-hidden="true"></i> Me gusta</button>
                                    </div>
                                    <div class="col">
                                        <button type="button" class="btn btn-fbook btn-block btn-sm"><i class="fa fa-comment"
                                                aria-hidden="true"></i> Comentar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                       

                <!--- \\\\\\\Post-->
                <form  method="post" action="#" enctype="multipart/form-data">
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://picsum.photos/50/50" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0"><?php echo $row3['username']?></div>
                                    <div class="h7 text-muted"></div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header"><?php echo $row['media']?></div>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Hide</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i> Hace 40 min</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">Totam non adipisci hic! Possimus ducimus amet, dolores illo ipsum quos
                                cum.</h5>
                        </a>
                        <div class="card-body pt-0 pb-2">
                            <img class="card-img-top rounded-0" src="https://picsum.photos/320/250/?random?image=1" alt="Card image cap">
                        </div>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam sunt fugit reprehenderit consectetur exercitationem odio,
                            quam nobis? Officiis, similique, harum voluptate, facilis voluptas pariatur dolorum tempora sapiente
                            eius maxime quaerat.
                            <a href="https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU" target="_blank">https://mega.nz/#!1J01nRIb!lMZ4B_DR2UWi9SRQK5TTzU1PmQpDtbZkMZjAIbv97hU</a>
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    </div>
                </div>
                </form>
               
                <!-- Post /////-->
            </div>

            <div class="col-md-3">
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card gedf-card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    </main>


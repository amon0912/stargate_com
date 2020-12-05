<header class="container-fluid" style="border-left:8px solid #FF8103;">
    <div class="row pt-1 pb-3">
        <div class="col-md-3 text-center">
            <a href="?p=home">
                <p>
                    <img class="img-fluid" width="250" src="assets/images/logo-stg.png" alt="">
                </p>
            </a>
        </div>

        <div class="d-flex justify-content-evenly col-md-9">
            <div class="d-flex">
                <div class="m-1 ">
                    <img src="assets/images/video.png" class="" width="32" height="32" alt="">
                </div>
                <form action="" method="post" class="d-flex">
                    <div class="form-group">
                        <input style="border-radius:20px;" type="text" class="form-control shadow border-0"
                            id="exampleInput" placeholder="">
                    </div>
                    <div class="ml-2 mr-2 form-group">
                        <input style="border-radius:20px;"
                            class="form-control shadow border-0 text-center kArriere-plan text-white" type="submit"
                            value="Rechercher">
                    </div>
                    <div class="m-1">
                        <!-- <img src="assets/images/besk.png" class="" width="32" height="32" alt=""> -->
                        <div class="dropdown _dropleft">
                            <div class="dropdown-toggled" type="" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-expanded="false">
                                <img src="assets/images/besk.png" class="" width="32" height="32" alt=""><span
                                    id="nbreAjout">0</span>
                            </div>
                            <!-- <ul class="dropdown-menu kArrondir kBg-drop" aria-labelledby="dropdownMenuButton">
                                <li class="mt-1 mr-2 ml-2 mb-1 text-center"><a
                                        class="dropdown-item kArrondir text-white kHover"
                                        href="?p=#1voir-votre-panier">Voir votre
                                        panier</a>
                                </li>
                                <li class="mt-1 mr-2 ml-2 mb-1 text-center">
                                    <a class="dropdown-item kArrondir text-white kHover" href="#">Modifier votre
                                        panier</a>
                                </li>
                                <li class="mt-1 mr-2 ml-2 mb-1 text-center"><a
                                        class="dropdown-item kArrondir text-white kHover" href="#">Ajouter de
                                        l'argent</a></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="m-1">
                        <!-- <img src="assets/images/pers.png" class="" width="32" height="32" alt=""> -->

                        <div class="dropdown _dropleft">
                            <div class="dropdown-toggled" type="" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-expanded="false">
                                <img src="assets/images/pers.png" class="" width="32" height="32" alt="">
                            </div>

                            <ul class="dropdown-menu kArrondir kBg-drop" aria-labelledby="dropdownMenuButton">

                                <?php if(!empty($_SESSION['kid'])){ ?>
                                <li class="mt-1 mr-2 ml-2 mb-1 text-center"><a
                                        class="dropdown-item kArrondir text-white kHover" href="?p=mon-compte">Mon
                                        Compte</a>
                                </li>
                                <li class="mt-1 mr-2 ml-2 mb-1 text-center">
                                    <a class="dropdown-item kArrondir text-white kHover"
                                        href="?p=boite-de-reception">Boîte
                                        de
                                        réception</a>
                                </li>
                                <li class="mt-1 mr-2 ml-2 mb-1 text-center"><a
                                        class="dropdown-item kArrondir text-white kHover"
                                        href="?p=affiliation">Affiliation</a>
                                </li>
                                <hr>
                                <li class="mt-1 mr-2 ml-2 mb-1 text-center"><a
                                        class="dropdown-item kArrondir text-white kHover"
                                        href="?p=deconnexion">Déconnexion</a>
                                </li>

                                <?php } else { ?>

                                <li class="mt-1 mr-2 ml-2 mb-1 text-center">
                                    <a class="dropdown-item kArrondir text-white kHover" href="?p=connexion"
                                        data-toggle="modal" data-target="#modalConnexion">Connexion
                                    </a>
                                </li>
                                <hr>
                                <li class="mt-1 mr-2 ml-2 mb-1 text-center"><a
                                        class="dropdown-item kArrondir text-white kHover"
                                        href="?p=inscription">Inscription</a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div> <!-- fin row -->
</header>
<div style="border-bottom:8px solid #FF8103; width:100px;"></div>


<!-- Modal -->
<div class="modal fade" id="modalConnexion" tabindex="-1" aria-labelledby="modalConnexion-id" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content kArrondir kArriere-plan-gris">
            <div class="modal-header">
                <h5 class="modal-title" id="modalConnexion-id">
                    <img src="assets/images/logo-stg.png" class="img-fluid" alt="">
                    <!-- Se connecter -->
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="msg"></div>
                <form id='form'>
                    <div class="form-group">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control kArrondir shadow" placeholder="Email ou numéro"
                                autofocus name="login">
                        </div>

                        <div class="form-group mb-3">
                            <input type="password" class="form-control kArrondir shadow" placeholder="Mot de passe"
                                name="mdp">
                        </div>
                    </div>

                    <div class="float-right">
                        <button type="button" class="btn btn-outline-danger kArrondir"
                            data-dismiss="modal">Quitter</button>
                        <input type="submit" class="btn kArriere-plan kArrondir" value="Connection">
                    </div>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger kArrondir" data-dismiss="modal">Quitter</button>
                <button type="button" class="btn kArriere-plan kArrondir">Connection</button>
            </div> -->
        </div>
    </div>
</div>
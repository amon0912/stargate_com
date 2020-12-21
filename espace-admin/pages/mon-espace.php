<?php
if (empty($_SESSION['id'])) {
    header('Location:index.php');
} else { ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-4 mb-3">
            <a class="lead text-decoration-none" href="?p=formation">
                <div class="card w-100 h-100 btn-outline-primary">
                    <div class="card-body">

                        <ion-icon style="font-size: 45px;" name="duplicate-outline"></ion-icon>
                        <p class="card-text">Ajoutez une formation</p>
                    </div>
                </div>
            </a>
        </div>
        <!--  -->
        <div class="col-md-4 mb-3">
            <a class="lead text-decoration-none" href="?p=offre">
                <div class="card w-100 h-100 btn-outline-primary">
                    <div class="card-body">
                        <ion-icon style="font-size: 45px;" name="duplicate-outline"></ion-icon>
                        <p class="card-text">Ajoutez une offre</p>
                    </div>
                </div>
            </a>
        </div>
        <!--  -->
        <div class="col-md-4 mb-3">
            <a class="lead text-decoration-none" href="?p=envoi-message-all">
                <div class="card w-100 h-100 btn-outline-primary ">
                    <div class="card-body">
                        <i class="fas fa-comment fa-3x fa-fw"></i>
                        <p class="card-text">Envoyez un message à tous les utilisateurs</p>
                    </div>
                </div>
            </a>
        </div>
        <!--  -->
        <div class="col-md-4 mb-3">
            <a class="lead text-decoration-none" href="?p=liste-message-envoi">
                <div class="card w-100 h-100 btn-outline-primary ">
                    <div class="card-body">
                        <i class="fas fa-comment fa-3x fa-fw"></i>
                        <i class="fas fa-user fa-3x fa-fw"></i>
                        <p class="card-text">Voir la liste des messages envoi aux utilisateurs</p>
                    </div>
                </div>
            </a>
        </div>
        <!--  -->
        <div class="col-md-4 mb-3">
            <a class="lead text-decoration-none" href="?p=show-offre">
                <div class="card w-100 h-100 btn-outline-success ">
                    <div class="card-body">
                        <i class="fas fa-list fa-3x fa-fw"></i>
                        <p class="card-text">Voir la liste des ajouts offres ou créations</p>
                    </div>
                </div>
            </a>
        </div>
        <!--  -->
        <div class="col-md-4 mb-3">
            <a class="lead text-decoration-none" href="?p=show-formation">
                <div class="card w-100 h-100 btn-outline-success ">
                    <div class="card-body">
                        <i class="fas fa-list fa-3x fa-fw"></i>
                        <p class="card-text">Voir la liste des ajouts formations</p>
                    </div>
                </div>
            </a>
        </div>
        <!--  -->
        <div class="col-md-4 mb-3">
            <a class="lead text-decoration-none" href="?p=liste-user">
                <div class="card w-100 h-100 btn-outline-info">
                    <div class="card-body">
                        <i class="fas fa-user fa-3x fa-fw"></i>
                        <p class="card-text">Liste des utilisateurs</p>
                    </div>
                </div>
            </a>
        </div>
        <!--  -->
        <div class="col-md-4 mb-3">
            <a class="lead text-decoration-none" href="?p=demande-crea">
                <div class="card w-100 h-100 btn-outline-info">
                    <div class="card-body">
                        <i class="fas fa-pencil-ruler  fa-3x fa-fw"></i>
                        <p class="card-text">Liste des Demandes des créations ou offres</p>
                    </div>
                </div>
            </a>
        </div>
        <!--  -->
        <div class="col-md-4 mb-3">
            <a class="lead text-decoration-none" href="?p=demande-formation">
                <div class="card w-100 h-100 btn-outline-info">
                    <div class="card-body">
                        <i class="fas fa-book fa-3x fa-fw"></i>
                        <p class="card-text">Liste des Demandes des formations</p>
                    </div>
                </div>
            </a>
        </div>
        <!--  -->
        <div class="col-md-4 mb-3">
            <a class="lead text-decoration-none" href="?p=message">
                <div class="card w-100 h-100 btn-outline-info">
                    <div class="card-body">
                        <i class="fas fa-envelope fa-3x fa-fw"></i>
                        <p class="card-text">Messages</p>
                    </div>
                </div>
            </a>
        </div>
        <!--  -->

    </div>
</div>

<?php } ?>
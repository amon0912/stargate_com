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
            <a class="lead text-decoration-none" href="?p=show-deco">
                <div class="card w-100 h-100 btn bg-warning">
                    <div class="card-body">
                        <i class="fas fa-braille fa-3x fa-fw"></i>
                        <p class="card-text">Liste des décos</p>
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
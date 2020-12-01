<div class="container-fluid" style="border-left:8px solid #FF8103">
    <div class="row">

        <!-- offre du jour  -->
        <div class="col-md-3 mt-3">
            <h3 class="">Formation</h3>
            <?php include('inc/formation-slide.php'); ?>
        </div>

        <!-- slide -->
        <div class="col-md-9 mt-3" id="new-offre">
            <div class="row">
                <?php
            $kOffres = scandir('assets/images/offres', 1);
            $kFormations = scandir('assets/images/formations', 1);
            foreach ($kOffres as $keykOffres=> $valuekOffres) {
                if($valuekOffres != '.' && $valuekOffres != '..'){ ?>
                <div class="col-md-4 mb-3">
                    <div class="card kArrondir" style="width: 18rem;">
                        <img src="assets/images/offres/<?= $valuekOffres ?>" class="card-img-top kArrondir img-fluid"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Promo</h5>
                            <p class="card-text">Spécial décembre 75% sur tous nos services</p>
                            <a href="?p=#1e-profite-de-loffre&offre=<?= $valuekOffres ?>"
                                class=" btn kArrondir kArriere-plan text-white">Je profite de l'offre</a>
                        </div>
                    </div>
                </div>
                <?php }
        } 
         ?>


                <?php

            $kFormations = scandir('assets/images/formations', 1);
            foreach ($kFormations as $keykFormations=> $valuekFormations) {
                if($valuekFormations != '.' && $valuekFormations != '..'){ ?>
                <div class="col-md-4 mb-3 ">
                    <div class="card kArrondir" style="width: 18rem;">
                        <img src="assets/images/formations/<?= $valuekFormations ?>"
                            class="card-img-top kArrondir img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Formation</h5>
                            <p class="card-text">Spécial décembre 75% sur toutes nos formations</p>
                            <a href="?p=#1e-profite-de-la-formation&formation=<?= $valuekFormations ?>"
                                class=" btn kArrondir kArriere-plan text-white">Participer</a>
                        </div>
                    </div>
                </div>
                <?php }
        } 
         ?>
            </div>
        </div>
    </div>
</div>
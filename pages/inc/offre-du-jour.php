<div class="">
    <div class="caro-offre-du-jour d-flex">
        <?php
     $offres = scandir("assets/images/offres");
    //  var_export($offres);
    foreach ($offres as $keyOffres => $valueOffres) {
        if($valueOffres != '.' && $valueOffres != '..'){ ?>
        <div>
            <a class="text-decoration-none" href="?p=#e-profite-de-loffre&offre=<?= $valueOffres ?>">
                <p class="text-center">
                    <img src="assets/images/offres/<?= $valueOffres ?>" class="img-fluid kArrondir h-100 w-100" style=""
                        alt="image offre">
                </p>
            </a>

            <div class="float-right shadow-sm kArrondir border bg-body pr-3 pl-3 pt-1 pb-1 mt-2">
                <a href="?p=#e-profite-de-loffre&offre=<?= $valueOffres ?>" class="text-decoration-none kColor-text">
                    Je profite
                </a>
            </div>

        </div>
        <?php }
} ?>
    </div>
</div>
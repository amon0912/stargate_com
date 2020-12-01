<div class="">
    <div class="caro-formations d-flex">
        <?php
     $formations = scandir("assets/images/formations");
    //  var_export($offres);
    foreach ($formations as $keyFormation => $valueFormation) {
        if($valueFormation != '.' && $valueFormation != '..'){ ?>
        <div>
            <a class="text-decoration-none" href="?p=#1e-profite-de-la-formation&formation=<?= $valueFormation ?>">
                <p class="text-center">
                    <img src="assets/images/formations/<?= $valueFormation ?>" class="img-fluid kArrondir h-100 w-100"
                        style="" alt="image offre">
                </p>
            </a>

            <div class="float-right shadow-sm kArrondir border bg-body pr-3 pl-3 pt-1 pb-1 mt-2">
                <a href="?p=#1e-profite-de-la-formation&formation=<?= $valueFormation ?>"
                    class="text-decoration-none kColor-text">
                    Je profite
                </a>
            </div>

        </div>
        <?php }
} ?>
    </div>
</div>
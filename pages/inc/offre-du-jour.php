<?php if (false) {
} else { ?>
    <?php
    include('config/db.php');

    $q = $db->prepare('SELECT * FROM offre');
    $q->execute();
    $cpt = $q->rowCount();
    while ($d = $q->fetch(PDO::FETCH_ASSOC)) {
        $datas[] = $d;
    }
    ?>
    <div class="">
        <div class="caro-formations d-flex">
            <?php
            //  var_export($offres);
            if ($cpt) {
                foreach ($datas as $data) { ?>
                    <div>
                        <a class="text-decoration-none" href="?p=je-profite-de-loffre&offre=<?= $data['idOffre'] ?>">
                            <p class="text-center">
                                <img src="assets/images/uploads/<?= $data['lienImage'] ?>" class="img-fluid kArrondir h-100 w-100" alt="image formation">
                            </p>
                        </a>

                        <div class="float-right shadow-sm kArrondir border bg-body pr-3 pl-3 pt-1 pb-1 mt-2">
                            <a href="?p=je-profite-de-loffre&offre=<?= $data['idOffre'] ?>" class="text-decoration-none kColor-text">
                                Je profite
                            </a>
                        </div>

                    </div>
            <?php }
            } ?>
        </div>
    </div>

<?php } ?>
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
                include('config/db.php');

                //  $idFormation = trim(strip_tags($_GET['formation']));
                //  $search="%$idFormation%";

                $q1 = $db->prepare("SELECT * FROM offre ");
                $q1->execute();
                $cpt1 = $q1->rowCount();

                if ($cpt1) {
                    while ($d = $q1->fetch(PDO::FETCH_ASSOC)) {
                        $dataOffre[] = $d;
                    }

                    foreach ($dataOffre as $item) { ?>

                <div class="col-md-4 mb-3">
                    <div class="card kArrondir" style="width: 100%;">
                        <img src="assets/images/uploads/<?= $item['lienImage'] ?>"
                            class="card-img-top kArrondir img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['titre'] ?></h5>
                            <p class="card-text"><?= $item['description'] ?></p>
                            <a href="?p=je-profite-de-loffre&offre=<?= $item['idOffre'] ?>"
                                class=" btn kArrondir kArriere-plan text-white">Je profite de l'offre</a>
                        </div>
                    </div>
                </div>
                <?php }
                }
                ?>
                <?php $q2 = $db->prepare("SELECT * FROM formation ");
                $q2->execute();
                $cpt2 = $q2->rowCount();

                if ($cpt2) {
                    while ($d2 = $q2->fetch(PDO::FETCH_ASSOC)) {
                        $dataOffre2[] = $d2;
                    }

                    foreach ($dataOffre2 as $item2) { ?>

                <div class="col-md-4 mb-3">
                    <div class="card kArrondir" style="width: 100%;">
                        <img src="assets/images/uploads/<?= $item2['lienImage'] ?>"
                            class="card-img-top kArrondir img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item2['titre'] ?></h5>
                            <p class="card-text"><?= $item2['description'] ?></p>
                            <a href="?p=je-profite-de-la-formation&formation=<?= $item2['idFormation'] ?>"
                                class=" btn kArrondir kArriere-plan text-white">Je profite de l'offre</a>
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
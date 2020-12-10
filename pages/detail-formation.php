<div class="container-fluid" style="border-left:8px solid #FF8103">
    <div class="row">

        <!-- offre du jour  -->
        <div class="col-md-3 mt-3">
            <h3>Formation</h3>
            <?php include('inc/formation-slide.php'); ?>
        </div>

        <!-- section detail  -->
        <div class="col-md-9 mt-3" id="">
            <div class="row">
                <?php 
                if (!empty($_GET['formation'])) {
                include('config/db.php');
                
                $idFormation = trim(strip_tags($_GET['formation']));
                $search="%$idFormation%";
                $q = $db->prepare("SELECT * FROM typeformation JOIN formation ON typeformation.idTypeFor = formation.idTypeFor WHERE label LIKE ?");
                $q->execute([$search]);
                $cpt = $q->rowCount();
                if ($cpt) {
                    while ($d = $q->fetch(PDO::FETCH_ASSOC)) {
                        $dataFmoration[] = $d;
                    }
                ?>
                <?php foreach($dataFmoration as $item){ ?>
                <div class="col-md-4 mb-3">
                    <div class="card kArrondir" style="width: 100%;">
                        <img src="assets/images/uploads/<?= $item['lienImage'] ?>"
                            class="card-img-top kArrondir img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $item['titre'] ?></h5>
                            <p class="card-text"> <?= $item['description'] ?> </p>
                            <a href="?p=je-profite-de-la-formation&formation=<?= $item['idFormation'] ?>"
                                class=" btn kArrondir kArriere-plan text-white">Je profite de la formation</a>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <?php } else {
                    echo '<h3 class="text-center">Pas de formation disponible</h3>
                <hr>';
                }
                } else{
                    // code
                } ?>

            </div>
        </div>
    </div>
</div>
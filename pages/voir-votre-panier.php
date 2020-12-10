<?php if (!empty($_SESSION['kid'])) {

    include('config/db.php');
    $kid = trim(strip_tags($_SESSION['kid']));
    $q = $db->prepare("SELECT * from formation join demandeformation ON formation.idFormation = demandeformation.idFormation WHERE id_client = ? ");
    $q->execute([$kid]);
    $cpt = $q->rowCount();

    $q2 = $db->prepare("SELECT * from offre join demandecrea ON offre.idOffre = demandecrea.idOffre WHERE id_client = ? ");
    $q2->execute([$kid]);
    $cpt2 = $q2->rowCount();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <p>
                <a href="?p=home">
                    <img src="assets/images/icon-parametre/icon-panier.png" class="img-fluid" alt="">
                </a>
            </p>
        </div>
        <div class="col-md-9 ">
            <div class="row">
                <h3 class="mt-3">Formation</h3>
                <?php if ($cpt) {
                        while ($d = $q->fetch(PDO::FETCH_ASSOC)) {
                            $datas[] = $d;
                        }
                        // var_export($datas);
                        foreach ($datas as  $value) { ?>
                <div class="col-md-3">
                    <a class="kBoutton-menu text-decoration-none"
                        href="?p=delete-formation&formation=<?= $value['idemand'] ?>">
                        <p class="text-center">
                            <img src="assets/images/uploads/<?= $value['lienImage'] ?>"
                                class="img-fluid kArrondir h-100 w-100" alt="">
                            <ion-icon name="trash-outline"></ion-icon>
                        </p>
                    </a>
                </div>
                <?php }
                    } ?>

                <!-- secction offre -->
                <h3 class="mt-3">Offre</h3>
                <?php if ($cpt2) {
                        while ($d2 = $q2->fetch(PDO::FETCH_ASSOC)) {
                            $datasOffre[] = $d2;
                        } //var_export($datasOffre);
                        foreach ($datasOffre as $value2) { ?>
                <div class="col-md-3">
                    <a class="kBoutton-menu text-decoration-none"
                        href="?p=delete-offre&offre=<?= $value2['idDemandCrea'] ?>">
                        <p class="text-center">
                            <img src="assets/images/uploads/<?= $value2['lienImage'] ?>"
                                class="img-fluid kArrondir h-100 w-100" alt="">
                            <ion-icon name="trash-outline"></ion-icon>
                        </p>
                    </a>
                </div>
                <?php }
                    } ?>

            </div>
        </div>
        <!-- <div class="col-md-4"></div> -->
    </div>
</div>
<?php } ?>
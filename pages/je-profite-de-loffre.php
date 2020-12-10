<?php
include('config/db.php');
if (!empty($_SESSION['kid']) && !empty($_GET['p']) && $_GET['p'] === 'je-profite-de-loffre' && !empty($_GET['offre'])) {

    $idOffre = trim(strip_tags($_GET['offre']));
    $q = $db->prepare('SELECT * FROM offre WHERE idOffre=?');
    $q->execute([$idOffre]);
    $cpt = $q->rowCount();
    while ($d = $q->fetch(PDO::FETCH_ASSOC)) {
        $datas[] = $d;
    }
    //var_dump($datas);

    if ($cpt == 1) { ?>
        <?php
        if (!empty($_POST['idOffre'])) {
            $idOffre = trim(strip_tags($_POST['idOffre']));
            $kid = trim(strip_tags($_SESSION['kid']));
            $id = md5(uniqid(time()));
            $verify = $db->prepare("SELECT *  FROM demandecrea WHERE id_client = ? AND idOffre = ? ");
            $verify->execute([$kid, $idOffre]);
            $compteur = $verify->rowCount();
            // var_dump($compteur);
            if ($compteur == 0) {
                $envoiDemande = $db->prepare("INSERT INTO demandecrea (idDemandCrea, id_client, idOffre) VALUES (?,?,?) ");
                $envoiDemande->execute([$id, $kid, $idOffre]);
                echo '<script>window.location.href="?p=remerciement"</script>';
            } else {
                echo '<script>window.alert("Vous profitez déjà")</script>';
                echo '<script>window.location.href="?p=remerciement"</script>';
            }
        }
        ?>

        <div class="container-fluid mt-4">
            <div class=" row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4" id="lien">
                    <h3 class="text-center kColor-text">Bon de reduction</h3>
                    <div class="kArrondir border border-secondary shadow p-4" style="height:100%;">
                        <p class="text-center">
                            <img class="img-fluid kArrondir" src="assets/images/uploads/<?= $datas['0']['lienImage'] ?>" alt="">
                        </p>
                        <form method="POST">
                            <input hidden type="text" name="idOffre" value="<?= $datas['0']['idOffre'] ?>">

                            <button type="submit" class="btn kArriere-plan kArrondir text-white">
                                je profite de l'offre
                            </button>

                        </form>
                    </div>

                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
        </div>

<?php }
} else {
    echo '<script>window.alert("Veuillez vous connectez")</script>';
    echo '<script>window.location.href="?p=home"</script>';
} ?>
<?php
include('config/db.php');
if (!empty($_SESSION['kid']) && !empty($_GET['p']) && $_GET['p'] === 'je-profite-de-la-formation' && !empty($_GET['formation'])) {

    $idFormation = trim(strip_tags($_GET['formation']));
    $q = $db->prepare('SELECT * FROM formation WHERE idFormation=?');
    $q->execute([$idFormation]);
    $cpt = $q->rowCount();
    while ($d = $q->fetch(PDO::FETCH_ASSOC)) {
        $datas[] = $d;
    }
    //var_dump($datas); 

    if ($cpt == 1) { ?>
<?php
        if (!empty($_POST['idFormation'])) {
            $idFormation = trim(strip_tags($_POST['idFormation']));
            $kid = trim(strip_tags($_SESSION['kid']));
            $id = md5(uniqid(time()));
            $verify = $db->prepare("SELECT *  FROM demandeformation WHERE id_client = ? AND idFormation = ? ");
            $verify->execute([$kid, $idFormation]);
            $compteur = $verify->rowCount();
            // var_dump($compteur);
            if ($compteur == 0) {
                $envoiDemande = $db->prepare("INSERT INTO demandeformation (idemand, id_client, idFormation) VALUES (?,?,?) ");
                $envoiDemande->execute([$id, $kid, $idFormation]);
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
                    <input hidden type="text" name="idFormation" value="<?= $datas['0']['idFormation'] ?>">

                    <button type="submit" class="btn kArriere-plan kArrondir text-white">
                        je profite de la formation
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
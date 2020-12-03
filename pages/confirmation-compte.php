<?php
include('config/db.php');

// $cpt=1;
if (!empty($_GET['token'])) {
    $token = trim(strip_tags($_GET['token']));

    $verify = $db->prepare(" SELECT * FROM client where token_client = ? ");
    $verify->execute([$token]);
    $cpt =  $verify->rowCount();
    while ($data = $verify->fetch(PDO::FETCH_ASSOC)) {
        $id = $data['id_client'];
    }

    if ($cpt) {
        $q = $db->prepare(" UPDATE client set token_client = ? where id_client = ? ");
        $q->execute(['', $id]);
        echo '<script>window.location.href="index.php"</script>';
    } else {
        echo '<script>window.location.href="index.php?p=erreur"</script>';
    }
} else {
    echo '<script>window.location.href="index.php?p=erreur"</script>';
}

?>

<div class="container mt-3">
    <p class="text-center">
        <img class="img-fluid" src="assets/images/logo-stg.png" alt="">
    </p>
    <div class="alert alert-success kArrondir" role="alert">
        <h3 class="text-center  ">Confirmation du compte</h3>
        <hr>
        <p class="text-center h3">Cliquez pour confirmer votre compte.</p>
        <form method="Post" action="">

            <div style="display: grid; place-items:center;">
                <button type="submit" class="kArrondir kArriere-plan pr-5 pl-5  border-0 text-white">
                    <i class="fas fa-check-circle fa-2x"></i>
                </button>
            </div>
        </form>
    </div>
</div>
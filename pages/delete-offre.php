<?php
if(!empty($_SESSION['kid']) && !empty($_GET['offre']) ){
    include('config/db.php');
    $idSupp=trim(strip_tags($_GET['offre']));
    $id=trim(strip_tags($_SESSION['kid']));
    
    $q=$db->prepare('DELETE FROM demandecrea WHERE idDemandCrea=? AND id_client=?');
    $q->execute([$idSupp, $id]);
    echo'<script>window.location.href="?p=voir-votre-panier"</script>';
    
} else{
    echo'<script>window.location.href="?p=erreur"</script>';
}
?>
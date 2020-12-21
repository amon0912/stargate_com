<?php
include("../config/db.php");

if (!empty($_GET['id'])) {
    $id = trim(strip_tags($_GET['id']));
    $show = $db->prepare("select * from offre where idOffre = ?");
    $show->execute([$id]);
    while ($data = $show->fetch(PDO::FETCH_ASSOC)) {
        $d = $data;
    }
    // var_export($d);
    $q1 = $db->prepare("delete from demandecrea where idOffre = ?");
    $q1->execute([$d['idOffre']]);
    $q = $db->prepare("delete from offre where idOffre = ?");
    $q->execute([$d['idOffre']]);

    unlink('../assets/images/uploads/' . $d['lienImage']);
    echo '<script>window.location.href="index.php?p=show-offre"</script>';
}
<?php
include("../config/db.php");

if (!empty($_GET['id'])) {
    $id = trim(strip_tags($_GET['id']));
    $show = $db->prepare("select * from formation where idFormation = ?");
    $show->execute([$id]);
    while ($data = $show->fetch(PDO::FETCH_ASSOC)) {
        $d = $data;
    }
    // var_export($d);
    $q1 = $db->prepare("delete from demandeformation where idFormation = ?");
    $q1->execute([$d['idFormation']]);
    $q = $db->prepare("delete from formation where idFormation = ?");
    $q->execute([$d['idFormation']]);

    unlink('../assets/images/uploads/' . $d['lienImage']);
    echo '<script>window.location.href="index.php?p=show-formation"</script>';
}
<?php
include("../config/db.php");

if (!empty($_GET['id_d'])) {
    $id_d = trim(strip_tags($_GET['id_d']));
    $show = $db->prepare("select * from deco where id_deco = ?");
    $show->execute([$id_d]);
    while ($data = $show->fetch(PDO::FETCH_ASSOC)) {
        $d = $data;
    }
    // var_export($d);
    $q = $db->prepare("delete from deco where id_deco = ?");
    $q->execute([$d['id_deco']]);

    unlink('../assets/uploads/' . $d['lien_image_deco']);
    header('Location: ?p=show-deco');
}

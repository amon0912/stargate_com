<?php
include("../config/db.php");

if (!empty($_GET['id_d'])) {
    $id_d = trim(strip_tags($_GET['id_d']));
    $q = $db->prepare("delete from message where id_msg = ?");
    $q->execute([$id_d]);
    
    header('Location: ?p=message');
}

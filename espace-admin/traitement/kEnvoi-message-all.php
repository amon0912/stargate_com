<?php session_start();
include('../../config/db.php');

$err = 0;
$msg = 'Erreur de connexion au serveur';
if (!empty($_POST['titre']) && !empty($_POST['message']) && !empty($_POST['idClient']) ) {
    $titre = trim(strip_tags($_POST['titre']));
    $message = trim(strip_tags($_POST['message']));
    $idClient = trim(strip_tags($_POST['idClient']));
    $idMsg = md5(uniqid());
    
    $q0=$db->prepare("select * from client where id_client = ?");
    $q0->execute([$idClient]);
    $cpt=$q0->rowCount();
    if ($cpt) {
       
        $q = $db->prepare("INSERT INTO message ( idMsg, titreMsg, corpsMsg, id_client, allMsg ) VALUES (?,?,?,?,?) ");
        $q->execute([$idMsg,$titre,$message, $idClient, 0]);
        
        $err = 0;
        $msg = 'Message enoyé';
    }
    
} else if (!empty($_POST['titre']) && !empty($_POST['message']) ){
    $titre = trim(strip_tags($_POST['titre']));
    $message = trim(strip_tags($_POST['message']));
    $idMsg = md5(uniqid());
    $q = $db->prepare("INSERT INTO message ( idMsg, titreMsg, corpsMsg) VALUES (?,?,?) ");
    $q->execute([$idMsg,$titre,$message]);

    $err = 0;
    $msg = 'Message enoyé';

}

$tab = ['err' => $err, 'msg' => $msg];
echo json_encode($tab);
<?php
include('../config/db.php');
// include('../PHPMailer/envoiMail.php');

$err = 0;
$msg = "";

if (!empty($_POST['id']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['numero'])) {

    $id = trim(strip_tags($_POST['id']));
    $nom = trim(strip_tags($_POST['nom']));
    $prenom = trim(strip_tags($_POST['prenom']));
    $email = trim(strip_tags($_POST['email']));
    $numero = trim(strip_tags($_POST['numero']));

    if (strlen($nom) < 2) {
        $err = 0;
        $msg = "Nom trop court";
    } else if (strlen($prenom) < 2) {
        $err = 0;
        $msg = "Prénoms trop court";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err = 0;
        $msg = "E-mail incorrect";
    } else if (!is_numeric($numero) || strlen($numero) < 8) {
        $err = 0;
        $msg = "Numéro incorrect";
    } else {
        $verify = $db->prepare(" SELECT * FROM client WHERE id_client = ? ");
        $verify->execute([$id]);
        $cpt = $verify->rowCount();
        if ($cpt) {
            $q = $db->prepare("UPDATE client SET nom_client = ?, prenom_client  = ?, email_client = ?, numero_client = ? WHERE id_client = ?");
            $q->execute([$nom, $prenom, $email, $numero, $id]);

            $err = 1;
            $msg = 'Modification du compte terminée';
        } else {
            $err = 0;
            $msg = 'Erreur';
        }
    }
} else {
    $err = 0;
    $msg = "Veuillez remplir tous les champs";
}

echo json_encode(['err' => $err, 'msg' => $msg]);
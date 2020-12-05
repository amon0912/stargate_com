<?php
include('../config/db.php');
include('../PHPMailer/envoiMail.php');

$err = 0;
$msg = "";

if (!empty($_POST['nom']) && !empty($_POST['prenoms']) && !empty($_POST['email']) && !empty($_POST['numero']) && !empty($_POST['mdp'])) {

    $nom = trim(strip_tags($_POST['nom']));
    $prenoms = trim(strip_tags($_POST['prenoms']));
    $email = trim(strip_tags($_POST['email']));
    $numero = trim(strip_tags($_POST['numero']));
    $mdp = trim(strip_tags($_POST['mdp']));

    if (strlen($nom) < 2) {
        $err = 0;
        $msg = "Nom trop court";
    } else if (strlen($prenoms) < 2) {
        $err = 0;
        $msg = "Prénoms trop court";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err = 0;
        $msg = "E-mail incorrect";
    } else if (!is_numeric($numero) || strlen($numero) < 8) {
        $err = 0;
        $msg = "Numéro incorrect";
    } else if (strlen($mdp) < 8) {
        $err = 0;
        $msg = "Mot de passe trop court";
    } else {
        $verify = $db->prepare(" SELECT * FROM client WHERE email_client = ? OR numero_client = ? ");
        $verify->execute([$email, $numero]);
        $cpt = $verify->rowCount();
        if ($cpt) {
            $err = 0;
            $msg = 'Le compte existe déjà';
        } else {
            $id = md5(uniqid());
            $token = md5(uniqid(rand(), true));
            $hash = password_hash($mdp, PASSWORD_DEFAULT);

            $q = $db->prepare(" INSERT INTO client (id_client, nom_client, prenom_client, email_client, numero_client, mdp_client, token_client) VALUES (?, ?, ?, ?, ?, ?, ?) ");
            $q->execute([$id, $nom, $prenoms, $email, $numero, $hash, $token]);

            $url = 'http://localhost:4000/?p=confirmation-compte';
            $lien = $url . '&token=' . $token;

            $message = '<div>
            <p>
            <img width="400" src="https://stargatecommunication.com/assets/images/logo-stg.png" />
            </p>
            <p>
            Veuillez cliquez sur le lien pour confirmez votre compte<br/>
            '.$lien.'
            </p>
            </div>';
            $objet='Confirmation de votre compte';

            envoiMail($message, $objet, $nom, $email);
            // echo '<script>window.location.href="index.php#modalConnexion"</script>';

            $err = 1;
            $msg = 'Inscription terminée <br> Confirmez Votre compte par email';
        }
    }
} else {
    $err = 0;
    $msg = "Veuillez remplir tous les champs";
}

echo json_encode(['err' => $err, 'msg' => $msg]);
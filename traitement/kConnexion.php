<?php
session_start();
include('../config/db.php');

$err = 0;
$msg = "";

if (!empty($_POST['login']) && !empty($_POST['mdp'])) {

    $login = trim(strip_tags($_POST['login']));
    $mdp = trim(strip_tags($_POST['mdp']));

    if (filter_var($login, FILTER_VALIDATE_EMAIL)) {

        $verify = $db->prepare(" SELECT * from client where email_client = ? ");
        $verify->execute([$login]);
        $cpt = $verify->rowCount();


        if ($cpt) {
            while ($data = $verify->fetch(PDO::FETCH_ASSOC)) {
                $kpass = $data['mdp_client'];
                $ktoken = $data['token_client'];
                $kid = $data['id_client'];
                $knom = $data['nom_client'];
                $kprenom = $data['prenom_client'];
                $kemail = $data['email_client'];
                $knumero = $data['numero_client'];
            }

            if ($ktoken != 'null') {
                $err = 0;
                $msg = "Confirmez votre compte par email avant de vous connectez";
            } else {
                if (password_verify($mdp, $kpass)) {
                    $err = 1;
                    $_SESSION['kid'] = $kid;
                    $_SESSION['knom'] = $knom;
                    $_SESSION['kprenom'] = $kprenom;
                    $_SESSION['kemail'] = $kemail;
                    $_SESSION['knumero'] = $knumero;


                    $msg = '<div class="spinner-border text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>';
                } else {
                    $err = 0;
                    $msg = "Mot de passe incorrect";
                }
            }
        } else {
            $err = 0;
            $msg = "Le Compte n'existe pas";
        }
    } else if (is_numeric($login) && strlen($login) >= 8) {
        $verify = $db->prepare(" SELECT * from client where numero_client = ? ");
        $verify->execute([$login]);
        $cpt = $verify->rowCount();


        if ($cpt) {
            while ($data = $verify->fetch(PDO::FETCH_ASSOC)) {
                $kpass = $data['mdp_client'];
                $ktoken = $data['token_client'];
                $kid = $data['id_client'];
                $knom = $data['nom_client'];
                $kprenom = $data['prenom_client'];
                $kemail = $data['email_client'];
                $knumero = $data['numero_client'];
            }

            if ($ktoken != '') {
                $err = 0;
                $msg = "Confirmez votre compte par email avant de vous connectez";
            } else {
                if (password_verify($mdp, $kpass)) {
                    $_SESSION['kid'] = $kid;
                    $_SESSION['knom'] = $knom;
                    $_SESSION['kprenom'] = $kprenom;
                    $_SESSION['kemail'] = $kemail;
                    $_SESSION['knumero'] = $knumero;

                    $err = 1;
                    $msg = '<div class="spinner-border text-success" role="status">
                    <span class="sr-only">Loading...</span>
                </div>';
                } else {
                    $err = 0;
                    $msg = "Mot de passe incorrect";
                }
            }
        } else {
            $err = 0;
            $msg = "Le Compte n'existe pas";
        }
    } else {
        $err = 0;
        $msg = 'Email ou Numéro incorrect';
    }
} else {
    $err = 0;
    $msg = "Veuillez remplir tous les champs";
}

echo json_encode(['err' => $err, 'msg' => $msg]);
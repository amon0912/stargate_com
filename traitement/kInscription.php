<?php

$err = 0;
$msg = "";

if (!empty($_POST['nom']) && !empty($_POST['prenoms']) && !empty($_POST['email']) && !empty($_POST['numero']) && !empty($_POST['mdp']) ) {
    $nom= trim(strip_tags($_POST['nom']));
    $prenoms = trim(strip_tags($_POST['prenoms']));
    $email = trim(strip_tags($_POST['email']));
    $numero= trim(strip_tags($_POST['numero']));
    $mdp = trim(strip_tags($_POST['mdp']));
    
    if ( strlen($nom) < 2) {
        $err = 0;
        $msg = "Nom trop court";
    }  else if ( strlen($prenoms) < 2) {
        $err = 0;
        $msg = "Prénoms trop court";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err = 0;
        $msg = "E-mail incorrect";
    } else if ( !is_numeric($numero) || strlen($numero) < 8 ) {
        $err = 0;
        $msg = "Numéro incorrect";
    } else if ( strlen($mdp) < 8) {
        $err = 0;
        $msg = "Prénoms trop court";
    } else {
        $err = 0;
        $msg = "";
    }
    
} else {
    $err = 0;
    $msg = "Veuillez remplir tous les champs";
}

echo json_encode(['err'=>$err, 'msg'=>$msg]);
<?php session_start();
include('../../config/db.php');


$err = 0;
$msg = 'Erreur de connexion au serveur';
if (!empty($_POST['pass']) && !empty($_POST['pseudo'])) {

    $pseudo = trim(strip_tags($_POST['pseudo']));
    $pass = trim(strip_tags($_POST['pass']));

    if (!filter_var($pseudo, FILTER_VALIDATE_EMAIL)) {
        $err = 0;
        $msg = 'ERREUR email';
    } elseif (strlen($pass) < 4) {
        $err = 0;
        $msg = 'ERREUR mot de passe';
    } else {

        // creation du compte
        // $id = uniqid(time());
        // $hash = password_hash($pass, PASSWORD_DEFAULT);
        // $q = $db->prepare("insert into admin (id_user, pseudo_user, pass_user) values (?,?,?)");
        // $q->execute([$id, $pseudo, $hash]);
        // $msg = 'ok';
        // $err = 1;


        // connexion au compte
        $q = $db->prepare("SELECT * FROM admin WHERE admin.email = ?");
        $q->execute([$pseudo]);
        $cpt = $q->rowCount();
        if ($cpt) {
            while ($data = $q->fetch()) {
                $tab['id'] = $data['id'];
                $tab['email'] = $data['email'];
                $tab['mdp'] = $data['mdp'];
                $tab['nom'] = $data['nom'];
            }
            $hash = password_verify($pass, $tab['mdp']);
            if ($hash) {
                
                $_SESSION['id'] = $tab['id'];
                $_SESSION['nom'] = $tab['nom'];
                // Ajout d'information apres la connexion
                $msg = 'connection...';
                $err = 1;
            } else {
                $err = 0;
                $msg = 'Mot de passe incorrect';
            }
        } else {
            $err = 0;
            $msg = "Le compte n'existe pas encore ou mot de passe incorrect";
        }
    }
} else {
    $err = 0;
    $msg = 'Veuillez remplir tous les champs ';
}

$tab = ['err' => $err, 'msg' => $msg];
echo json_encode($tab);
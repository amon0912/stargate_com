<?php
include('../config/db.php');
// include('../PHPMailer/envoiMail.php');

$err = 0;
$msg = "";

if (!empty($_POST['id']) && !empty($_POST['old-mdp']) && !empty($_POST['new-mdp'])) {

    $id = trim(strip_tags($_POST['id']));
    $old_mdp = trim(strip_tags($_POST['old-mdp']));
    $new_mdp = trim(strip_tags($_POST['new-mdp']));

    if (!is_numeric($old_mdp) || strlen($old_mdp) < 8) {
        $err = 0;
        $msg = "Mot de passe d'au moin 8 caractère";
    } else if (!is_numeric($new_mdp) || strlen($new_mdp) < 8) {
        $err = 0;
        $msg = "Mot de passe d'au moin 8 caractère";
    } else {
        $verify = $db->prepare(" SELECT * FROM client WHERE id_client = ? ");
        $verify->execute([$id]);
        $cpt = $verify->rowCount();
        if ($cpt) {
            while ($data = $verify->fetch(PDO::FETCH_ASSOC)) {
                $hash = $data['mdp_client'];
            }
            if (password_verify($old_mdp, $hash)) {
                $q = $db->prepare("UPDATE client SET mdp_client = ? WHERE id_client = ?");
                $q->execute([$new_mdp, $id]);
                $err = 1;
                $msg = 'Modification du mot de passe terminée';
    
            } else {
                $err = 0;
                $msg = "Ancien mot de passe incorrect";
            }
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
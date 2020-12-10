<?php session_start();
include('../../config/db.php');

$err = 0;
$msg = 'Erreur de connexion au serveur';
if (!empty($_POST['titre']) && !empty($_POST['description']) && !empty($_POST['reduction']) && !empty($_POST['idTypeOffre'])) {
    $titre = trim(strip_tags($_POST['titre']));
    $description = trim(strip_tags($_POST['description']));
    $reduction = trim(strip_tags($_POST['reduction']));
    $idTypeOffre = trim(strip_tags($_POST['idTypeOffre']));

    if ($_FILES['lienImage']['error'] != 0) {
        $err = 0;
        $msg = 'ERREUR sur le fichier chargé';
    } else {
        $infosfichier = pathinfo($_FILES['lienImage']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = ['jpg', 'jpeg', 'gif', 'png'];
        $lienodl = time() . '_' . basename($_FILES['lienImage']['name']);
        $lien = str_replace(' ', '_', $lienodl);
        $id = md5(time());
        if (in_array($extension_upload, $extensions_autorisees)) {
            // On peut valider le fichier et le stocker définitivement
            $req = $db->prepare(" INSERT INTO offre (idOffre,idTypeOffre,id, titre,description,reduction,lienImage) VALUES (?,?,?,?,?,?,?) ");
            $req->execute([$id, $idTypeOffre, $_SESSION['id'], $titre, $description, $reduction, $lien]);

            move_uploaded_file($_FILES['lienImage']['tmp_name'], '../../assets/images/uploads/' . $lien);
            $msg = "L'envoi a bien été effectué !";
            $err = 1;
        }
    }
} else {
    $err = 0;
    $msg = 'Veuillez remplir tous champs';
}

$tab = ['err' => $err, 'msg' => $msg];
echo json_encode($tab);
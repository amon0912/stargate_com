<?php session_start();
include('../../config/db.php');


$err = 0;
$msg = 'Erreur de connexion au serveur';
if (!empty($_POST['no-change-img']) && !empty($_POST['update']) && !empty($_POST['prix']) && !empty($_POST['titre']) && !empty($_POST['description'])) {
    $titre = trim(strip_tags($_POST['titre']));
    $description = trim(strip_tags($_POST['description']));
    $prix = trim(strip_tags($_POST['prix']));
    $no_change_mg = trim(strip_tags($_POST['no-change-img']));

    $id = $_POST['update'];
    $q = $db->prepare("update deco set  titre_deco = ?, description_deco = ?, prix_deco = ? where id_deco = ? ");
    $q->execute([$titre, $description, $prix, $_POST['id_deco']]);
$err=0;
$msg=$no_change_mg;

} else {
    # code...

    if (!empty($_POST['prix']) && !empty($_POST['titre']) && !empty($_POST['description'])) {
        // if (true) {

        $titre = trim(strip_tags($_POST['titre']));
        $description = trim(strip_tags($_POST['description']));
        $prix = trim(strip_tags($_POST['prix']));

        if ($_FILES['fichier']['error'] != 0) {
            $err = 0;
            $msg = 'ERREUR sur le fichier chargé';
        } else {
            if (!empty($_POST['update']) && !empty($_POST['id_deco'])) {
                $infosfichier = pathinfo($_FILES['fichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = ['jpg', 'jpeg', 'gif', 'png'];
                $lienodl = time() . '_' . basename($_FILES['fichier']['name']);
                $lien = str_replace(' ', '_', $lienodl);
                if (in_array($extension_upload, $extensions_autorisees)) {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($_FILES['fichier']['tmp_name'], '../../assets/uploads/' . $lien);
                    // $msg = "L'envoi a bien été effectué !";
                    $msg = '';
                    $err = 1;
                    $id = $_POST['update'];
                    $q = $db->prepare("update deco set  titre_deco = ?, lien_image_deco = ?, description_deco = ?, prix_deco = ? where id_deco = ? ");
                    $q->execute([$titre, $lien, $description, $prix, $_POST['id_deco']]);
                    unlink('../../assets/uploads/' . $_POST['lienold']);
                }
            } else {

                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['fichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = ['jpg', 'jpeg', 'gif', 'png'];
                $lienodl = time() . '_' . basename($_FILES['fichier']['name']);
                $lien = str_replace(' ', '_', $lienodl);
                if (in_array($extension_upload, $extensions_autorisees)) {
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($_FILES['fichier']['tmp_name'], '../../assets/uploads/' . $lien);
                    // $msg = "L'envoi a bien été effectué !";
                    $msg = '';
                    $err = 1;
                    $id = uniqid(time());
                    $q = $db->prepare("insert into deco (id_deco, titre_deco, lien_image_deco, description_deco, prix_deco) values (?,?,?,?,?)");
                    $q->execute([$id, $titre, $lien, $description, $prix]);
                }
            }
        }
    } else {
        $err = 0;
        $msg = 'Veuillez remplir tous les champs ';
        // $msg =  var_export($_POST);
    }
}

$tab = ['err' => $err, 'msg' => $msg];
echo json_encode($tab);
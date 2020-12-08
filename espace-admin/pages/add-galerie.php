<?php

if (!empty($_GET['id_d'])) {
    include("../config/db.php");

    $id_d = trim(strip_tags($_GET['id_d']));

    $q = $db->prepare("select * from deco where id_deco = ?");
    $q->execute([$id_d]);
    while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
        $d = $data;
    }

    // var_dump($d);
}

?>

<div class="container mt-5">
    <div id="msg"></div>
    <form id="form" enctype="multipart/form-data" method="post">
        <?php
        if (!empty($d['id_deco'])) {
            $id = $d['id_deco'];
            $lienold = $d['lien_image_deco'];
            echo '<input hidden type="text" name="update" value="update">';
            echo '<input hidden type="text" name="id_deco" value="' . $id . '">';
            echo '<input hidden type="text" name="lienold" value="' . $lienold . '">';
        }
        ?>
        <div class="form-group m-2">
            <label for="Titre">Titre de la déco <span class="text-danger">*</span></label>
            <input id="Titre" class="form-control" type="text" name="titre" value="<?= (!empty($d['titre_deco']) ? $d['titre_deco'] : 'Déco #') ?>">
        </div>
        <div class="form-group m-2">
            <label for="Titre">Prix de la déco <span class="text-danger">*</span></label>
            <input id="prix" class="form-control" type="numeric" name="prix" value="<?= (!empty($d['prix_deco']) ? $d['prix_deco'] : '12500') ?>">
        </div>
        <div class="custom-file m-2">
            <label for="my-input" class="custom-file-label">Ajout votre image <span class="text-danger">*</span></label>
            <input id="my-input" accept=".jpg, .jpeg, .png, .gif" class="custom-file-input" type="file" name="fichier">
        </div>
        <?php
        if (!empty($d['id_deco'])) {
            echo '<label class="custom-control m-2 custom-checkbox">
              <input type="checkbox" name="no-change-img" id="no-change-img" value="checked" class="custom-control-input">
              <span class="custom-control-indicator">Ne pas changer l\'image</span>
              <span class="custom-control-description"></span>
            </label>';
        }
        ?>
        <div class="form-group m-2">
            <label for="description">Description de la déco</label>
            <textarea id="description" class="form-control" type="text" name="description"><?= (!empty($d['description_deco']) ? $d['description_deco'] : 'Papier peint') ?></textarea>
        </div>
        <button type="submit" class="ml-2 btn btn-success">Enregistrez</button>
    </form>
</div>
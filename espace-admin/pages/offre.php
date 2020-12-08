<?php
if (empty($_SESSION['id'])) {
    header('Location:index.php');
} else { ?>

<?php
    include('../config/db.php');
    $q = $db->prepare("select * from typeoffre");
    $q->execute();
    while ($d = $q->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $d;
    }
    
    ?>
<div class="container mt-3">
    <div id="msg"></div>
    <form id="form">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Titre</label>
                <input type="text" class="form-control" id="" name="titre">
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Type de l'offre</label>
                <select id="" class="form-control" name="idTypeOffre">
                    <?php foreach ($data as $item) { ?>
                    <option value="<?= $item['idTypeOffre'] ?>"> <?= $item['label'] ?> </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea type="text" class="form-control" id="" name="description"></textarea>
        </div>
        <div class="row">
            <div class="mb-3 col-md-5">
                <label for="" class="form-label">Reduction en %</label>
                <input type="text" value="non" class=" form-control" id="" name="reduction">
            </div>
            <div class="mb-3 col-md-7">
                <label for="" class="form-label">Image de la formation</label>
                <input type="file" class="form-control" id="" name="lienImage">
            </div>
        </div>

        <button type="submit" class="btn btn-success float-right">Envoyez</button>
    </form>
</div>

<?php } ?>
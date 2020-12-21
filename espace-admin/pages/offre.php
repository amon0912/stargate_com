<?php
if (empty($_SESSION['id'])) {
    header('Location:index.php');
} else { ?>

<?php
    include('../config/db.php');
    if(!empty($_GET['id'])){
        $id=trim(strip_tags($_GET['id']));
    
        $q1 = $db->prepare("select * from offre join typeoffre on offre.idTypeOffre = typeoffre.idTypeOffre where idOffre = ? ");
        $q1->execute([$id]);
        while ($d1 = $q1->fetch(PDO::FETCH_ASSOC)) {
            $data1 = $d1;
        }
        
    }
    
    $q = $db->prepare("select * from typeoffre");
    $q->execute();
    while ($d = $q->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $d;
    }
    
    ?>
<div class="container mt-3">
    <div id="msg"></div>
    <form id="form">
        <?php if(!empty($_GET['id'])){ ?>
        <input type="text" name="idOffre" hidden value="<?= (!empty($data1['idOffre']) ? $data1['idOffre'] : '') ?>">
        <input type="text" name="old-lien" hidden
            value="<?= (!empty($data1['lienImage']) ? $data1['lienImage'] : '') ?>">
        <?php } ?>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Titre</label>
                <input type="text" class="form-control" id="" name="titre"
                    value="<?= (!empty($data1['titre']) ? $data1['titre'] : '') ?>">
            </div>
            <div class="mb-3 col-md-6">
                <label for="" class="form-label">Type de l'offre</label>
                <select id="" class="form-control" name="idTypeOffre">
                    <?php if( !empty($_GET['id']) ){ ?>
                    <option value="<?=  $data1['idTypeOffre'] ?>" checked>
                        <?= $data1['label'] ?>
                    </option>
                    <?php } ?>
                    <?php foreach ($data as $item) { ?>
                    <option value="<?= $item['idTypeOffre'] ?>"> <?= $item['label'] ?> </option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea type="text" class="form-control" id=""
                name="description"><?= (!empty($data1['description']) ? $data1['description'] : '') ?></textarea>
        </div>
        <div class="row">
            <div class="mb-3 col-md-5">
                <label for="" class="form-label">Reduction en %</label>
                <input type="text" value="<?= (!empty($data1['reduction']) ? $data1['reduction'] : 'non') ?>"
                    class=" form-control" id="" name="reduction">
            </div>
            <div class="mb-3 col-md-7">
                <?php if(!empty($_GET['id'])){ ?>
                <input type="checkbox" name="changeImage" class="form-check-input">
                <?php } ?>
                <label for="" class="form-label">Image de la formation</label>
                <input type="file" class="form-control" id="" name="lienImage">
            </div>
        </div>

        <button type="submit" class="btn btn-success float-right">Envoyez</button>
    </form>
</div>

<?php } ?>
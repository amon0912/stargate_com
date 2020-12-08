<?php
include("../config/db.php");
$q = $db->prepare("select * from deco order by id_deco desc");
$q->execute();
$cpt = $q->rowCount();
if ($cpt) {

    while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
        $d[] = $data;
    }
?>
    <div class="container" style="width: 100%;">
        <div class="row mt-5">
            <div class="col-md-12">
                <table class="table table-hover table-striped table-responsive">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>Titres</th>
                            <th>Prix</th>
                            <th>Descriptions</th>
                            <th>Images</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($d as $value) { ?>
                            <tr>
                                <td><?= ++$i ?></td>
                                <td><?= $value['titre_deco'] ?></td>
                                <td><?= $value['prix_deco'] ?> Frans CFA </td>
                                <td><?= $value['description_deco'] ?></td>
                                <td> <img width="50" height="50" src="../assets/uploads/<?= $value['lien_image_deco'] ?>" alt=""> </td>
                                <td>
                                    <a class="mr-3" href="?p=add-galerie&id_d=<?= $value['id_deco'] ?>"><i class="fas fa-edit fa-fw"></i></a>
                                    <a class="text-danger" href="?p=delete&id_d=<?= $value['id_deco'] ?>"><i class="fas fa-trash fa-fw"></i></a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php } else { ?>
    <p class="text-center m-5">Aucun ajout</p>
<?php } ?>
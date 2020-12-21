<?php
include("../config/db.php");
$q = $db->prepare("select * from formation order by idFormation desc");
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
                        <th>Descriptions</th>
                        <th>Réduction</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 0;
                        foreach ($d as $value) { ?>
                    <tr>
                        <td><?= ++$i ?></td>
                        <td><?= $value['titre'] ?></td>
                        <td><?= $value['description'] ?></td>
                        <td><?= $value['reduction'] ?> </td>
                        <td>
                            <a class="mr-3" href="?p=formation&id=<?= $value['idFormation'] ?>"><i
                                    class="fas fa-edit fa-fw"></i></a>
                            <a class="text-danger" href="?p=delete-formation&id=<?= $value['idFormation'] ?>">
                                <i class="fas fa-trash fa-fw"></i>
                            </a>
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
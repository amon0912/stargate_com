<?php
if (empty($_SESSION['id'])) {
    header('Location:index.php');
} else { ?>
<?php
include("../config/db.php");
$q = $db->prepare("select *, DATE_FORMAT(createdAt_client, '%d/%m/%Y à %H:%i:%s') as date from client order by id_client desc");
$q->execute();
$cpt = $q->rowCount();
if ($cpt) {

    while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
        $d[] = $data;
    }
?>
<div class="container-fluid mt-5">
    <h2 class="text-center">liste des utilisateurs</h2>
    <table class="table table-light table-striped">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Confirmer</th>
                <th>Date inscris</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; foreach($d as $item){ ?>
            <tr>
                <td>
                    <?= $i++ ?>
                </td>
                <td>
                    <?= $item['nom_client'] ?>
                </td>
                <td>
                    <?= $item['prenom_client'] ?>
                </td>
                <td>
                    <?= $item['email_client'] ?>
                </td>
                <td>
                    <?= $item['numero_client'] ?>
                </td>
                <td>
                    <?= (empty($item['token_client']))?'Oui':'Non' ?>
                </td>
                <td>
                    <?= $item['date'] ?>
                </td>
                <td>
                    <a href="?p=envoi-message-all&id=<?= $item['id_client'] ?>">
                        <i class="fas fa-paper-plane"></i>
                    </a>
                </td>

            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <th>#</th>
            <th>Nom</th>
            <th>Prénoms</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Confirmer</th>
            <th>Date inscris</th>
            <th>Action</th>
        </tfoot>
    </table>
</div>

<?php } else { ?>
<p class="text-center m-5">Aucun utlisateur inscrit</p>
<?php } ?>
<?php } ?>
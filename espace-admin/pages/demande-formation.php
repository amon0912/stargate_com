<?php
include("../config/db.php");
$q = $db->prepare("select *, DATE_FORMAT(dateDemand, '%d/%m/%Y à %H:%i:%s') as date from  demandeformation DF JOIN client on DF.id_client = client.id_client  JOIN formation on formation.idFormation = DF.idFormation  order by client.id_client desc");
$q->execute();
$cpt = $q->rowCount();
if ($cpt) {
    
    while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
        $d[] = $data;
    }
    // var_export($d);
?>
<div class="container-fluid">
    <table class="table table-light">
        <h3>Liste des demandes de formation </h3>
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Titre de l'offre</th>
                <th>Réduction</th>
                <th>Date inscris</th>
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
                    <?= $item['titre'] ?>
                </td>
                <td>
                    <?= $item['reduction'] ?>
                </td>
                <td>
                    <?= $item['date'] ?>
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
            <th>Titre de l'offre</th>
            <th>Réduction</th>
            <th>Date inscris</th>
        </tfoot>
    </table>
</div>

<?php } else { ?>
<p class="text-center m-5">Aucun demande de formation</p>
<?php } ?>
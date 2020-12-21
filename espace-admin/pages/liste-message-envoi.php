<div class="mt-3">
    <div class="container-fluid">
        <h2>Messages envoyés</h2>
        <?php
include("../config/db.php");
$q = $db->prepare("select *, DATE_FORMAT(dateMsg, '%d/%m/%Y à %H:%i:%s') as date from message ");
$q->execute();
$cpt = $q->rowCount();
?>
        <table class="table table-hover table-light">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($cpt){ 
                    $i=1;
                    while ($res=$q->fetch(PDO::FETCH_ASSOC)){
                        $data[]=$res;
                    }
                    
                    foreach($data as $item){
                    ?>
                <tr>
                    <td>
                        <?= $i++ ?>
                    </td>
                    <td><?= $item['titreMsg'] ?></td>
                    <td><?= $item['corpsMsg'] ?></td>
                    <td><?= $item['date'] ?></td>
                    <td>Pas disponible</td>
                </tr>
                <?php } } else {
                    echo '<p class="text-center h3">Section vide</p>';
                } ?>

            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Message</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
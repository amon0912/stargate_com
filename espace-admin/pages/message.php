<?php
include("../config/db.php");
$q = $db->prepare("select * from message order by id_msg desc");
$q->execute();
$cpt = $q->rowCount();
if ($cpt) {
    while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
        $d[] = $data;
    }

    // var_export($d);
?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénoms</th>
                            <th>E-mail</th>
                            <th>Contact</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($d as $key => $value) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['nom_pers'] ?></td>
                                <td><?= $value['prenoms_pers'] ?></td>
                                <td><?= $value['email_pers'] ?></td>
                                <td><?= $value['tel_pers'] ?></td>
                                <td><?= substr($value['msg_pers'], 0, 27) . '...' ?></td>
                                <td><?= $value['date_msg'] ?></td>
                                <td>
                                    <a href="?p=show-message&id_d=<?= $value['id_msg'] ?>" class="text-success m-1"><i class="fas fa-eye   "></i></a>
                                    <a href="?p=sup-msg&id_d=<?= $value['id_msg'] ?>" class="text-danger m-1"><i class="fas fa-trash    "></i></a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php } else { ?>
    <p class="text-center m-5">
        Aucun Message
    </p>
<?php } ?>
<?php
include("../config/db.php");
if (!empty($_GET['id_d'])) {
    $id_d = trim(strip_tags($_GET['id_d']));

    $q = $db->prepare("select * from message where id_msg = ?");
    $q->execute([$id_d]);
    while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
        $d[] = $data;
    }
    // var_export($d);
?>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <?php
                    foreach ($d as $value) { ?>
                        <div class="card-header">
                            <h2>
                                <?= strtoupper($value['nom_pers']) ?>
                                <?= strtoupper($value['prenoms_pers']) ?>
                            </h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Email: <?= $value['email_pers'] ?></h5>
                            <h5 class="card-title">Contact: <?= $value['tel_pers'] ?></h5>
                            <h5 class="card-title">Message</h5>
                            <p class="card-text"><?= $value['msg_pers'] ?>t</p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div> 
    </div>
<?php } ?>
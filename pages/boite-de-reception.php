<?php if(!empty($_SESSION['kid'])){ ?>
<div class="container-fluid mt-2">
    <div class="row my-5">
        <div class="col-md-3">
            <p class="">
                <a href="?p=home">
                    <img src="assets/images/icon-parametre/icon-sms.png" alt="" class="img-fluid">
                </a>
            </p>
        </div>
        <div class="col-md-6">
            <div class="kArrondir border border-secondary shadow p-4" style=" height:100%; background-color:#707070;">
                <div>
                    <?php
                    include('config/db.php');
                    $q=$db->prepare(" SELECT idMsg, titreMsg FROM message WHERE allMsg = ? or id_client = ? ORDER BY idMsg  ");
                    $q->execute([1, $_SESSION['kid']]);
                    $cpt=$q->rowCount();
                    if($cpt){
                        while($rep=$q->fetch(PDO::FETCH_ASSOC)){
                            $data[]=$rep;
                        } 
                        // var_dump($data);
                        foreach($data as $value){ ?>
                    <a href="?p=show-msg-reception&msg=<?= $value['idMsg'] ?>" class="text-decoration-none">
                        <div class="shadow mb-3 pl-4 pr-4 p-2 border kColor-text bg-white kArrondir text-center">
                            <?=  $value['titreMsg'] ?>
                        </div>
                    </a>
                    <?php
                    }
                    } else{
                        echo '<p>Aucun Message</p>';
                    } ?>

                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php } ?>
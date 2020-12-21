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
                <!-- <div class="d-flex justify-content-center">
                    <div class="shadow mb-3 pl-4 pr-4 p-2 border kArrondir text-center kColor-text"
                        style="background:#E4E4E4;">
                        Vos informations
                    </div>
                </div> -->
                <div>
                    <?php
                    include('config/db.php');
                    if(!empty($_GET['msg'])){
                        $idMsg=$_GET['msg'];
                        $q=$db->prepare(" SELECT titreMsg, corpsMsg FROM message WHERE idMsg = ? ");
                        $q->execute([$idMsg]);
                        $cpt=$q->rowCount();
                        if($cpt){
                            while($rep=$q->fetch(PDO::FETCH_ASSOC)){
                                $data=$rep;
                            } ?>
                    <h3 class="text-white">
                        <?= $data['titreMsg'] ?>
                    </h3>
                    <p class=" kColor-text" style="text-align:justify">
                        <?= $data['corpsMsg'] ?>
                    </p>
                    <div class="float-right mb-3">
                        <a href="">
                            <!-- <div class="btn kArriere-plan kArrondir pr-4 pl-4 text-white">Participer</div> -->
                        </a>
                    </div>
                    <?php } else{
                        echo '<p class="h2 text-center">Aucun Message</p>';
                    }
                    }   
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<?php } ?>
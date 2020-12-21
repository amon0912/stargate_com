<?php
if (empty($_SESSION['id'])) {
    header('Location:index.php');
} else { ?>

<?php 
include('../config/db.php');
if(!empty($_GET['id'])){ 
    $idClient = trim(strip_tags($_GET['id']));
    $q=$db->prepare("select * from client where id_client = ?");
    $q->execute([$idClient]);
    $cpt=$q->rowCount();
    if ($cpt) {
        while ($datas=$q->fetch(PDO::FETCH_ASSOC)) {
            $data = $datas;
        } //var_dump($data);
    }
    
} 
?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h3>Envoi de message à tous les membres</h3>
            <div id="msg" class="alert" role="alert"></div>
            <form id='form'>
                <?php if(!empty($_GET['id'])){ ?>
                <input type="text" hidden value="<?= $data['id_client']  ?>" name="idClient">
                <?php } ?>
                <div class="form-group">
                    <label for="titre">Titre du message</label>
                    <input id="titre" class="form-control kArrondir" type="text" name="titre">
                </div>
                <div class="form-group mt-3">
                    <label for="titre">Corps du message</label>
                    <textarea class="form-control kArrondir" name="message" id="" cols="" rows="5"></textarea>
                </div>
                <div class="form-group float-right mt-3">
                    <button class="btn border kArriere-plan kArrondir text-white" type="submit">Envoyez</button>
                </div>
            </form>

        </div>
        <div class="col-md-4"></div>
    </div>

</div>

<?php } ?>
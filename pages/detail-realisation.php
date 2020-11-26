<div class="container-fluid" style="border-left:8px solid #FF8103">
    <div class="row">

        <!-- offre du jour  -->
        <div class="col-md-3 mt-3">
            <h3>Formation</h3>
            <?php include('inc/formation-slide.php'); ?>
        </div>

        <!-- section detail print -->
        <div class="col-md-9 mt-3" id="new-offre">
            <div class="row">
                <?php
                if (empty($_GET['detail-realisation'])) {
                    echo 'Vide !';
                } else { ?>

                <div class="kArrondir col-md-6 ">
                    <iframe class=" kArrondir m-0 p-0" src="https://www.ivoiredecoplus.com" height="700" width="100%"
                        frameborder=" 0" allowfullscreen></iframe>
                </div>
                <div class=" kArrondir col-md-6 ">
                    <iframe class=" kArrondir m-0 p-0" src="http://apotrebiry.com" height="700" width="100%"
                        frameborder=" 0" allowfullscreen></iframe>
                </div>
                <div class=" kArrondir col-md-6 ">
                    <iframe class=" kArrondir m-0 p-0" src="https://www.ahiezercompagnie.ci" height="700" width="100%"
                        frameborder=" 0" allowfullscreen></iframe>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>

<!-- Modal flyers -->
<?php 

if (empty($_GET['detail-print'])) {
    // echo 'Vide !';
} else {
    # code...
$details_print=$_GET['detail-print'];
// $details_print='offres';
$chemin= 'assets/images/' . $details_print;

$kOffres = scandir($chemin, 1);
$j=0;


foreach($kOffres as $keykOffres => $valuekOffres){
    if($valuekOffres != '.' && $valuekOffres != '..'){ 
?>

<div class="modal fade" id="<?= $details_print . ++$j ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content kArriere-plan kArrondir">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body">
                <form>

                    <input hidden="<?= $details_print . $j ?>" type="text" name="">

                    <?php 
                    if($details_print === 'carte_de_visite'){
                        include('pages/inc/form/carte_de_visite.php');   
                    } else {
                        include('pages/inc/form/flyers.php');   
                    }
                    ?>
                    <button type="submit"
                        class="btn bg-white float-right  mt-2 kArrondir kColor-text font-weight-bold">Envoyez</button>
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>

<?php 
    }
}
}
?>
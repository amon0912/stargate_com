<div class="container-fluid" style="border-left:8px solid #FF8103">
    <div class="row">

        <!-- offre du jour  -->
        <div class="col-md-3 mt-3">
            <h3>Formation</h3>
            <?php include('inc/formation-slide.php'); ?>
        </div>

        <!-- slide -->
        <div class="col-md-9 mt-3" id="new-developpement">
            <div class="kArriere-plan kArrondir p-2" style="height:100%">
                <h2 class="text-center mt-3 text-white">Print - Impression</h2>
                <div class="row m-2 my-5 flex-row align-items-center justify-content-center">
                    <?php
                    $tab = ['affiche_publicitaire' , 'faire_part', 'dépliant' , 'papier_entête' , 'tee-shirt', 'flyers' , 'carte_de_visite' , 'bâche_numérique' ];
                    // var_export($tab);
                    foreach($tab as $i => $item ){ ?>
                    <div class="col-md-4 mb-3">
                        <div class=" card w-100 kArrondir p-4">
                            <a href="?p=detail-print&detail-print=<?=$item?>" class="text-decoration-none">
                                <div class=" card-body text-center kHover kArrondir">
                                    <h5 class="card-title ">Print</h5>

                                    <?php
                                        echo '<p><img class="img-fluid" src="assets/images/icon-for-print/'.$item.'.png"></p>';
                                    ?>

                                    <p class="card-text text-capitalize font-weight-bold">
                                        <?= str_replace('_',' ', $item ); ?>
                                    </p>
                                    <!-- <i class="fas fa-desktop fa-fw fa-3x "></i> -->
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php }
                    ?>

                </div>
            </div>

        </div>
    </div>
</div>
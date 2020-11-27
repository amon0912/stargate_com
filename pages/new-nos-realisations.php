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
                <h2 class="text-center mt-3 text-white">Nos réalisations</h2>
                <div class="row m-2 my-5 flex-row align-items-center justify-content-center">
                    <?php
                    $tab = ['site_web', 'application_mobile', 'infographie' ];
                    // var_export($tab);
                    foreach($tab as $i => $item ){ ?>
                    <div class="col-md-4 mb-3">
                        <div class=" card w-100 kArrondir p-4">
                            <a href="?p=detail-realisation&detail-realisation=<?=$item?>" class="text-decoration-none">
                                <div class=" card-body text-center kHover kArrondir">
                                    <h5 class="card-title ">Nos réalisations</h5>

                                    <?php
                                        echo '<p><img class="img-fluid" src="assets/images/icon-for-realisation/'.$item.'.png"></p>';
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
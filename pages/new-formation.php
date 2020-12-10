<div class="container-fluid" style="border-left:8px solid #FF8103">
    <div class="row">

        <!-- offre du jour  -->
        <div class="col-md-3 mt-3">
            <h3 class="">Formation</h3>
            <?php include('inc/formation-slide.php'); ?>
        </div>

        <!-- slide -->
        <div class="col-md-9 mt-3" id="new-developpement">
            <div class="kArriere-plan kArrondir p-2" style="height:100%">
                <h2 class="text-center mt-3 text-white">Formation</h2>
                <div class="row m-2 my-5 flex-row align-items-center justify-content-center">
                    <?php
                    $tab = ['développement', 'infographie', 'marketing_digital' ];
                    foreach($tab as $i => $item ){ 
                        ?>
                    <div class="col-md-4 mb-3">
                        <div class=" card w-100 kArrondir p-4">
                            <div data-toggle="modal" data-target="#<?= $item ?>" class="text-primary">
                                <div class=" card-body text-center kHover kArrondir">
                                    <h5 class="card-title ">Formation</h5>

                                    <?php
                                        echo '<p><img class="img-fluid" src="assets/images/icon-for-formation/'.$item.'.png"></p>';
                                    ?>

                                    <p class="card-text text-capitalize font-weight-bold">
                                        <?= str_replace('_',' ', $item ); ?>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    ?>

                </div>
            </div>

        </div>
    </div>
</div>


<!-- Modal developpement -->
<div class="modal fade" id="développement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content kArriere-plan-gris kArrondir">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">
                    <div class="text-center">
                        Développement
                    </div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white" style="text-align:justify ">
                <div class="row">
                    <div class=" card-body text-center kHover kArrondir col-md-6">
                        <a href="?p=detail-formation&formation=web" class=" text-decoration-none text-white">
                            <div>
                                <h5 class=" card-title ">Formation web</h5>
                                <p>
                                    <!-- <img class=" img-fluid" src="assets/images/icon-for-formation/.png"> -->
                                </p>
                                <i class="fas fa-desktop fa-fw fa-3x "></i>
                            </div>
                        </a>
                    </div>

                    <div class=" card-body text-center kHover kArrondir col-md-6">
                        <a href="?p=detail-formation&formation=mobile" class=" text-decoration-none text-white">
                            <div>
                                <h5 class="card-title ">Formation Mobile</h5>
                                <p>
                                    <!-- <img class="img-fluid" src="assets/images/icon-for-formation/.png"> -->
                                </p>
                                <i class="fas fa-mobile fa-fw fa-3x "></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Modal infographie -->
<div class="modal fade" id="infographie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content kArriere-plan-gris kArrondir">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">
                    <div class="text-center">
                        Infographique
                    </div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white" style="text-align:justify ">
                <div class="row">
                    <div class=" card-body text-center kHover kArrondir col-md-6">
                        <a href="?p=detail-formation&formation=monatge" class=" text-decoration-none text-white">
                            <div>
                                <h5 class=" card-title ">Montage vidéo</h5>
                                <p>
                                    <!-- <img class=" img-fluid" src="assets/images/icon-for-formation/.png"> -->
                                </p>
                                <i class="fas fa-video fa-fw fa-3x"></i>
                            </div>
                        </a>
                    </div>

                    <div class=" card-body text-center kHover kArrondir col-md-6">
                        <a href="?p=detail-formation&formation=photoshop" class=" text-decoration-none text-white">
                            <div>
                                <h5 class="card-title ">Photoshop</h5>
                                <p>
                                    <!-- <img class="img-fluid" src="assets/images/icon-for-formation/.png"> -->
                                </p>
                                <i class="fas fa-chalkboard-teacher fa-fw fa-3x "></i>

                            </div>
                        </a>
                    </div>


                    <div class=" card-body text-center kHover kArrondir col-md-6">
                        <a href="?p=detail-formation&formation=indesign" class=" text-decoration-none text-white">
                            <div>
                                <h5 class="card-title ">Indesign</h5>
                                <p>
                                    <!-- <img class="img-fluid" src="assets/images/icon-for-formation/.png"> -->
                                </p>
                                <i class="fas fa-chalkboard-teacher fa-fw fa-3x "></i>
                            </div>
                        </a>
                    </div>

                    <div class=" card-body text-center kHover kArrondir col-md-6">
                        <a href="?p=detail-formation&formation=illustrator" class=" text-decoration-none text-white">
                            <div>
                                <h5 class="card-title ">Illustrator</h5>
                                <p>
                                    <!-- <img class="img-fluid" src="assets/images/icon-for-formation/.png"> -->
                                </p>
                                <i class="fas fa-chalkboard-teacher fa-fw fa-3x "></i>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Modal marketing_digital -->
<div class="modal fade" id="marketing_digital" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content kArriere-plan-gris kArrondir">
            <div class="modal-header ">
                <h5 class="modal-title " id="exampleModalLabel">
                    <div class="text-center">
                        Marketing Digital
                    </div>
                </h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-white" style="text-align:justify ">
                <div class="row">
                    <div class=" card-body text-center kHover kArrondir col-md-6">
                        <a href="?p=detail-formation&formation=community" class=" text-decoration-none text-white">
                            <div>
                                <h5 class=" card-title ">Community management</h5>
                                <p>
                                    <!-- <img class=" img-fluid" src="assets/images/icon-for-formation/.png"> -->
                                </p>
                                <i class="fas fa-users fa-fw fa-3x "></i>
                            </div>
                        </a>
                    </div>

                    <div class=" card-body text-center kHover kArrondir col-md-6">
                        <a href="?p=detail-formation&formation=google" class=" text-decoration-none text-white">
                            <div>
                                <h5 class="card-title ">Google Ads</h5>
                                <p>
                                    <!-- <img class="img-fluid" src="assets/images/icon-for-formation/.png"> -->
                                </p>
                                </i> <i class="fab fa-google fa-fw fa-3x"></i>
                            </div>
                        </a>
                    </div>

                    <div class=" card-body text-center kHover kArrondir col-md-6">
                        <a href="?p=detail-formation&formation=facebook" class=" text-decoration-none text-white">
                            <div>
                                <h5 class="card-title ">Facebook Ads</h5>
                                <p>
                                    <!-- <img class="img-fluid" src="assets/images/icon-for-formation/.png"> -->
                                </p>
                                <i class="fab fa-facebook fa-fw fa-3x"></i>
                            </div>
                        </a>
                    </div>

                    <div class=" card-body text-center kHover kArrondir col-md-6">
                        <a href="?p=detail-formation&formation=youtube" class=" text-decoration-none text-white">
                            <div>
                                <h5 class="card-title ">Youtube Ads</h5>
                                <p>
                                    <!-- <img class="img-fluid" src="assets/images/icon-for-formation/.png"> -->
                                </p>
                                <i class="fab fa-youtube fa-fw fa-3x "></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
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
                } else if (!empty($_GET['detail-realisation']) && $_GET['detail-realisation'] === 'site_web' ) { ?>

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
                <?php }  else if (!empty($_GET['detail-realisation']) && $_GET['detail-realisation'] === 'application_mobile' ) { ?>

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
                <?php }  else if (!empty($_GET['detail-realisation']) && $_GET['detail-realisation'] === 'infographie' ) { ?>
                <?php
                $affiches = scandir("assets/images/infographie/affiche_publicitaire", 1);
                $cartes = scandir("assets/images/infographie/carte_de_visite", 1);
                $flyers = scandir("assets/images/infographie/flyers", 1);
                $logos = scandir("assets/images/infographie/logo", 1);
                
                ?>

                <h3>Affiche publicitaire</h3>
                <?php
                foreach($affiches as $affiche){ 
                    if($affiche !='.' && $affiche !='..'){
                ?>
                <div class="kArrondir col-md-4 mb-3">
                    <img src="assets/images/infographie/affiche_publicitaire/<?= $affiche ?>"
                        class="img-fluid kArrondir" alt="">
                </div>
                <?php } }
                ?>
                <h3>Carte de visite</h3>
                <?php
                foreach($cartes as $carte){ 
                    if($carte !='.' && $carte !='..'){
                ?>
                <div class="kArrondir col-md-4 mb-3">
                    <img src="assets/images/infographie/carte_de_visite/<?= $carte ?>" class="img-fluid kArrondir"
                        alt="">
                </div>
                <?php } }
                ?>
                <h3>Flyers</h3>
                <?php
                foreach($flyers as $flyer){ 
                    if($flyer !='.' && $flyer !='..'){
                ?>
                <div class="kArrondir col-md-4 mb-3">
                    <img src="assets/images/infographie/flyers/<?= $flyer ?>" class="img-fluid kArrondir" alt="">
                </div>
                <?php } }
                ?>

                <h3>Logo</h3>
                <?php
                foreach($logos as $logo){ 
                    if($logo !='.' && $logo !='..'){
                ?>
                <div class="kArrondir col-md-4 mb-3">
                    <img src="assets/images/infographie/logo/<?= $logo ?>" class="img-fluid kArrondir" alt="">
                </div>
                <?php } }
                ?>


                <?php } ?>

            </div>
        </div>
    </div>
</div>
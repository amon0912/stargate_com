<?php
if (!empty($_GET['p']) && $_GET['p']=='je-profite-de-loffre' && !empty($_GET['offre'])) {
    $offres=scandir('assets/images/offres', 1); if ( in_array($_GET['offre'], $offres) ) { 
        $myOffre = $_GET['offre']; 
    }
} 
?>

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-md-4">
            <p>
                <img class="img-fluid kArrondir" src="assets/images/offres/<?= (!empty($myOffre))?$myOffre:'' ?>"
                    alt="">
            </p>
        </div>
        <div class="col-md-4" id="lien">
            <h3 class="text-center kColor-text">Bon de reduction</h3>
            <div class="kArrondir border border-secondary shadow p-4" style="height:100%;">
                <p class="text-center">
                    <img class=" kArrondir" src="assets/images/offres/<?= (!empty($myOffre))?$myOffre:'' ?>"
                        height="200" alt="">
                </p>
                <form>
                    <div class=" form-group mb-3">
                        <input type="text" class="form-control kArrondir shadow" placeholder="Nom">
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control kArrondir shadow" placeholder="Prénoms">
                    </div>

                    <div class="form-group mb-3">
                        <input type="email" class="form-control kArrondir shadow" placeholder="Email">
                    </div>

                    <div class="form-group mb-3">
                        <input type="tel" class="form-control kArrondir shadow" placeholder="Numéro whatsapp">
                    </div>

                    <div class="form-group mb-3 justify-content-end float-right">
                        <input type="submit" 
                            class="form-control  kArrondir shadow border d-block text-white kArriere-plan"
                            value="Je m'inscris">
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-4">
            <p>
                <img class="img-fluid kArrondir" src="assets/images/offres/<?= (!empty($myOffre))?$myOffre:'' ?>"
                    alt="">
            </p>
        </div>
    </div>
</div>
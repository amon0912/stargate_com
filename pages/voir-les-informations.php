<?php
if (!empty($_SESSION['kid'])) { ?>

<div class="container-fluid mt-2">
    <div class="row my-5">
        <div class="col-md-3">
            <p class="">
                <a href="?p=home">
                    <img src="assets/images/icon-parametre/icon-parametre.png" alt="" class="img-fluid">
                </a>
            </p>
        </div>
        <div class="col-md-6">
            <div class="kArrondir border border-secondary shadow p-4" style=" height:100%; background-color:#707070;">
                <div class="d-flex justify-content-center">
                    <div class="shadow mb-3 pl-4 pr-4 p-2 border kArrondir text-center kColor-text"
                        style="background:#E4E4E4;">
                        Vos informations
                    </div>
                </div>
                <div class=" text-capitalize">
                    <div class="shadow mb-3 pl-4 pr-4 p-2 border kColor-text bg-white kArrondir">
                        Nom: <?= $_SESSION['knom'] ?>
                    </div>
                    <div class="shadow mb-3 pl-4 pr-4 p-2 border kArrondir kColor-text bg-white">
                        Prénoms: <?= $_SESSION['kprenom'] ?>
                    </div>
                    <div class="shadow mb-3 pl-4 pr-4 p-2 border kArrondir kColor-text bg-white">
                        Email: <?= $_SESSION['kemail'] ?>
                    </div>
                    <div class="shadow mb-3 pl-4 pr-4 p-2 border kArrondir kColor-text bg-white">
                        Contact: <?= $_SESSION['knumero'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php } else {
    # code...
}
?>
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
                        Modifier vos informations
                    </div>
                </div>
                <div id="msg">
                </div>
                <form id="form">
                    <input hidden type="text" name="id" value="<?= $_SESSION['kid'] ?>">
                    <div class="form-group mb-3">
                        <input type="text" class="form-control kArrondir shadow" placeholder="Ancien mot de passe"
                            name="old-mdp">
                    </div>

                    <div class="form-group mb-3">
                        <input type="text" class="form-control kArrondir shadow" placeholder="Nouveau mot de passe"
                            name="new-mdp">
                    </div>

                    <div class=" mb-3 justify-content-end float-right">
                        <input type="submit" class=" kArriere-plan kArrondir border-0 p-2 pr-4 pl-4" value="Modifiez">
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php } else {
    # code...
}
?>
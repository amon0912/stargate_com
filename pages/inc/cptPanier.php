<?php
if (!empty($_SESSION['kid'])) {
    include('config/db.php');
    $kid = trim(strip_tags($_SESSION['kid']));
    $countDmdFor = $db->prepare("SELECT * from demandeformation WHERE id_client=? ");
    $countDmdFor->execute([$kid]);
    $kcptF = 0;
    $kcptF = $countDmdFor->rowCount();
    // var_dump($kcptF);

    $countDmdCrea = $db->prepare("SELECT * from demandecrea WHERE id_client=? ");
    $countDmdCrea->execute([$kid]);
    $kcptC = 0;
    $kcptC = $countDmdCrea->rowCount();
    // var_dump($kcptC);
?>
<span id="nbreAjout" class=" kColor-text"><?= $kcptF + $kcptC ?></span>
<?php } ?>
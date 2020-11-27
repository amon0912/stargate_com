<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <title>Stargate Communication</title>
</head>

<body>
    <?php
    if (empty($_GET)) {
        // header('Location: bienvenue');
    }

    ?>
    <?php
    $pages = scandir('pages/');
    // var_dump($_SESSION);
    if (!empty($_GET['p'])) {
        if ($_GET['p'] != '.' || $_GET['p'] != '..' || $_GET['p'] != 'inc') {
            if (in_array($_GET['p'] . '.php', $pages)) {
                $p = $_GET['p'];
            } else {
                $p = 'erreur';
            }
        } else {
            $p = 'erreur';
        }
    } else {
        $p = 'home';
    }
    ?>


    <?php
    if ($p === 'home' || $p === 'new-developpement' || $p === 'new-print' || $p === 'new-offre' || $p === 'new-formation' || $p === 'new-nos-realisations' || $p === 'detail-print' || $p === 'detail-realisation' ) { ?>
    <!-- en tete -->
    <?php include('pages/inc/header.php') ?>

    <!-- menu de navigation -->
    <?php include('pages/inc/menu.php') ?>

    <!-- Banner -->
    <?php include('pages/inc/banner.php') ?>


    <?php include('pages/' . $p . '.php'); ?>

    <?php } else { ?>

    <?php include('pages/' . $p . '.php'); ?>

    <?php } ?>


    <?php include("pages/inc/footer.php") ?>

    <!-- CDN pour le js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/js/bootstrap.min.js">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>




    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/menu-caro.js"></script>


    <?php
    if ($p === 'home') { ?>

    <script src="assets/js/<?= $p ?>.js"></script>
    <script src="assets/js/caro-offres-et-formations.js"></script>

    <?php } else if ($p === 'new-developpement' || $p === 'new-print' || $p === 'new-offre' || $p === 'new-formation' || $p === 'new-nos-realisations' || $p === 'detail-print' || $p === 'detail-realisation'){ ?>

    <script src="assets/js/caro-offres-et-formations.js"></script>

    <?php }
    ?>


</body>

</html>
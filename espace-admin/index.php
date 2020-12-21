<?php session_start(); ?>

<?php
$pages = scandir('pages/');
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
    $p = 'login';
}
?>

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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <title>Stargate Communication | Espace admin</title>
</head>

<body>

    <?php
    if (!empty($_SESSION['id'])) {
        include('pages/inc/menu.php');
    }
    ?>

    <?php include('pages/' . $p . '.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>

    <script src="assets/js/<?= $p ?>.js"></script>
</body>

</html>
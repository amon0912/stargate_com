<?php
$dsn = 'mysql:host=localhost;dbname=db_stargate';
$username = 'root';
$password = '';
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
    $db = new PDO($dsn, $username, $password, $options);
    // echo('Connexion => ok :) ');

} catch (PDOException $e) {
    // echo($e);
}
?>
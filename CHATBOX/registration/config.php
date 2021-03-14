<?php

// se connecter à MySQL
$link = mysqli_connect('localhost', 'root', '', 'h_ref');
if (mysqli_connect_error()) {
    echo 'erreur de connexion : ' . mysqli_connect_error();
    die();
};
// tester la connexion
?>
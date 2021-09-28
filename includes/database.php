<?php
    $mysqli = new mysqli('localhost', 'root', '', 'php_intermediaire_2');
    if (mysqli_connect_errno()) {
        printf("Échec de la connexion : %s\n", mysqli_connect_error());
        exit();
    }
?>

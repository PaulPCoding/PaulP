<?php
session_start();

$mysqli=mysqli_connect('localhost','root','1234','tickets_support');
if(!$mysqli) {
    echo "Erreur connexion BDD";
    exit;
}

$IdAdmin=1;
$MailAdmin="votre@mail";
$NomDeSessionPourId="id_membre";
$UrlPage = "tickets.php";








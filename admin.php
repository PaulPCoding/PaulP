<?php
session_start();

if(!isset($_POST['titre']) || !isset($_POST['ticket']) || empty($_POST['titre']) || empty($_POST['ticket'])){
    $_SESSION['error'] = "Certains champs sont vides.";
    header('location : ')
    exit();
}

$titre=$_POST['titre'];//titre du ticket
$ticket=$_POST['ticket'];//texte du ticket
$utilisateur=$_POST['utilisateur'];//pseudo de l'utilisateur

$today = date ("d.m.y");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php
session_start();

function read($csv){
    $file = fopen($csv, 'r');
    while (!feof($file) ) {
        $line[] = fgetcsv($file, 1024);
    }
    fclose($file);
    return $line;
}

if(isset($_POST["submit"])) {
    $_SESSION["code"] = "";
    $csv = $_SESSION["file"];
    $csv = read($csv);
    for($i = 0 ; $i < sizeof($csv)-1 ; $i++ ) {
        if($csv[$i][2] == $_POST["email"]) {
            $_SESSION["code"] = rand(1000,9999);
            exec("sh ../send_mail.sh " . $_POST["email"] . " " . $_SESSION["code"]);
            header('Location: code.php?mail=' . $_POST["email"]);
        }
    }
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacky'Shop - Mot de passe oublié</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
    <?php 
    include('./templates/header.php');
    ?>

    <form action="#" method="POST">
        <h1>Mot de passe oublié ?</h1>
        <input class="text" type="text" name="email" placeholder="Votre email du compte" required/>
        <input class="submit" type="submit" name="submit" value="Réinitialiser"/>
        <a href="login.php">Revenir en arrière</a>
    </form>
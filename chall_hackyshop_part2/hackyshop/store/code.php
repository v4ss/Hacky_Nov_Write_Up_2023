<?php
session_start();
$_SESSION["check_reset"] = false;

if(isset($_POST["submit"])) {
    if($_POST["code"] == $_SESSION["code"]) {
        $_SESSION["check_reset"] = true;
        header('Location: reset.php?mail=' . $_GET["mail"]);
    }
    
}
?>

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
        <h1>Réinitialisation du mot de passe - Vérification</h1>
        <input class="text" type="text" name="code" placeholder="Entrez le code reçu par mail" required/>
        <input class="submit" type="submit" name="submit" value="Vérifier"/>
        <a href="forgot.php">Revenir en arrière</a>
    </form>
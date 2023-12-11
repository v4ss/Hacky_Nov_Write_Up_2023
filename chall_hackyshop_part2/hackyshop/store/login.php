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

if(isset($_POST["submit-log"])) {
    $csv = $_SESSION["file"];
    $csv = read($csv);
    for($i = 0 ; $i < sizeof($csv)-1 ; $i++ ) {
        if($csv[$i][0] == $_POST["username"] && $csv[$i][1] == $_POST["password"]) {
            $_SESSION["connected"] = true;
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["secret"] = $csv[$i][3];
        }
    }
    header('Location: home.php');
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacky'Shop - Connexion</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
<?php
include('./templates/header.php');
?>

    <form action="#" method="POST">
        <h1>Se connecter</h1>
        <input class="text" type="text" name="username" placeholder="Nom d'utilisateur" required/>
        <input class="text" type="password" name="password" placeholder="Mot de passe" required/>
        <input class="submit" type="submit" name="submit-log" value="Connexion"/>
        <a href="forgot.php">Mot de passe oublié ?</a>
    </form>


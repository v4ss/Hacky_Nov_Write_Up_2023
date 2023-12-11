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

if($_SESSION["check_reset"] == false) {
    header('Location: home.php');
}

if(isset($_POST["submit"])) {
    $csv = $_SESSION["file"];
    $csv = read($csv);
    for($i = 0 ; $i < sizeof($csv)-1 ; $i++ ) {
        if($csv[$i][2] == $_GET["mail"]) {
            $csv[$i][1] = $_POST["new_mdp"];

            if ($f = @fopen($_SESSION["file"], 'w')) {
                for($j = 0 ; $j < sizeof($csv)-1 ; $j++ ) {
                    fputcsv($f, $csv[$j]);
                }
                fclose($f);
                header('Location: home.php');
            }
            else {
                echo "Impossible d'acc&eacute;der au fichier.";
            }
        }
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
        <h1>Réinitialisation du mot de passe</h1>
        <input class="text" type="password" name="new_mdp" placeholder="Entrez le nouveau mot de passe" required/>
        <input class="submit" type="submit" name="submit" value="Réinitialiser"/>
    </form>
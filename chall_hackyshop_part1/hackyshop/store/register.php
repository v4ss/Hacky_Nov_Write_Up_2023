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
$csv = $_SESSION["file"];
$csv = read($csv);
$exist = false;
if(isset($_POST["submit"])) {
    for($i = 0 ; $i < sizeof($csv)-1 ; $i++) {
        if($_POST['username'] == $csv[$i][0] OR $_POST['email'] == $csv[$i][2]) {
            echo "<p style='color: red;'>Nom d'utilisateur ou email déjà utilisé !</p>";
            $exist = true;
            break;
        }
    }
    if(!$exist) {
        
        $data = array(array($_POST['username'], $_POST['password'], $_POST['email'], " "));
        if ($f = @fopen($_SESSION["file"], 'a')) {
            foreach ($data as $ligne) {
                fputcsv($f, $ligne);
            }
            fclose($f);
            
        }
        else {
            echo "Impossible d'acc&eacute;der au fichier.";
        }
        header('Location: home.php');
    }
    
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacky'Shop - S'inscrire</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/login.css">
</head>
<body>
<?php
include('./templates/header.php');
?>

    <form action="#" method="POST">
        <h1>S'inscrire</h1>
        <input class="text" type="text" name="username" placeholder="Nom d'utilisateur" required/>
        <input class="text" type="text" name="email" placeholder="E-mail" required/>
        <input class="text" type="password" name="password" placeholder="Mot de passe" required/>
        <input class="submit" type="submit" name="submit" value="Créer son compte"/>
    </form>
<?php session_start();

function read($csv){
    $file = fopen($csv, 'r');
    while (!feof($file) ) {
        $line[] = fgetcsv($file, 1024);
    }
    fclose($file);
    return $line;
}

if(strstr($_GET['page'], "../") || ($_GET['page'] == "admin.php" && $_SESSION["admin"] == false)) {
    $_GET['page'] = 'login.php';
    header('Location: dashboard.php?page=login.php');
}

if(isset($_POST["submit_a"]) || ($_SESSION['admin'] == true && $_GET['page'] == "login.php")) {
    if(($_POST["username_a"] == "administrator" && $_POST["password_a"] == "HN0x02{wOWLe5fiLtr3S!}") || $_SESSION['admin'] == true) {
        $_SESSION["admin"] = true;
        header('Location: dashboard.php?page=admin.php');
    }
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacky'Shop - Dashboard</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>
<body>
    <header>
        <div class="header-title">
            <div class="header-logo"></div>
            <h1>HACKY<span class="h1-span">' </span>SHOP - DASHBOARD</h1>
        </div>
        <nav>
            <ul class="header-menu">
                <li><a href="../home.php">Accueil</a></li>
                <?php 
                if($_SESSION['admin'] == true) {?>
                    <li><a href="../deconnect.php">Se déconnecter</a></li>
                <?php    
                }?>
                
            </ul>
        </nav>
    </header>
    <?php
    include($_GET['page']);
     ?>
</body>
<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacky'Shop</title>
    <link rel="stylesheet" href="./styles/profil.css">
</head>
<body>
    <?php 
    include('./templates/header.php');
    ?>

    <main>
        <section class="title-profil">
            <h1>Profil</h1>
        </section>
        <section class="content-profil">
            <p>Vous êtes connecté en tant que :</p>
            <input type="text" value="<?php echo $_SESSION["username"]; ?>" disabled />
            <?php
            if($_SESSION["secret"] != " ") {
                echo "<p>Bravo ! Vous avez réussi à vous connecter, voici le flag :</p><input type='text' value='" . $_SESSION["secret"] . "' disabled />";
            }
            ?>
        </section>
    </main>

<?php include('./templates/footer.html'); ?>
</body>
</html>
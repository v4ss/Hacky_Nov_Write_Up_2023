<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hacky'Shop</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <?php 
    include('./templates/header.php');
    ?>

    <main>
        <section class="landing-page">
            <h2>Bienvenue sur HACKY<span class="landing-quote">'</span>SHOP !</h2>
        </section>
        <section class="products">
            <h2>Nos Produits</h2>
            <div class="product-list">
                <div class="product-card">
                    <div class="product-image brosse"></div>
                    <p>Brosse à dents : 3 brosses</p>
                </div>
                <div class="product-card">
                    <div class="product-image wc"></div>
                    <p>Ventouse professionnelle</p>
                </div>
                <div class="product-card">
                    <div class="product-image usb"></div>
                    <p>Clé USB 20To</p>
                </div>
                <div class="product-card">
                    <div class="product-image pied"></div>
                    <p>Faux pied (Réaliste !)</p>
                </div>
            </div>
        </section>
        <section class="about">
            <h2>A Propos</h2>
            <p>Hacky'Nov est un événement organisé par les étudiants du campus YNOV. L'événement se décompose en trois parties. <br /><br/>La première partie est l'organisation d'un Capture The Flag (CTF). Chaque étudiant, de bachelor 1 à master 2, propose des challenges de cybersécurité, afin que les participants puissent en résoudre le maximum afin de gagner la compétition ! Les challenges peuvent donc être pour les débutants comme pour les plus expérimentés ! <br /><br />La deuxième partie est dédiée à la conférence. Elles sont proposées soit par des étudiants volontaires soit par des intervenants externes afin de former et de sensibiliser les participants sur des sujets ciblés. <br /><br/>La troisième et dernière partie permet d'organiser la rencontre des étudiants avec des entreprises travaillant autour de la cybersécurité. Les entreprises partenaires de l'événement auront un espace unique et dédié à la mise en relation avec les participants, qui sont pour la plupart, des étudiants en cybersécurité.</p>
        </section>
    </main>

    <?php include('./templates/footer.html'); ?>
</body>
</html>
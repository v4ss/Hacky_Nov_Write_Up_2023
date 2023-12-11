<header>
    <div class="header-title">
        <div class="header-logo"></div>
        <h1>HACKY<span class="h1-span">' </span>SHOP</h1>
    </div>
    <nav>
        <ul class="header-menu">
            <li><a href="home.php#header-title">Accueil</a></li>
            <li><a href="home.php#products">Nos Produits</a></li>
            <li><a href="home.php#about">A Propos</a></li>
            <?php 
            if($_SESSION['connected'] == true) {?>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="deconnect.php">Se déconnecter</a></li>
            <?php
            }?>
            
        </ul>

        <?php

        if($_SESSION['connected'] == false) {?>
            <ul class="header-login">
                <li><a href="login.php">Se connecter</a></li>
                <li><a href="register.php">S'inscrire</a></li>
            </ul>
        <?php
        }?>
        
    </nav>
</header>
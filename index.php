<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Collection de Cartes Postales">
        <meta name="keywords" content="Cartes postales, famillial, Collection">
        <meta name="author" content="LIARD Meven">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style_default.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Cartes Postales</title>
    </head>

    <body id='fond'>
        <div id='container'>
            <nav class="navbar navbar-expend-lg navbar-light">
                <a class=navbar-nav href="#">Accueil</a>
                <a class=navbar-nav href="#">Par Pays</a>
                <a class=navbar-nav href="#">Par Expediteur</a>
                <a class=navbar-nav href="#">Par Thème</a>
                <a class=navbar-nav href="#">Contact</a>
            </nav>

            <header>
                <h1 id='titre'>Bienvenue sur ma Collection de Cartes Postales</h1>
                <img id="index_img-1" src="/img/index_img-1.png"></img>
                <?php 

                // include('bdd_cp.inc.php');
                ?>
            </header>

            <section id="section">
                <aside id="bloc_phare">
                    <?php
                        setlocale(LC_ALL, 'fr_FR');
                        
                        echo "<p>Nous sommes le : " . strftime("%d %B %Y")."</p>";                        ;
                    
                    ?>
                    <img src="/img/les-pierres-noires_1_lmresized_1.jpg"></img>
                </aside>
                <article id="bloc_presentation">
                    <h4>Présentation</h4>
                    <p>Bonjour à vous qui arrivez sur ce site de ma collection de cartes postales.<br>
                        J'ai voulu que chacun puisse voir et lire les cartes que j'ai reçu , et celles que Maman avait gardée.<br>
                        Qu'ils en soient ici chaleureusement remerciés.<br>
                        J'espère que vous continuerez à faire partager ainsi vos émotions de voyages.</p>
                </article>
            </section>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Collection de Cartes Postales">
        <meta name="keywords" content="Cartes postales, famillial, Collection">
        <meta name="author" content="LIARD Meven">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cartes Postales</title>
    </head>

    <body>
    <header>
        <?php
        $_sayMyName = "Meven";?>
        <h1>Bonjour <?= $_sayMyName ?> !</h1>
        <?php 
        include('bdd_cp.inc.php');
        ?>
    </header>
        
    </body>
    <footer></footer>    
</html>
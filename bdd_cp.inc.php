<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test d'accès à la base de données </title>
</head>

<body>

<?php
require_once './php/controller/pays.php';
require_once './php/controller/theme.php';
require_once './php/controller/expediteur.php';

// Définition des variables de connexion
//$user = 'dbo423622064';
//$pass = '5$ha-Y8T}o11n{E1';
//$dsn = 'mysql:host=db423622064.db.1and1.com;dbname=db423622064';
$user = 'userApp';
$pass = 'jngdYmbvlLbOHoAb6h8s';
$dsn = 'mysql:host=localhost;dbname=cartes_postales';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
// Connexion à la base de données
try
{
	$dbh = new PDO($dsn, $user, $pass, $options);
	echo "<p>Connexion effectuée. </p></br>";
	// Petit Test 1
	$sql = "SELECT * FROM cartes WHERE pays IN ('Afrique du Sud','Canada','Emirat d\'Abou Dhabi')";
	$reponse = $dbh->query($sql);

	while($row = $reponse->fetch())
	{
		str_replace('/','\\',$row["recto-carte"]);
		str_replace('/','\\',$row["verso-carte"]);

		echo '<p>';
		echo $row["numero"] . " - " . $row["pays"]. " - " . $row["dep-ville"]. " - " . $row["nom-carte"] . " - " . $row["date-envoi"]. " - " . $row["pays"]; 
		echo '</br>';
		echo $row["theme"] . " - " . $row["expediteur"];
		echo '</br>';
		echo $row["vue"];
		echo '</br>';
		echo '</br>';
		echo '<img class="recto" src="./img'.$row["recto-carte"].'">';
		echo '<img class="verso" src="./img'.$row["verso-carte"].'">';
		echo '</p>';
	}
	// petit test 2
	$pays = new Pays();
	$listePays = $pays->getCountryList();
	echo '<select>';
	foreach($listePays as $row)
	{
		echo '<option>'.$row['pays'].'</option>';
	}
	echo '</select>';

	$theme = new Theme();
	$listeTheme = $theme->getThemeList();
	echo '<select>';
	foreach($listeTheme as $row)
	{
		echo '<option>'.$row['theme'].'</option>';
	}
	echo '</select>';

	$expediteur = new Expediteur();
	$listeExpediteur = $expediteur->getSenderList();
	echo '<select>';
	foreach($listeExpediteur as $row)
	{
		echo '<option>'.$row['expediteur'].'</option>';
	}
	echo '</select>';

} 
catch(PDOExeption $e) 
{
	die("Erreur ! : ". $e->getMessage());
}
// Fermeture de la connexion :
?>
</body>
</html>
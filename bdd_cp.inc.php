<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test d'accès à la base de données </title>
</head>

<body>

<?php
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
	$sql = "SELECT * FROM cartes";
	$reponse = $dbh->query($sql);

	while($row = $reponse->fetch())
	{
		echo '<p>';
		echo $row["numero"] . " - " . $row["pays"]. " - " . $row["dep-ville"]. " - " . $row["nom-carte"] . " - " . $row["date-envoi"]. " - " . $row["pays"]; 
		echo '</br>';
		echo $row["theme"] . " - " . $row["expediteur"];
		echo '</br>';
		echo $row["vue"];
		echo '</p>';
	}
} 
catch(PDOExeption $e) 
{
	die("Erreur ! : ". $e->getMessage());
}
// Fermeture de la connexion :
?>
</body>
</html>
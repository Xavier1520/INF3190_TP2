<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" style="text/css" href="../CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/index.css" />
<title>Syndicat des travailleurs</title>
</head>
<?php
require 'lib/header.php';
require 'lib/nav.php';
require 'config.php';
if(isset($_REQUEST["soumettre"]))
{
	$prenom=$_REQUEST["prenom"];
	$nom=$_REQUEST["nom"];
	$datenaissance=$_REQUEST["datenaissance"];
	$fichier=$_FILES["photo"];
	$photo=$fichier['name'];
	$fonction=$_REQUEST["fonction"];
	$record=array(
		'prenom'=>"$prenom",
		'nom'=>"$nom",
		'datenaissance'=>"$datenaissance",
		'photo'=>"$photo",
		'fonction'=>"$fonction"
	);
	$database->insert("membres",$record);
	echo '<h2>Formulaire Soumis</h2>';
}
require 'lib/footer.php';
?>
</html>

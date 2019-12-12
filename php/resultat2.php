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
require 'lib/Medoo.php';
use Medoo\Medoo;
$database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'bd_ej591065',
        'server' => 'zeta2.labunix.uqam.ca',
        'username' => 'ej591065',
        'password' => 'yxZqOLSX'
]);
if(isset($_REQUEST["soumettre"]))
{
	$prenom=$_REQUEST["prenom"];
	$nom=$_REQUEST["nom"];
	$datenaissance=$_REQUEST["datenaissance"];
	$photo='../images/'.$_REQUEST["photo"];
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

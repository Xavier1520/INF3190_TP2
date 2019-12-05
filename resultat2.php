<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" style="text/css" href="../CSS/bootstrap.min.css">
		<title>Syndicat des travailleurs</title>
	</head>
<?php
require 'head.php';
include 'head.php';
require 'lib/Medoo.php';
use Medoo\Medoo;

$database = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'inf3190',
	'server' => 'localhost',
	'username' => 'ej591065',
	'password' => 'DUP13015',
	'prefix' => 'tp2_'
]);

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
}
require 'tail.php'
?>
</html>

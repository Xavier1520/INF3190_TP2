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
	'prefix' => 'membres'
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
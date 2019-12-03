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
	'prefix' => 'lieux'
]};
	
if(isset($_REQUEST["soumettre"]))
{
	$nom=$_REQUEST["nom"];
	$commentaire=$_REQUEST["commentaire"];
	$record=array(
		'nom'=>"$nom",
		'commentaire'=>"$commentaire"
	);
	$database->insert("lieux",$record);
}
require 'tail.php'
?>
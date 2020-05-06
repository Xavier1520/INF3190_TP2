<?php
require 'lib/Medoo.php';
use Medoo\Medoo;
$database = new Medoo([
  'database_type' => 'mysql',
  'database_name' => 'bd_ej591065',
  'server' => 'zeta2.labunix.uqam.ca',
  'username' => 'ej591065',
  'password' => 'yxZqOLSX'
]);
$cadre = array(
	"id"=>"CADRE",
	"parent"=>"#",
	"text"=>"Cadres du syndicat"
);
$delegue = array(
	"id"=>"DELEGUE",
	"parent"=>"#",
	"text"=>"Delegues syndicaux"
);
$membre = array(
	"id"=>"MEMBRE",
	"parent"=>"#",
	"text"=>"Simples membres"
);
$membres = $database->select("membres", [
	"id",
	"prenom",
	"nom",
	"datenaissance",
	"photo",
	"fonction"
]);
$objet = array();
array_push($objet, $cadre);
array_push($objet, $delegue);
array_push($objet, $membre);
foreach ($membres as $input) {
	$record = array(
		"id"=>$input["id"],
		"parent"=>$input["fonction"],
		"text"=>$input["prenom"].$input["nom"],
		"icon"=>$input["photo"]
	);
	array_push($objet, $record);
}
echo json_encode($objet);
?>

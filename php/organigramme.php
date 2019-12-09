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
$cadre = '{
	"id": "CADRE",
	"parent": "#",
	"text": "Cadres du syndicat"
}';
$delegue = '{
	"id": "DELEGUE",
	"parent": "#",
	"text": "Délégués syndicaux"
}';
$membre = '{
	"id": "MEMBRE",
	"parent": "#",
	"text": "Simples membres"
}';
$membres = $database->select("membres", [
	"id",
	"prenom",
	"nom",
	"datenaissance",
	"photo",
	"fonction"
]);
$chaine = "";
echo "[";
echo $cadre.",";
echo $delegue.",";
echo $membre.",";
foreach $membres as $input {
	$record = array(
		"id"=>$input["id"],
		"parent"=>$input["fonction"],
		"text"=>$input["prenom"].$input["nom"],
		"icon"=>$input["photo"]
	);
	$chaine .= json_encode($record).",";
}
$chaine = rtrim($chaine, ',');
echo $chaine;
echo "]";
?>

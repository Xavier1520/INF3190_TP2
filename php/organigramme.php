<?php
require 'config.php';
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

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" style="text/css" href="../CSS/bootstrap.min.css">
		<title>Syndicat des travailleurs</title>
	</head>
<?php
require 'header.php';
require 'config.php';
class Membres {
	public function enregistrerForm() {
		global $database;
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
	}
}
$membre = new Membres();
$membre->enregistrerForm();
require 'footer.php'
?>
</html>

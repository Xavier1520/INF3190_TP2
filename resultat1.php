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
class Lieux {
	public function enregistrerForm() {
		global $database;
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
	}
}
$lieu = new Lieux();
$lieu->enregistrerForm();
require 'footer.php'
?>
</html>

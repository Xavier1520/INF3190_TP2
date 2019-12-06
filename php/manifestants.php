<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" style="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/index.css" />
		<script type="text/javascript" src="../js/manifestants.js"></script>
		<title>Syndicat des travailleurs</title>
	</head>
<?php
require 'lib/header.php';
require 'lib/config.php';
$manifestations = $database->select("manifestations", [
	"id",
	"lieux",
	"membre",
	"date"
]);
echo "<h2>Table des manifestants</h2>";
echo "<table id='datatables' class='display'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>Prenom</th>";
echo "<th>Lieu</th>";
echo "<th>Date</th>";
echo "</thead>";
echo "<tbody>";
foreach ($manifestations as $manifestation) {
	$lieux = $database->select("lieux", [
        	"id"=>$manifestations['lieux'],
        	"nom",
        	"commentaire"
	]);
	$membres = $database->select("membres", [
        	"id"=>$manifestation['membre'],
        	"prenom",
        	"nom",
        	"datenaissance",
        	"photo",
        	"fonction"
	]);
	echo "<tr>";
	echo "<td>".$membres['nom']."</td>";
	echo "<td>".$membres['prenom']."</td>";
	echo "<td>".$lieux['nom']."</td>";
	echo "<td>".$manifestation['date']."</td>";
	echo "</tr>";
}
echo "</tbody>";
echo "</table>";
require 'lib/footer.php';
?>
</html>

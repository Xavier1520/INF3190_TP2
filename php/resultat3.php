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
require 'lib/config.php';
if(isset($_REQUEST["soumettre"]))
{
	$lieux = $_REQUEST["lieux"];
	$membre = $_REQUEST["membre"];
	$date = $_REQUEST["date"];
	$record=array(
		'lieux'=>'$lieux';
		'membre'=>'$membres';
		'date'=>'$date';
	);
	$database->insert("manifestations", $record);
	echo '<h2>Formulaire Soumis</h2>';
}
require 'lib/footer.php';
?>
</html>

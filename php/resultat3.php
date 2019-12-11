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
require 'lib/Medoo.php';
use Medoo\Medoo;
$database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'bd_ej591065',
        'server' => 'zeta2.labunix.uqam.ca',
        'username' => 'ej591065',
        'password' => 'yxZqOLSX'
]);
if(isset($_REQUEST["soumettre"]))
{
	$lieux = $_REQUEST["lieux"];
	$membre = $_REQUEST["membre"];
	$date = $_REQUEST["date"];
	$record=array(
		'lieux'=>(int)$lieux,
		'membre'=>(int)$membre,
		'date'=>$date
	);
	$database->insert("manifestations", $record);
	echo '<h2>Formulaire Soumis</h2>';
}
require 'lib/footer.php';
?>
</html>

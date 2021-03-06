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
class Formulaire {
	public function afficherForm() {
		global $database;
		$lieux = $database->select("lieux", [
			"id",
			"nom",
			"commentaire"
		]);
		$membres = $database->select("membres", [
			"id",
			"prenom",
			"nom",
			"datenaissance",
			"photo",
			"fonction"
		]);

		echo "<div class='container'>";
		echo "<h2>Manifestations</h2>";
		echo "<form action='resultat3.php' method='post'>";
		echo "Lieu: <select name='lieux'>";
		foreach ($lieux as $lieu) {
			$id = $lieu["id"];
			echo "<option value=".$id.">".$id."</option>";
		}
		echo "</select><br />";
		echo "Membre: <select name='membre'>";
		foreach ($membres as $membre) {
			$id = $membre["id"];
			echo "<option value=".$id.">".$id."</option>";
		}
		echo "</select><br />";
		echo "Date: <input name='date' type='date' /><br />";
		echo "<input type='submit' value='Soumettre' name='soumettre' /><br />";
		echo "</form>";
		echo "</div>";
	}
}
$manifestation = new Formulaire();
$manifestation->afficherForm();
?>

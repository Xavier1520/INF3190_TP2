<?php
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
		echo "<h3>Manifestations</h3>";
		echo "<form action='resultat3.php' method='post'>";
		echo "<select name='lieux'>";
		foreach ($lieux as $lieu) {
			echo "<option value='".$lieu["id"]."'>".$lieu["id"]."</option>";
		}
		echo "</select><br />";
		echo "<select name='membre'>";
		foreach ($membres as $membre) {
			echo "<option value='".$membre["id"]."'>".$membre["id"]."</option>";
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

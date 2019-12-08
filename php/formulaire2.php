<div class="container">
<h1>Enregistrement des membres</h1>
<form action="resultat2.php" method="post">
Prénom: <input name="prenom" type="text" maxlength="25" required /><br />
Nom: <input name="nom" type="text" maxlength="25" required /><br />
Date de naissance: <input name="datenaissance" type="date" /><br />
Image: <input name="photo" type="file" />
Fonction:
<select name="fonction" >
<option value="CADRE">Cadre</option>
<option value="DELEGUE">Délégué</option>
<option value="MEMBRE">Membre</option>
</select><br />
<input type="submit" value="Soumettre" name="soumettre" /><br />
</form>
</div>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" style="text/css" href="../css/bootstrap.min.css">
<title>Formulaire de la table membres</title>
</head>
<body>
<?php
require 'lib/header.php';
require 'lib/nav.php';
?>
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
<input type="submit" value="Soumettre" name="soumettre" />
</form>
</div>
</body>
<?php require 'lib/footer.php'; ?>
</html>
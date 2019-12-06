<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" style="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/index.css" />
<title>Formulaire de la table lieu</title>
</head>
<body>
<?php
require 'lib/header.php';
require 'lib/nav.php';
?>
<div class="container">
<h1>Enregistrement des lieux</h1>
<form action="resultat1.php" method="post">
Nom: <input name="nom" type="text" maxlength="64" required /><br />
Commentaire: <input name="commentaire" type="text" /> <br />
<input type="submit" value="Soumettre" name="soumettre" />
</form>
</div>
</body>
<?php require 'lib/footer.php'; ?>
</html>

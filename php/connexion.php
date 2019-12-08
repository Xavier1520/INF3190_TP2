<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>Connexion</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="../jstree/dist/themes/default/style.min.css" />
<link rel="stylesheet" type="text/css" href="../css/index.css" />
<link rel="stylesheet" type="text/css" href="../css/nav.css" />
<script type="text/javascript" src="../js/jquery-3.3.1.min.js" />
<script type="text/javascript" src="../js/organigramme.js" />
</head>
<body>
<?php
require 'lib/header.php';
require 'lib/nav.php';
?>
<h2>Connexion</h2>
<form method="post" action="administration.php">
<fieldset>
Nom d'utilisateur: <input type="text" pattern="^[a-z]{5,8}[0-9]{2}$" required/><br />
Mot de passe: <input type="password" pattern="^[A-Za-z0-9?*-+ ]{8,12}$" required/>
</fieldset>
<div class="submitreset">
<input type="submit" value="Se connecter">
<input type="reset" value="Annuler">
</div>
</form>
<h2>Organigramme des membres du syndicat</h2>
<button id="organigramme">Afficher Organigramme</button>
<button id="resetorg">Suprimmer organigramme</button>
<div id="afficher"></div>
</body>
<?php require 'lib/footer.php'; ?>
</html>

<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8" />
		<title>Connexion</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="../css/index.css" />
        <link rel="stylesheet" type="text/css" href="../css/nav.css" />
	</head>
    <body>
        <?php
        require 'header.php';
        require 'nav.php';
        ?>
        <h2>Connexion</h2>
        <form method="post" action="connexion.html">
            <fieldset>
                Nom d'utilisateur: 
                <input type="text" pattern="^[a-z]{5,8}[0-9]{2}$" required/><br />
                Mot de passe: 
                <input type="password" pattern="^[A-Za-z0-9?*-+ ]{8,12}$" required/>
            </fieldset>    
            <div class="submitreset">
                <input type="submit" value="Se connecter">
                <input type="reset" value="Annuler">
            </div>    
        </form>
	</body>
    <?php require 'footer.php'; ?>
</html>
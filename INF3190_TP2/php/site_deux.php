<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8" />
		<title>Deuxième site</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="../css/index.css" />
		<link rel="stylesheet" type="text/css" href="../css/sites.css" />
	</head>
    <body>
        <?php
        require 'header.php';
        require 'nav.php';
        ?>
        <div class="container" id="site">
            <div class="row">
				<div class="col-sm">
                    <h2>Deuxième site de manifestation</h2>
                </div>
            </div>
            <div class="row">
				<div class="col-sm" id="groupe">
                    <p>Ce groupe de manifestants aura comme objectif de présenter
                    les conditions de travail des employés de la compagnie.
                    Ainsi, nous devrons proposer un allègement de la charge
                    de travail des syndiqués. Il faudra mettre l'emphase
                    sur leurs souffrances et leur épuisement.</p>
                </div>
            </div>
            <div class="row">
				<div class="col-sm">
                    <iframe width="420" height="320" src="https://www.youtube.com/embed/Cq-dR1d0z9M" frameborder="0" allow="encrypted-media"></iframe>
                </div>
                <div class="col-sm">
                    <h3>Délégués syndicaux sur place</h3>
                    <table class="table">
                        <thead>
                            <td>Prénom</td>
                            <td>Nom</td>
                            <td>Téléphone</td>
                            <td>Photo</td>
                        </thead>
                        <tr>
                            <td>Xavier</td>
                            <td>Dupré</td>
                            <td>438-495-7167</td>
                            <td><img src="../images/boy.jpg"/></td>
                        </tr>
                        <tr>
                            <td>Stéphanie</td>
                            <td>Lefort</td>
                            <td>514-495-7167</td>
                            <td><img src="../images/girl.jpg"/></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
	</body>
    <?php require 'footer.php'; ?>
</html>
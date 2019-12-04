<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8" />
		<title>Négociations</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="../css/index.css" />
        <link rel="stylesheet" type="text/css" href="../css/nav.css" />
	</head>
    <body> 
        <?php
        require 'header.php';
        require 'nav.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2>Négociations</h2>
                </div>
            </div>
            <div class="row" id="negociations">
                <div class="col-sm">
                    <img src="../images/handshake.png" alt="handshake" title="handshake" />
                </div>
                <div class="col-sm">
                    <p>Les négociations ont débuté durant la semaine du 16 septembre 2019.
                    Une impasse à été atteinte vers la semaine du 7 octobre 2019.
                    Les revendications salariales, les conditions de travail et la
                    charge de travail sont parmis les sujets qu'il reste à négocier.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm" id="dates">
                    <ul>
                        <h3>Dates des rencontres éventuelles:</h3>
                        <li>14 octobre 2019 à 13h00;</li>
                        <li>16 octobre 2019 à 15h00;</li>
                        <li>18 octobre 2019 à 17h00.</li>
                    </ul>
                </div>
            </div>
        </div>
	</body>
    <?php require 'footer.php'; ?>
</html>
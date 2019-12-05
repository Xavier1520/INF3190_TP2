<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8" />
		<title>Revendications</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="../css/index.css" />
        <link rel="stylesheet" type="text/css" href="../css/nav.css" />
	</head>
    <body>
        <?php
        require 'header.php';
        require 'nav.php';
        ?>
        <div class="container" id="description">
            <div class="row">
                <div class="col-sm">
                    <h2>Description de la renvendication</h2>
                </div>
            </div>
            <div class="row" id="paragraphe">
                <div class="col-sm">
                    <h3>Perspective du syndicats</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec lectus sed mauris facilisis faucibus vel vitae arcu. Aenean orci velit, volutpat eu metus et, tincidunt vestibulum justo. Suspendisse vel nisl ornare turpis tristique lacinia eget et lacus. Maecenas porta justo ac odio lacinia maximus. Cras tempor egestas leo vel condimentum. Quisque vulputate, nisi vitae viverra efficitur, sem neque semper neque, at tincidunt nisl mi et diam. Morbi mauris libero, dignissim vel tincidunt non, vulputate eu elit.</p>
                </div>
                <div class="col-sm" >
                    <h3>Perspective des patrons</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec lectus sed mauris facilisis faucibus vel vitae arcu. Aenean orci velit, volutpat eu metus et, tincidunt vestibulum justo. Suspendisse vel nisl ornare turpis tristique lacinia eget et lacus. Maecenas porta justo ac odio lacinia maximus. Cras tempor egestas leo vel condimentum. Quisque vulputate, nisi vitae viverra efficitur, sem neque semper neque, at tincidunt nisl mi et diam. Morbi mauris libero, dignissim vel tincidunt non, vulputate eu elit.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm" id="retour">
                    <a href="revendications.php">Retour à la page de revendications</a>
                </div>
            </div>
        </div>
	</body>
    <?php require 'footer.php'; ?>
</html>
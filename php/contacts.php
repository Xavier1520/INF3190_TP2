<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>Contacts</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="../css/index.css" />
<link rel="stylesheet" type="text/css" href="../css/nav.css" />
</head>
<body>
<?php
require 'lib/header.php';
require 'lib/nav.php';
?>
<div class="container">
<div class="row">
<div class="col-sm">
<h2>Contacts</h2>
</div>
</div>
<div class="row" id="contacts">
<div class="col-sm-2">
<img src="../images/shield.png" alt="logo" title="logo" /><br />
</div>
<div class="col-sm">
<ul>
<li>Adresse: 405 Rue Sainte-Catherine Est, Montréal.</li>
<li>Téléphone: (514) 987-3000</li>
<li>Courriel: <a href="mailto: syndicat.travailleurs@hotmail.ca">syndicat.travailleurs@hotmail.ca</a></li>
<li>Site officiel: <a href="http://syndicattravailleurs.ca">http://syndicattravailleurs.ca</a></li>
</ul>
</div>
<div class="col-sm">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.798759354628!2d-73.56274464863785!3d45.51412953802852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91bb2b0be0931%3A0x957528dd2d748b72!2s405%20St%20Catherine%20St%20E%2C%20Montreal%2C%20QC%20H2X%203S1!5e0!3m2!1sen!2sca!4v1571426908117!5m2!1sen!2sca" width="400" height="350"></iframe>
</div>
</div>
</div>
</body>
<?php require 'lib/footer.php'; ?>
</html>

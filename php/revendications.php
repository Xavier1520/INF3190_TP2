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
require 'lib/header.php';
require 'lib/nav.php';
?>
<div class="container" id="revendications">
<div class="row">
<div class="col-sm">
<h2>Revendications</h2>
</div>
</div>
<div class="row">
<div class="col-sm" id="salaire">
<h3>Salaire</h3>
<a href="description.php"><img src="../images/moneybag.png" alt="moneybag" title="salaire"/></a>
</div>
<div class="col-sm" id="charge">
<h3>Charge de travail</h3>
<a href="description.php"><img src="../images/workload.jpg" alt="workload" title="workload"/></a>
</div>
<div class="col-sm" id="conditions">
<h3>Conditions de travail</h3>
<a href="description.php"><img src="../images/conditions.jpg" alt="conditions" title="conditions"/></a>
</div>
</div>
</div>
</body>
<?php require 'lib/footer.php'; ?>
</html>

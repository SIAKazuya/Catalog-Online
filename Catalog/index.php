<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Catalog Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Catalog digital</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Acasă</a></li>
      <li><a href="afiseaza_elevi.php">Afișează toți elevii</a></li>
      <li><a href="cauta_elev.php">Caută un elev</a></li>
      <li><a href="adauga_elev.php">Adaugă elev</a></li>
      <li><a href="modifica_elev.php">Modifică note elev</a></li>
      <li><a href="sterge_elev.php">Șterge elev</a></li>
    </ul>
  </div>
</nav>


<?php

mysqli_close($conn);
?>
</body>
</html>
<?php
include 'connection.php';

$nume="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nume = test_input($_POST["nume_Elev"]);
}
$prenume="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $prenume = test_input($_POST["prenume_Elev"]);
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

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
      <a class="navbar-brand" href="#">Șterge elev</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Acasă</a></li>
      <li><a href="afiseaza_elevi.php">Afișează toți elevii</a></li>
      <li><a href="cauta_elev.php">Caută un elev</a></li>
      <li><a href="adauga_elev.php">Adaugă elev</a></li>
      <li><a href="sterge_elev.php">Șterge elev</a></li>
    </ul>
  </div>
</nav>

<div class="container">
    <div class="mx-auto">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                <input type="form-control mr-sm-2" name="nume_Elev"  placeholder="Nume Elev">
                <input type="form-control mr-sm-2" name="prenume_Elev"  placeholder="Prenume Elev">
                <input type="submit" name="submit" value="Șterge elev">
      </form>
    </div>
    <div class="row">

      <div class="col-sm-20">
        
        <?php
        $sql ="DELETE FROM elevi WHERE id_elev=(SELECT id_elev FROM elevi WHERE Nume ='$nume' AND Prenume='$prenume')";
        $result = $conn->query($sql);

        if($result!=1)
        {
          echo'<h3>Rezultat:</h3>';
          echo $result;
        }
        ?>
      </div>
    </div>
</div>

<?php

mysqli_close($conn);
?>
</body>
</html>

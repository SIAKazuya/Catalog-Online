<?php
include 'connection.php';

$nume="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nume = $_REQUEST["nume_Elev"];
}
$prenume="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $prenume = $_POST['prenume_Elev'];
}
$email="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email_Elev"]);
}
$telefon="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $telefon = test_input($_POST["telefon_Elev"]);
}
$adresa="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $adresa = test_input($_POST["adresa_Elev"]);
}
$clasa="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $clasa = test_input($_POST["clasa_Elev"]);
}
$informatica="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $informatica = test_input($_POST["informatica_Elev"]);
}
$matematica="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $matematica = test_input($_POST["matematica_Elev"]);
}
$romana="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $romana = test_input($_POST["romana_Elev"]);
}
$data_nastere=date("");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $data_nastere = date('Y-m-d', strtotime($_POST["data_nastere_Elev"]));
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
      <a class="navbar-brand" href="#">Adaugă elev</a>
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

<div class="container">
    <div class="mx-auto">
      <form method="post" >  
                <input type="text" name="nume_Elev"  placeholder="Nume" ><br>
                <input type="text" name="prenume_Elev"  placeholder="Prenume"><br>
                <input type="form-control mr-sm-2" name="email_Elev"  placeholder="email"><br>
                <input type="form-control mr-sm-2" name="telefon_Elev" placeholder="Numar de telefon"><br>
                <input type="form-control mr-sm-2" name="adresa_Elev" placeholder="Adresa"><br>
                <input type="date" name="data_nastere_Elev" value="<?php echo date('Y-m-d'); ?>"/><br>
                <input type="form-control mr-sm-2" name="informatica_Elev" placeholder="Nota Informatica"><br>
                <input type="form-control mr-sm-2" name="matematica_Elev"  placeholder="Nota Matematica"><br>
                <input type="form-control mr-sm-2" name="romana_Elev"  placeholder="Nota Romana"><br>
                <input type="form-control mr-sm-2" name="clasa_Elev"  placeholder="Clasa"><br>
                <input type="submit" name="submit" value="Adaugă elev">
      </form>
    </div>
    <div class="row">

      <div class="col-sm-20">
       
        <?php
        
        $sql="INSERT INTO `elevi` ( `Nume`, `Prenume`, `Email`, `Telefon`, `Adresa`, `Data_Nastere`, `Informatica`, `Matematica`, `Clasa`, `Romana`)
         VALUES ('$nume','$prenume', '$email','$telefon', '$adresa' , '$data_nastere', $informatica, $matematica, $clasa, $romana)";
        //$result = $conn->query($sql);
        
        if(mysqli_query($conn, $sql)){
          echo " <h3>Rezultat: </h3><h3>Elev adaugat cu succes</h3>"; 
      }
        //echo $result;
        ?>
      </div>
    </div>
</div>

<?php

mysqli_close($conn);
?>
</body>
</html>








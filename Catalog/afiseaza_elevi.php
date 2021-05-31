<?php
include 'connection.php';

$name="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["ID_Elev"]);
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$sql = "SELECT * FROM elevi";
$result = $conn->query($sql);
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
      <a class="navbar-brand" href="#">Afișează elevi</a>
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
  <div class="container-fluid">
        <h3>Elevi</h3>
        <?php
        /*
        if ($result->num_rows > 0) 
        {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            ?>
              <div class="card">
                <div class="card-body">
            <?php
            echo "$row[Nume]"."  "."$row[Prenume]"." | "."$row[Email]";
          }
        } else{
          echo "0 results";
        }
        */
        if ($result->num_rows > 0) 
        {
          echo '<div class="row">';
            while($row = $result->fetch_assoc())
            {
              echo '<div class="col-sm-3">';
                  echo '<div class="card" style="width:25rem;">';
                    echo '<img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">';
                    echo '<div class="card-body">';
                      echo '<h4 class="card-title"><b>';
                      echo "$row[Nume]"." "."$row[Prenume]";
                      echo '</b></h4>';
                      echo '<p class="card-text">Contact:</p><p>';
                      echo "$row[Email]";
                      echo '</p><p>';
                      echo "$row[Telefon]";
                      echo '</p>';
                    echo '</div>';
                  echo '</div>'; 
                echo '</div>';   

            }  
          echo '</div>';
        } else{
                echo "0 results";
              }
              ?>
  </div>
</div>

<?php

mysqli_close($conn);
?>
</body>
</html>








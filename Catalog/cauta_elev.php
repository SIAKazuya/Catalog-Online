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
      <a class="navbar-brand" href="#">Caută un elev</a>
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
                <input type="form-control mr-sm-2" name="ID_Elev" placeholder="Nume elev">
                <input type="submit" name="submit" value="Cauta elev">
      </form>
    </div>
    <div class="row">

      <div class="col-sm-20">
        <?php

        $sql="SELECT elevi.Nume, elevi.Prenume, elevi.Clasa, elevi.Email, elevi.Telefon, elevi.Informatica, elevi.Matematica, elevi.Romana
        FROM elevi
        WHERE elevi.nume='$name'";
        $result = $conn->query($sql);

        //echo $name;
        if ($result->num_rows > 0) 
        {
          // output data of each row
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
                      echo '<br>';
                      echo "<b>MATE</b> <br>Test "."$row[Matematica] <br>";
                      echo "<b>Informatica</b>"."$row[Informatica]<br> ";
                      echo "<b>Romana</b>"."$row[Romana]<br> ";
                      echo ' <p class="card-text">Contact:</p><p>';
                      echo "$row[Email]";
                      echo '</p><p>';
                      echo "$row[Telefon]";
                      echo '</p>';
                    echo '</div>';
                  echo '</div>'; 
                echo '</div>';   

            }  
          echo '</div>';
        } 
        else{
          echo "<br>    Introdu numele elevului";
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








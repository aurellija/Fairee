<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Registracija į kelionę</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>
<?php 
session_start();
include_once 'php/nav.inc.php'; 
?>

<div class="container">
  <div class="col-md blokas">

<?php
  if (isset($_SESSION['Nr'])) {
   
    if(isset($_GET['regnr'])) {
    $regnr = $_GET['regnr'];
   
    include 'php/db.inc.php';
    
    $rez = $cnct -> query("SELECT Pavadinimas, Data, Tipas, Tipas_id, Organizatorius, Trukme, Reg_iki, Foto FROM visos_keliones WHERE Nr=$regnr");
    
    $x = $rez -> fetch_assoc();

    $tip = $x['Tipas_id'];
    $truk = $x['Trukme'];
    $kitas = $x['Reg_iki'];

    include_once 'php/register-1.inc.php';
    
  echo'
    <h4 class="mb-3 py-3 my-3">Registracija į kelionę</h4>
      <div class="row justify-content-between">
        <div class="col-md-6 order-md-1 mb-4">
          <div class="mb-3 tekstas">
            <p>Pavadinimas: <strong>'.$x['Pavadinimas'].'</strong></p>
          </div>
          <div class="mb-3 tekstas">
            <p>Kelionės data: '.$x['Data'].'</p>
          </div>
          <div class="mb-3 tekstas">
            <p>Kelionės trukmė: '.$x['Trukme'].'</p>
          </div>
          <div class="mb-3 tekstas">
            <p>Kelionės tipas: '.$x['Tipas'].'</p>
          </div>
          <div class="mb-3 tekstas">
            <p>Organizatorius: '.$x['Organizatorius'].'</p>
          </div>
        </div>

        <div class="col-md-5 order-md-2 mb-4">
      
        <form action="register.php?regnr='.$regnr.'&kitas='.$kitas.'" class="needs-validation" method="POST">
          <div class="mb-3 tekstas">
            <label class="form-check-label" for="veg">Vegetaras:</label>
            <div class="form-check" id="veg">
            <input class="form-check-input" type="radio" name="veg" id="flexRadioDefault1" value="1" required>
            <label class="form-check-label" for="flexRadioDefault1">
              Taip
            </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="veg" id="flexRadioDefault2" value="0" required>
              <label class="form-check-label" for="flexRadioDefault2">
                Ne
              </label>
            </div>
          </div>';

          if($truk > 1) {
            echo ' <div class="mb-3 tekstas">
            <label for="palap">Palapinių vietų suma</label>
              <input type="number" class="form-control" id="palap" name="palap" placeholder="pvz. jei 1 dvivietė ir 1 trivietė, rašykite 5"
              required>
            </div>';
          }

          else if ($tip=='LAZD') {
            echo'
            <div class="mb-3 tekstas">
            <label for="lazd">Šiaurietiškų lazdų poros</label>
              <input type="number" class="form-control" id="lazd" name="lazd" placeholder="" 
              required>
            </div>';
          }
          echo'
            <hr class="mb-4">
            <button class="btn btn-lg btn-block" type="submit" name="reg1">Registruotis</button>
        </form>
      </div>
  </div>';
    }
  }
  else {
    header("Location: ../index.php");
  }; 

?>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; Fairee</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
  	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="form-validation.js"></script>
  
</body>

</html>
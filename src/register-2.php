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
   
    include_once 'php/register-1.inc.php';
    include 'php/db.inc.php';
    
    $rez = $cnct -> query("SELECT Pavadinimas, Data, Tipas, Tipas_id, Organizatorius, Trukme, Reg_iki, Foto FROM visos_keliones WHERE Nr=$regnr");
    $rez_2 = $cnct -> query("SELECT Vegetaras, Palapines, Lazdu_poros FROM registracija_1 WHERE Keliones_nr=$regnr");
   
    $x = $rez -> fetch_assoc();
    $zmoniu = $rez_2 -> num_rows;

    $tip = $x['Tipas_id'];
    $truk = $x['Trukme'];
    $data = $x['Data'];

    include_once 'php/register-2.inc.php';
    
  echo'
    <div class="container">
        <div class="row">
            <h4 class="mb-3">Registracija į kelionę 2</h4>
        </div>
        <div class="row">
            <p>Pavadinimas: <strong>'.$x['Pavadinimas'].'</strong></p>
        </div>
        <div class="row">
            <p>Kelionės data: '.$x['Data'].'</p>
        </div>
        <div class="row">
            <p>Kelionės trukmė: '.$x['Trukme'].' d.</p>
        </div>
        <div class="row">
          <p>Dalyvių kiekis: '.$zmoniu.'</p>
        </div>
        <hr>
        <div class="row">
            <div class="mb-3 tekstas">
            <p> <strong>Trūkstama manta</strong></p>
            </div>
        </div>
    </div>

  <div class="row justify-content-between">
  <div class="col-md-5 order-md-1 mb-4">
          <div class="mb-3 tekstas">
            <p>Košė: '.$kose.' g.</p>
          </div>
          <div class="mb-3 tekstas">
          <p>Sviestas: '.$sviest.' g.</p>
          </div>
          <div class="mb-3 tekstas">
          <p>Mėsa: '.$mesa.' g.</p>
          </div>
          <div class="mb-3 tekstas">
          <p>Pomidorai: '.$pom.' vnt.</p>
          </div>
          <div class="mb-3 tekstas">
          <p>Agurkai: '.$agurk.' vnt.</p>
          </div>
          <div class="mb-3 tekstas">
          <p>Makaronai: '.$mak.' g.</p>
          </div>
          <div class="mb-3 tekstas">
          <p>Vanduo: '.$vanduo.' ml</p>
          </div>
          <hr>';

          if($truk > 1) {
            echo '<div class="mb-3 tekstas">
            <p>Palapinės: '.$palap_reik.'</p>
            </div>';
          }
          if ($tip=='LAZD') {
            echo '<div class="mb-3 tekstas">
            <p>Šiaurietiškų lazdų: '.$lazdu_reik.'</p>
            </div>';
          }
        echo'
        <hr>
        <div class="mb-3 tekstas">
        <p>Krosnelė: '.$krosn.' vnt.</p>
        </div>
        </div>

        <div class="col-md-3 order-md-2 mb-4">
      
        <form action="register-2.php?regnr='.$regnr.'" class="needs-validation" method="POST">
    
        <div class="mb-3 tekstas">
        <label for="kose">Košė, g</label>
            <input type="number" class="form-control" id="kose" name="kose1" placeholder="" 
            required>
        </div>
        <div class="mb-3 tekstas">
        <label for="sviest">Sviestas, g</label>
            <input type="number" class="form-control" id="sviest" name="sviest1" placeholder="" 
            required>
        </div>
        <div class="mb-3 tekstas">
        <label for="mesa">Mėsa, g</label>
            <input type="number" class="form-control" id="mesa" name="mesa1" placeholder="" 
            required>
        </div>
        <div class="mb-3 tekstas">
        <label for="pom">Pomidorai, vnt.</label>
            <input type="number" class="form-control" id="pom" name="pom1" placeholder="" 
            required>
        </div>
        <div class="mb-3 tekstas">
      <label for="agurk">Agurkai, vnt.</label>
          <input type="number" class="form-control" id="agurk" name="agurk1" placeholder="" 
          required>
      </div>
      <div class="mb-3 tekstas">
      <label for="mak">Makaronai, g</label>
          <input type="number" class="form-control" id="mak" name="mak1" placeholder="" 
          required>
      </div>
      </div>
      <div class="col-md-3 order-md-2 mb-4">';

      echo'
      <div class="mb-3 tekstas">
      <label for="vanduo">Vanduo, ml</label>
          <input type="number" class="form-control" id="vanduo" name="vand1" placeholder="" 
          required>
      </div>';

      if($truk > 1) {
        echo ' <div class="mb-3 tekstas">
        <label for="palap">Palapinių vietų suma</label>
            <input type="number" class="form-control" id="palap" name="palap1" placeholder="pvz. jei 1 dvivietė ir 1 trivietė, rašykite 5"
            required>
        </div>';
        }
        if ($tip=='LAZD') {
        echo'
        <div class="mb-3 tekstas">
        <label for="lazd">Šiaurietiškų lazdų poros</label>
            <input type="number" class="form-control" id="lazd" name="lazd1" placeholder="" 
            required>
        </div>';
        }
        echo'
        <div class="mb-3 tekstas">
        <label for="kros">Krosnelė</label>
            <input type="number" class="form-control" id="kros" name="kros1" placeholder="" 
            required>
        </div>
          <hr class="mb-4">
          <button class="btn btn-lg btn-block" type="submit" name="register2">Registruotis</button>
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
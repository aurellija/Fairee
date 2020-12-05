<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Prisijungimas</title>
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<style>
  h5{
    padding-left:39%;
    color:white;
}
</style>

<?php
session_start();
include_once 'php/nav.inc.php'; 
include 'php/log-in.inc.php';
?>

<body>
  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col-md-7 blokas">
      <?php
        if (isset($_SESSION['Nr'])) {
          header("Location: ../index.php");
        }
          else {
            echo
              '<h4 class="mb-3 py-3 my-3">Prisijungimas</h4>
              <form action="log-in.php" class="needs-validation" method="POST" novalidate>
              <div class="mb-3 tekstas">
                <label for="email">Elektroninis paštas</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="vardas.pavarde@epastas.com" value=""
                  required>
                <div class="invalid-feedback">
                  Prašome įvesti tinkamą elektroninio pašto adresą.
                </div>
              </div>
    
              <div class="mb-3 tekstas">
                <label for="email">Slaptažodis</label>
                <input type="password" class="form-control" id="password" name="pass" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Prašome įvesti slaptažodį.
                </div>
              </div>
    
              <hr class="mb-4">
              <button class="btn btn-lg btn-block" type="submit" name="submit"> Prisijungti</button>
    
              <div class="etc-login-form py-3">
                <p>Naujas vartotojas? <a href="sign-up.php">Registruotis</a></p>
              </div>
    
              </form>';}
      ?>
    
      </div>
      <div class="col"></div>

    </div>

  <?php
  if (!isset($_GET['login'])){
    exit();
  }
  else {
      $check = $_GET['login'];

      if ($check == "empty"){
          echo "<h5>Yra neužpildytų laikų</h5>";
          exit();
      }
      elseif ($check == "error"){
        echo "<h5>error </h5>";
        exit();
      }
      elseif ($check == "sqlerror"){
        echo "<h5>sql error </h5>";
        exit();
      }
      elseif ($check == "pass"){
        echo "<h5>Slaptažodis neteisingas</h5>";
        exit();
      }
      elseif ($check == "nouser"){
        echo "<h5> Nėra tokio el. pašto </h5>";
        exit();
      }
  }
?>

  <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; Fairee</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
  <script src="form-validation.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
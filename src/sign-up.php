<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Registracija</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">
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
include 'php/sign-up.inc.php';
?>

<body>
  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col-md-7 blokas">
        <h4 class="mb-3 py-3 my-3">Registracija</h4>
        <form class="needs-validation" action="sign-up.php" method="POST">
        <?php
           if (!isset($_SESSION['Nr'])) {
            if (isset($_GET['fname'])) $fname=$_GET['fname']; 
            else $fname="";
            echo
            '<div class=" mb-3 tekstas">
              <label for="firstName">Vardas</label>
              <input type="text" class="form-control" id="firstName" name="fname" 
              placeholder="Vardas iš didžiosios" value="'.$fname.'" required>
              <div class="invalid-feedback">
                Prašome įvesti prisijungimo vardą.
              </div>
            </div>';

            if (isset($_GET['lname'])) $lname=$_GET['lname'];
            else $lname="";
            echo
            '<div class=" mb-3 tekstas">
              <label for="lastName">Pavardė</label>
              <input type="text" class="form-control" id="lastName" name="lname" 
              placeholder="Pavardė iš didžiosios" value="'.$lname.'" required>
              <div class="invalid-feedback">
                Prašome įvesti prisijungimo vardą.
              </div>
            </div>';

            if (isset($_GET['email'])) $email=$_GET['email'];
            else $email="";
            echo
            '<div class="mb-3 tekstas">
              <label for="email">Elektroninis paštas</label>
              <input type="email" class="form-control" id="email" name="email" 
              placeholder="pvz.: vardas.pavarde@gmail.com" value="'.$email.'"
                required>
              <div class="invalid-feedback">
                Prašome įvesti tinkamą elektroninio pašto adresą.
              </div>
            </div>';

            echo
            '<div class="mb-3 tekstas">
              <label for="password">Slaptažodis</label>
              <input type="password" class="form-control" id="password" name="pass" 
              placeholder="Privalomi: bent 8 simboliai, didžioji ir mažoji raidės, skaičius" value="" 
              pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" required>
              <div class="invalid-feedback">
                Prašome įvesti slaptažodį.
              </div>
            </div>
            <div class="mb-3 tekstas">
              <label for="password_confirmation">Pakartokite slaptažodį</label>
              <input type="password" class="form-control" id="password_confirmation" name="rpass"
              placeholder="Privalomi: bent 8 simboliai, didžioji ir mažoji raidės, skaičius" value="" 
              pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" required>
              <div class="invalid-feedback">
                Prašome pakartoti slaptažodį.
              </div>
            </div>';

            if (isset($_GET['bdate'])) $bdate=$_GET['bdate'];
            else $bdate="";
            echo
            '<div class="mb-3 tekstas">
              <label for="birthDate">Gimimo data</label>
              <input type="date" id="birthDate" class="form-control" 
              placeholder="" name="bdate" value="'.$bdate.'" required>
              <div class="invalid-feedback">
                Prašome įvesti savo gimimo datą.
              </div>
            </div>';}
          else {
            header("Location: ../index.php");
          }

        ?>
          <hr class="mb-4">
          <button class="btn btn-lg btn-block" type="submit" name="submit">Registruotis</button>

          <div class="etc-login-form py-3">
            <p>Jau turite prisijungimą? <a href="log-in.php">Prisijungti</a></p>
          </div>
        </form>
      </div>
      <div class="col"></div>
    </div>

    <?php
  if (!isset($_GET['signup'])){
    exit();
  }
  else {
      $check = $_GET['signup'];

      if ($check == "empty"){
          echo "<h5>Neužpildėte visų laukų</h5>";
          exit();
      }
      elseif ($check == "fname"){
          echo "<h5>Neteisingai įvestas vardas</h5>";
          exit();
      }
      elseif ($check == "lname"){
        echo "<h5>Neteisingai įvesta pavardė</h5>";
        exit();
      }
      elseif ($check == "pass"){
        echo "<h5>Slaptažodžiai nesutampa</h5>";
        exit();
      }
      elseif ($check == "email"){
          echo "<h5>Neteisingas el. paštas</h5>";
          exit();
      }
      else if ($_GET['signup'] == "success"){
        echo '
          <div class="row justify-content-center mb-3">
          <div class="col-md-7 blokas mt-3">
          <h6>Sėkmingai užsiregistravote. Galite prisijungti <a href="log-in.php"> čia </a> </h6>
          </div>
          </div>';
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
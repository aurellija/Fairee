<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Profilis</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<style>
  h5{
    margin-top: 5px;
    padding-left:25%;
    color:white;
}
</style>

<body>
<?php 
session_start();
include_once 'php/nav.inc.php';
include_once 'php/profile.inc.php';

if (isset($_SESSION['Nr'])) {

echo
  '<div class="container blokas ml-auto mr-auto">

    <div class="row ml-auto">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="mb-3 py-3 my-3">Kelionės</h4>

        <p>Sudalyvautos kelionės:</p>
        <p>Laukiančios kelionės:</p>
        <p>Nebaigtos kelionės:</p>
      </div>

      <div class="col-md-8 order-md-1">
        <h4 class="mb-3 py-3 my-3">Profilis</h4>
        <form action="profile.php" class="needs-validation" method="POST" novalidate>
          <div class="row">
            <div class="col-md-6 mb-3 tekstas">
              <label for="firstName">Vardas: '.$_SESSION['fname'].'</label>
              <input type="text" class="form-control" id="firstName" name="fname" placeholder="" 
              value="'.$_SESSION['fname'].'" required>

            </div>
            <div class="col-md-6 mb-3 tekstas">
              <label for="lastName">Pavardė: '.$_SESSION['lname'].'</label>
              <input type="text" class="form-control" id="lastName" placeholder=""
              value="'.$_SESSION['lname'].'" name="lname" required>
            </div>
          </div>

          <div class="mb-3 tekstas">
            <label for="email">Elektroninis paštas: '.$_SESSION['email'].'</label>
            <input type="email" class="form-control" id="email" value="" name="email" required>
          </div>

          <div class="mb-3 tekstas">
            <label for="telephone">Telefono numeris: '.$_SESSION['phone'].'</label>
            <input type="text" class="form-control" id="telephone" placeholder="+370 " 
            name="phone" value="'.$_SESSION['phone'].'" required>
          </div>

          <div class="mb-3 tekstas">
            <label for="birthDate">Gimimo data: '.$_SESSION['bdate'].'</label>
            <input type="date" id="birthDate" class="form-control" placeholder="" 
            value="'.$_SESSION['bdate'].'" name="bdate" required>
          </div>

          <hr class="mb-4">
          <button class="btn btn-lg btn-block" type="submit" name="submit">Išsaugoti</button>
        </form>
      </div>
    </div>';}

    else {
      header("Location: ../index.php");
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
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="form-validation.js"></script>
  
</body>

</html>
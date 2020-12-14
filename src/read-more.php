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
?>

<body>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 blokas">
          
                <div class="mb-3 tekstas">
      <?php
      if(isset($_GET['read'])) {
          $read=$_GET['read'];
          if($read=="travels") {
            echo
            '<h4 class="mb-3 py-3 my-3">Kelionės</h4>
            Dalyvauk įdomiose kelionėse ir susirask naujų draugų!
            Pagrindinis Fairee kelionių kūrimo privalumas – automatinis mantos paskaičiavimas
            kiekvienam keleiviui.
            ';
          }
          if($read=="mytravels") {
            echo
           '<h4 class="mb-3 py-3 my-3">Mano kelionės</h4>
           Stebėk sąrašą būsimų kelionių. Gali dalyvauti įvairiose išvykose – tiek pėsčiomis, tiek dviračiu ar baidare!
            ';
          }
          if($read=="profile") {
            echo' <h4 class="mb-3 py-3 my-3">Profilis</h4>
            Personalizuok savo paskyrą tam, kad kiti tave atpažintų.
           ';
          }
      }
      echo ' <hr class="mb-4">
      <p><a class="btn" href="../index.php" role="button">Grįžti &raquo;</a><p>';

      if(!isset($_SESSION['Nr'])) {
        echo '<div class="etc-login-form py-3">
        <p>Naujas vartotojas? <a href="sign-up.php">Registruotis</a></p>';
      }
      ?>
                   
                </div>
            </div>
        </div>
    </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; Fairee</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>


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
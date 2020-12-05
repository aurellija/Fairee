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
    <div class="row">
      <div class="col"></div>
      <div class="col-md-8 blokas">
  
    <?php
      if (isset($_SESSION['Nr'])) {
        echo '
          <form action="php/log-out.inc.php" method="POST">
            <h4 class="mb-3 py-3 my-3">Atsijungti</h4>
            <button class="btn btn-lg btn-block" type="submit" name="submit"> Atsijungti </button>
            </form>
            <div class="etc-login-form py-3">
            <p>Turite klausimų? <a href="about.php">Skaitykite čia</a></p>
            </div>
          </form>
        ';
      }
      else {
        header("Location: ../index.php");
      }
    ?>
      </div>
      <div class="col"></div>
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
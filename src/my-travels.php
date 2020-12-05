<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Kelionės</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/carousele.css">
</head>
<body>
<?php 
session_start();
include 'php/db.inc.php';
include_once 'php/nav.inc.php'; 
$rez = $cnct -> query('SELECT Nr, Pavadinimas, Reg_iki, Liko_vietu, Foto FROM visos_keliones');
$kiek = $rez -> num_rows;
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 blokas travelcards">
            <?php 
            echo
            '<button class="btn btn-lg mt-2" type="submit" name="submit">
            <a href="create-travel.php">
            Sukurti kelionę </a> </button>';
            include 'php/cards.inc.php' ?>
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
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script type="text/javascript" src="js/carousele.js"></script>
   
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Keliones </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Pasirinkta kelionė</title>
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<?php 
session_start();
include_once 'php/nav.inc.php';

if (isset($_SESSION['Nr'])) {
    echo'
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10 blokas">';
                include 'php/carousel.inc.php';
    echo' </div>
        </div>
    </div>';
}
else {
    header("Location: ../index.php");
}
?>

<script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script type="text/javascript" src="js/carousele2.js"></script>

</body>

</html>
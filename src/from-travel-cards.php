<?php
include 'php/mydb.php';
?>

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
<nav class="navbar navbar-expand-sm navbaras">
        <a class="navbar-brand" href="#"><img src="assets/fairee-logo.svg" width="60" height="60"
                alt=""></a>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="travel-cards.php">Kelionės</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mytravels.html">Mano kelionės</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.html">Profilis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../index.html">Atsijungti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">Apie</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="col blokas">
            <?php include 'php/fromcards.php';?>
        </div>
        <a class="carousel-control-prev" href="#car">
        <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#car">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="js/carousele2.js"></script>

</body>

</html>
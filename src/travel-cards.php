<?php
include 'php/mydb.php';
$rez = $mysqli -> query('SELECT Nr, Pavadinimas, Reg_iki, Liko_vietu, Foto FROM all_keliones');
$kiek = $rez -> num_rows;
?>
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
            <?php include 'php/cards.php' ?>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>


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
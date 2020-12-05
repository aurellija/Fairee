<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Pagrindinis</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">
    <link href="src/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/css/styles.css" rel="stylesheet">
</head>
<body>
<?php
  session_start();
  include_once 'src/php/nav-index.inc.php';
?>


<div class="container blokas carhome mt-5">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

    <div class="carousel-inner">
 
        <div class="carousel-item active">
          <div class="container-car">
            <img src="src/assets/img/1.jpg">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                  <div class="carousel-caption text-left">
                    <h1>Fairee</h1>
                    <p>Kelionių organizavimo sistema jūsų kolektyvui</p>
                  </div>
                </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="container-car">
          <img src="src/assets/img/2.jpg">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Fairee</h1>
                <p>Planavimas taps dar lengvesnis</p>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
        <div class="container-car">
        <img src="src/assets/img/3.jpg">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Fairee</h1>
                <p>Kelionės – daug įdomesnės!</p>
              </div>
            </div>
            </div>
        </div>

    </div>

      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
</div>
<?php
if (isset($_SESSION['Nr'])) {
  echo '
  <div class="container blokas home">
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img" src="src/assets/map.svg" width="140" height="140" >
		<h2>Kelionės</h2>
		<p><a class="btn" href="travel-cards.php" role="button">Plačiau &raquo;</a><p>
      </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img" src="src/assets/compass.svg" width="140" height="140" >
		<h2>Mano kelionės</h2>
		<p><a class="btn" href="my-travels.php" role="button">Plačiau &raquo;</a><p>
      </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img" src="src/assets/user.svg" width="140" height="140" >
		<h2>Profilis</h2>
		<p><a class="btn" href="profile.php" role="button">Plačiau &raquo;</a><p>
      </div>
    </div>
    </div>';
}

else {
  echo '
  <div class="container blokas home">
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img" src="src/assets/map.svg" width="140" height="140" >
    <h2>Kelionės</h2>
    <h6>Dalyvauk ir rask naujų draugų</h6>
		<p><a class="btn" href="travel-cards.php" role="button">Plačiau &raquo;</a><p>
      </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img" src="src/assets/compass.svg" width="140" height="140" >
    <h2>Mano kelionės</h2>
    <h6>Sukurk savo kelionę</h6>
		<p><a class="btn" href="my-travels.php" role="button">Plačiau &raquo;</a><p>
      </div>
      <div class="col-lg-4">
        <img class="bd-placeholder-img" src="src/assets/user.svg" width="140" height="140" >
    <h2>Profilis</h2>
    <h6>Tvarkyk savo paskyrą</h6>
		<p><a class="btn" href="profile.php" role="button">Plačiau &raquo;</a><p>
      </div>
    </div>
    </div>';
}
?>

		<footer class="container my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; Fairee</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
    <script src="src/assets/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Nauja kelionė</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>

<?php
session_start();
include_once 'php/nav.inc.php'; 

if (isset($_SESSION['Nr'])) {
include_once 'php/create-travel.inc.php';
 echo
  '<div class="container blokas">
    <h4 class="mb-3 py-3 my-3">Nauja kelionė</h4>
    <form action="create-travel.php" class="needs-validation" method="POST">
    <div class="row ml-auto">
 
      <div class="col-md-6 order-md-2 mb-4">

        <div class="mb-3 tekstas">
        <label for="tipas">Tipas</label>
        <input type="text" class="form-control" id="tipas" placeholder="Trumpai aprašytas tipas" 
        name="t_type" required>
        <div class="invalid-feedback">
          Prašome įvesti telefono numerį.
        </div>
        </div>

          <div class="mb-3 tekstas">
            <label for="tipasid">Tipo ID</label>
            <input list="tipai" class="form-control" id="tipasid" placeholder="Pasirinkite atitinkantį tipo ID"
            name="type_id" required>
            <datalist id="tipai">
            <option value="DVIR">
            <option value="BAID">
            <option value="ZYG">
            <option value="LAZD">
            <option value="AUTOM">
          </datalist>
            <div class="invalid-feedback">
              Prašome įvesti telefono numerį.
            </div>
          </div>

          <div class="mb-3 tekstas form-group">
            <label for="comment">Kelionės aprašymas:</label>
            <textarea class="form-control" rows="5" id="comment" name="t_desc"></textarea>
          </div>
        

        <div class="mb-3 tekstas">
          <label for="link">Nuotraukos nuoroda</label>
          <input type="url" id="link" class="form-control" placeholder="Veikianti nuotraukos nuoroda" value="" 
          name="foto_url">
        </div>

        <div class="mb-3 tekstas custom-file">
          <input type="file" class="custom-file-input" id="validatedCustomFile" name="foto_failas">
          <label class="custom-file-label" for="validatedCustomFile">Pasirinkti failą...</label>
        </div>

        <hr class="mb-4">
        <button class="btn btn-lg" type="submit" name="submit">Išsaugoti</button>
        <button class="btn btn-lg cancel" type="reset">Išvalyti</button>
      </div>


      <div class="col-md-6 order-md-1">

          <div class="mb-3 tekstas">
            <label for="travelName">Kelionės pavadinimas</label>
            <input type="text" id="travelName" class="form-control" placeholder="Pavadinimas iki 40 simbolių" 
            value="" name="t_name" required>
          </div>

          <div class="mb-3 tekstas">
            <label for="organiser">Organizatorius</label>
            <input type="text" class="form-control" id="organiser" placeholder="Organizatoriaus vardas ir pavardė" 
            value="'.$_SESSION['fname'].' '.$_SESSION['lname'].'" 
            name="org_name" required>
            <div class="invalid-feedback">
              Prašome įvesti teisingą vardą.
            </div>
          </div>

          <div class="mb-3 tekstas">
            <label for="travelDate">Kelionės data</label>
            <input type="date" id="travelDate" class="form-control" placeholder="" value=""
            name="t_date" required>
            <div class="invalid-feedback">
              Prašome pasirinkti teisingą datą.
            </div>
          </div>

          <div class="mb-3 tekstas">
            <label for="reg_until">Registracijos pabaigos data</label>
            <input type="date" id="reg_until" class="form-control" placeholder="" value="" 
            name="reg_until" required>
            <div class="invalid-feedback">
              Prašome pasirinkti teisingą datą.
            </div>
          </div>

          <div class="mb-3 tekstas">
            <label for="trukme">Trukmė (d.)</label>
            <input type="number" class="form-control" id="trukme" placeholder="dienų skaičius" value=""
             name="t_dur" required>
            <div class="invalid-feedback">
              Prašome įvesti tinkamą elektroninio pašto adresą.
            </div>
          </div>

          <div class="mb-3 tekstas">
          <label for="vietos">Vietų skaičius</label>
          <input type="number" class="form-control" id="vietos" placeholder="" value=""
          name="t_places" required>
          <div class="invalid-feedback">
            Prašome įvesti tinkamą elektroninio pašto adresą.
          </div>
        </div>

        
      </div>
    </div>
    </form>';}
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
<?php

if (isset($_POST['reg1'])){
    include_once 'db.inc.php';

    $kitas = $_GET['kitas'];
    $veg= $_POST['veg'];

    if(isset($_POST['palap'])) {
        $palap= $_POST['palap'];
    }
    else $palap=0;

    if(isset($_POST['dvir'])) {
        $dvir= $_POST['dvir'];
    }
    else $dvir=0;

    if(isset($_POST['lazd'])) {
        $lazd= $_POST['lazd'];
    }
    else $lazd=0;
    
    $vart_nr = $_SESSION['Nr'];
    $vart_vardas = $_SESSION['fname'];
    $rez = "INSERT INTO registracija_1(Vartotojo_nr, Vartotojo_vardas, Keliones_nr, Vegetaras, Palapines, Dviraciai, Lazdu_poros)
    VALUES($vart_nr,'$vart_vardas',$regnr,$veg,$palap,$dvir,$lazd);";

    if (mysqli_query($cnct, $rez)) {
        echo '<h5 class="mt-2">Registracija sėkminga. Sekantis etapas atsidarys: '.$kitas.'</h5>';
    }
    else {
        echo mysqli_error($cnct);
    }

}
else {
   //echo "<h5>nieko</h5>";
}
?>
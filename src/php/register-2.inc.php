<?php

$rez2 = $cnct -> query("SELECT Vegetaras, Palapines, Lazdu_poros FROM registracija_1 WHERE Keliones_nr=$regnr");

$veget = 0;
$palapines = 0;
$lazdu = 0;

$kiek = $rez2 -> num_rows;
    if ($rez2->num_rows > 0) {
        for($i=0; $i<$kiek; $i++){
            $x2 = $rez2 -> fetch_assoc();
            $veget += $x2['Vegetaras'];
            $palapines += $x2['Palapines'];
            $lazdu += $x2['Lazdu_poros'];
        }
    }
    else echo '0 rezultatų';

$visvalg = $kiek-$veget;

$kose = 80*$kiek*$truk;
$sviest = 20*$kiek*$truk;
$mesa = 150*$visvalg*$truk;
$pom = ($visvalg*2 + $veget*3)*$truk;
$agurk = ($visvalg + $veget*2)*$truk;
$mak = $kiek*50*$truk;
$vanduo = ($kiek*2000+$kiek*100+$kiek*500+$visvalg*250)*$truk;

$palap_reik = $kiek-$palapines;
if($palap_reik<0) $palap_reik='+ '.abs($palap_reik).' (galite neimti palapinės)';
$lazdu_reik=$kiek-$lazdu;
if($lazdu_reik<0) $lazdu_reik='+ '.abs($lazdu_reik).' (galite neimti lazdų)';

if($kiek<11) $krosn=1;
else $krosn = $kiek/10;

$kaina = $kose/1000*1.8+$sviest/1000*10+$mesa/1000*4+$pom*0.15+$agurk*0.1+
$mak/1000*2+$vanduo/1000*0.5+$krosn*15;

$kaina_vid = $kaina/$kiek;


if (isset($_POST['register2'])){

    include_once 'db.inc.php';
    
    $kose1= $_POST['kose1'];
    $sviest1= $_POST['sviest1'];
    $mesa1= $_POST['mesa1'];
    $pom1= $_POST['pom1'];
    $agurk1= $_POST['agurk1'];
    $mak1= $_POST['mak1'];
    $vand1= $_POST['vand1'];
    $kros1= $_POST['kros1'];

    $vart_suma = $kose1/1000*1.8+$sviest1/1000*10+$mesa1/1000*4+
    $pom1*0.15+$agurk1*0.1+$mak1/1000*2+$vand1/1000*0.5+$kros1*15;

    if(isset($_POST['palap1'])){
        $palap1= $_POST['palap1'];
        $vart_suma += $palap1*12;
    }
    if(isset($_POST['lazd1'])){
        $lazd1= $_POST['lazd1'];
        $vart_suma += $lazd1*15;
    }

    $vart_nr = $_SESSION['Nr'];

    $rez = "INSERT INTO registracija_2(Vartotojo_Nr, Keliones_Nr)
    VALUES($vart_nr,$regnr);";

    if($vart_suma >= $kaina_vid) {
        if (mysqli_query($cnct, $rez)) {
            echo '<h5 class="mt-2">Registracija sėkminga. Laukiame kelionėje
            '.$data.'.</h5>';
        }
        else {
            echo mysqli_error($cnct);
        }
    }
    else echo '<h5 class="mt-2">Nepakankamas daiktų pasirinkimas. Vidutinė
    kelionės kaina '.$kaina_vid.'</h5>';

}

else {

}

?>
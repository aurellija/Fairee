<?php

$rez2 = $cnct -> query("SELECT Vegetaras, Palapines, Lazdu_poros FROM registracija_1 WHERE Keliones_nr=$regnr");

$yra = $cnct -> query("SELECT Kose, Sviestas, Mesa, Pomidorai, Agurkai, Makaronai,
Vanduo, Palapines, Lazdu_pora, Krosnele FROM duokle WHERE Kelione=$regnr");

$yra_kose = 0; $yra_sviest = 0; $yra_mesa = 0; $yra_pom = 0; $yra_agurk = 0; $yra_vand = 0;
$yra_mak = 0; $yra_palap = 0; $yra_lazd = 0; $yra_kros = 0;

$k_duokle = $yra -> num_rows;
    if ($yra->num_rows > 0) {
        for($i=0; $i<$k_duokle; $i++){
            $x2 = $yra -> fetch_assoc();
            $yra_kose += $x2['Kose'];
            $yra_sviest += $x2['Sviestas'];
            $yra_mesa += $x2['Mesa'];
            $yra_pom += $x2['Pomidorai'];
            $yra_agurk += $x2['Agurkai'];
            $yra_mak += $x2['Makaronai'];
            $yra_vand += $x2['Vanduo'];
            $yra_palap += $x2['Palapines'];
            $yra_lazd += $x2['Lazdu_pora'];
            $yra_kros += $x2['Krosnele'];
        }
    }

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
// if($palap_reik<0) $palap_reik='+ '.abs($palap_reik).' (galite neimti palapinės)';
$lazdu_reik=$kiek-$lazdu;
// if($lazdu_reik<0) $lazdu_reik='+ '.abs($lazdu_reik).' (galite neimti lazdų)';

if($kiek<11) $krosn=1;
else $krosn = $kiek/10;

$kaina = $kose/1000*1.8+$sviest/1000*10+$mesa/1000*4+$pom*0.15+$agurk*0.1+
$mak/1000*2+$vanduo/1000*0.5+$krosn*15;

$kaina_vid = $kaina/$kiek;

$kose = 80*$kiek*$truk-$yra_kose;
if ($kose < 0) $kose = '+ '.abs($kose);
$sviest = 20*$kiek*$truk-$yra_sviest;
if ($sviest < 0) $sviest = '+ '.abs($sviest);
$mesa = 150*$visvalg*$truk-$yra_mesa;
if ($mesa < 0) $mesa = '+ '.abs($mesa);
$pom = ($visvalg*2 + $veget*3)*$truk-$yra_pom;
if ($pom < 0) $pom = '+ '.abs($pom);
$agurk = ($visvalg + $veget*2)*$truk-$yra_agurk;
if ($agurk < 0) $agurk = '+ '.abs($agurk);
$mak = $kiek*50*$truk-$yra_mak;
if ($mak < 0) $mak = '+ '.abs($mak);
$vanduo = ($kiek*2000+$kiek*100+$kiek*500+$visvalg*250)*$truk-$yra_vand;
if ($vanduo < 0) $vanduo = '+ '.abs($vanduo);
$palap_reik=$palap_reik-$yra_palap;
if ($palap_reik < 0) $palap_reik = '+ '.abs($palap_reik);
$lazdu_reik=$lazdu_reik-$yra_lazd;
if ($lazdu_reik < 0) $lazdu_reik = '+ '.abs($lazdu_reik);
$krosn=$krosn-$yra_kros;
if ($krosn < 0) $krosn = '+ '.abs($krosn);

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
    else $palap1 = 0;

    if(isset($_POST['lazd1'])){
        $lazd1= $_POST['lazd1'];
        $vart_suma += $lazd1*15;
    }
    else $lazd1=0;

    $vart_nr = $_SESSION['Nr'];

    $rez_i = "INSERT INTO registracija_2(Vartotojo_Nr, Keliones_Nr)
    VALUES($vart_nr,$regnr);";
    $rez_d = "INSERT INTO duokle(Kelione, Kose, Sviestas, Mesa, Pomidorai, Agurkai, Makaronai,
    Vanduo, Palapines, Lazdu_pora, Krosnele)
    VALUES($regnr,$kose1,$sviest1, $mesa1, $pom1, $agurk1, $mak1, $vand1, $palap1, $lazd1, $kros1);";

    if($vart_suma >= ($kaina_vid/1.5)) {
        if (mysqli_query($cnct, $rez_i)) {
            echo '<h5 class="mt-2">Registracija sėkminga. Laukiame kelionėje
            '.$data.'.</h5>';
        }
        else {
            echo mysqli_error($cnct);
        }
        if (mysqli_query($cnct, $rez_d)) {
            echo '<h5 class="mt-2"> Gerai.</h5>';
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
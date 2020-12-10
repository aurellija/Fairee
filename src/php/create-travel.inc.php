<?php

if (isset($_POST['submit'])){
    include_once 'db.inc.php';

    $t_name= mysqli_real_escape_string($cnct, $_POST['t_name']);
    $org_name= mysqli_real_escape_string($cnct, $_POST['org_name']);
    $t_date= mysqli_real_escape_string($cnct, $_POST['t_date']);
    $t_dur= mysqli_real_escape_string($cnct, $_POST['t_dur']);
    $reg_until= mysqli_real_escape_string($cnct, $_POST['reg_until']);
    $t_type= mysqli_real_escape_string($cnct, $_POST['t_type']);
    $type_id= mysqli_real_escape_string($cnct, $_POST['type_id']);
    $t_places= mysqli_real_escape_string($cnct, $_POST['t_places']);
    $foto_url= mysqli_real_escape_string($cnct, $_POST['foto_url']);
    $t_desc= mysqli_real_escape_string($cnct, $_POST['t_desc']);
    
    if(empty($t_name) || empty($org_name) || empty($t_date) || empty($reg_until) 
    || empty($t_dur) || empty($t_type) || empty($type_id) || empty($t_desc)) {
        echo '<h5> Yra neužpildytų laukų</h5>';
    }

    else{
        $rez = "INSERT INTO visos_keliones
        (Pavadinimas, Organizatorius, Data, Trukme, Reg_iki, Tipas, Tipas_id, Liko_vietu, 
        Foto, Aprasymas) VALUES (?,?,?,?,?,?,?,?,?,?);";

        $stmt = mysqli_stmt_init($cnct);

        if(!mysqli_stmt_prepare($stmt, $rez)){
            echo "SQL error";
        } else {
            mysqli_stmt_bind_param($stmt, "sssisssiss", $t_name, $org_name, $t_date,
            $t_dur, $reg_until, $t_type, $type_id,$t_places,$foto_url,$t_desc);
            mysqli_stmt_execute($stmt);
            echo '<h5>Kelionė sukurta</h5>';
        }
    }

}
else {
   // echo "<h5>nieko</h5>";
}
?>
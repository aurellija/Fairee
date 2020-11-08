<?php

$host="localhost";
$myadname="root";
$myadpass="psi4vgtu";
$database="keliones";

$mysqli = new mysqli($host, $myadname, $myadpass, $database) or die ($mysqli->connect_error);

?>
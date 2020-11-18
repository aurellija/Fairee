<?php

$host="localhost";
$myadname="root";
$myadpass="";
$database="keliones";

$cnct = new mysqli($host, $myadname, $myadpass, $database) or die ($mysqli->connect_error);

?>
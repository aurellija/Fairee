<?php

if (isset($_POST['submit'])) {

    include_once 'db.inc.php';
    
    $nfname = mysqli_real_escape_string($cnct, $_POST['fname']);
    $nlname = mysqli_real_escape_string($cnct, $_POST['lname']);
    $nemail = mysqli_real_escape_string($cnct, $_POST['email']);
    $phone = mysqli_real_escape_string($cnct, $_POST['phone']);
    $bdate = mysqli_real_escape_string($cnct, $_POST['bdate']);

	if (empty($nemail)) {
        echo '<h5> Įveskite el. pašto adresą </h5>';
		//header("Location: ../src/profile.php?login=empty");
		
    }
    else {
		$rez = "UPDATE `vartotojai` SET `Vardas`='$nfname',
        `Pavarde`='$nlname', `Elpastas`='$nemail', `Telefonas`='$phone',
        `G_data`='$bdate' WHERE Nr=?;";

		$stmt = mysqli_stmt_init($cnct);
	
		if(!mysqli_stmt_prepare($stmt, $rez)) {
		    header("Location: ../src/profile.php?login=sqlerror");
            exit();
        }
	    else {
			mysqli_stmt_bind_param($stmt, "i", $_SESSION['Nr']);
			mysqli_stmt_execute($stmt);
            echo '<h5> Duomenys pasikeitė ir formoje bus atnaujinti prisijungus iš naujo</h5>';
		}
	}

} else {
	echo 'Nepavyko patvirtinti';
}
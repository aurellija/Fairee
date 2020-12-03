<?php

if (isset($_POST['submit'])) {

	include_once 'db.inc.php';

	$email = mysqli_real_escape_string($cnct, $_POST['email']);
	$pass = mysqli_real_escape_string($cnct, $_POST['pass']);

	if (empty($email) || empty($pass)) {
		header("Location: ../src/log-in.php?login=empty");
		exit();
    }
    else {
		$rez = "SELECT * FROM vartotojai WHERE Elpastas=?;";
		$stmt = mysqli_stmt_init($cnct);
	
		if(!mysqli_stmt_prepare($stmt, $rez)) {
		    header("Location: ../src/log-in.php?login=sqlerror");
            exit();
        }
	    else {
			mysqli_stmt_bind_param($stmt, "s", $email);
			mysqli_stmt_execute($stmt);
	
        	$result = mysqli_stmt_get_result($stmt);

        	if ($row = mysqli_fetch_assoc($result)) {
				$hashedpassCheck = password_verify($pass, $row['Slaptazodis']);
				if ($hashedpassCheck == false) {
					header("Location: ../src/log-in.php?login=pass");
					exit();
                } 
                elseif ($hashedpassCheck == true) {
                    session_start();
					$_SESSION['Nr'] = $row['Nr'];
					$_SESSION['fname'] = $row['Vardas'];
					$_SESSION['lname'] = $row['Pavarde'];
					$_SESSION['email'] = $row['Elpastas'];
					$_SESSION['bdate'] = $row['G_data'];
					$_SESSION['phone'] = $row['Telefonas'];
				
					header("Location: ../src/index.php");
					exit();
				}
            } 
            else {
        		header("Location: ../src/log-in.php?login=nouser");
				exit();
        	}
		}
	}
	mysqli_stmt_close($stmt);

} else {
	
}
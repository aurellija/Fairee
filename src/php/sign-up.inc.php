<?php

if (isset($_POST['submit'])){
    include_once 'db.inc.php';

    $fname= mysqli_real_escape_string($cnct, $_POST['fname']);
    $lname= mysqli_real_escape_string($cnct, $_POST['lname']);
    $email= mysqli_real_escape_string($cnct, $_POST['email']);
    $pass= mysqli_real_escape_string($cnct, $_POST['pass']);
    $hashpass=password_hash($pass, PASSWORD_DEFAULT);
    $rpass = mysqli_real_escape_string($cnct, $_POST['rpass']);
    $hashrpass=password_hash($rpass, PASSWORD_DEFAULT);
    $bdate= mysqli_real_escape_string($cnct, $_POST['bdate']);
    
    if(empty($fname) || empty($lname) || empty($email) || empty($pass) || empty($bdate) ) {
        header("Location: ../src/sign-up.php?signup=empty");
        exit();
    }
    else {
    
        if(!preg_match("/^[a-zA-Z]*$/", $fname)){
            header("Location: ../src/sign-up.php?signup=fname&email=$email&lname=$lname&bdate=$bdate");
            exit();
        }
        elseif (!preg_match("/^[a-zA-Z]*$/", $lname)){
            header("Location: ../src/sign-up.php?signup=lname&email=$email&fname=$fname&bdate=$bdate");
            exit();
        }
        elseif ($pass != $rpass){
            header("Location: ../src/sign-up.php?signup=pass&email=$email&fname=$fname&lname=$lname&bdate=$bdate");
            exit();
        }
        else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../src/sign-up.php?signup=email&fname=$fname&lname=$lname&bdate=$bdate");
                exit();
            }

            else{
                $rez = "INSERT INTO  vartotojai
                (Vardas, Pavarde, Elpastas, Slaptazodis, G_data)
                VALUES (?,?,?,?,?);";

                $stmt = mysqli_stmt_init($cnct);

                if(!mysqli_stmt_prepare($stmt, $rez)){
                    echo "SQL error";
                } else {
                    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $email,
                    $hashpass, $bdate);
                    mysqli_stmt_execute($stmt);
                }
                header("Location: ../src/index.php?signup=success");
                exit();
            }
        }
    }
}
else {
   // echo "<h5>nieko</h5>";
}
?>
<?php
include 'src/php/nav.php';
include 'src/php/mydb.php';

$rez = $mysqli -> query('SELECT Nr, Pavadinimas, Reg_iki, Liko_vietu, Foto FROM all_keliones');
$kiek = $rez -> num_rows;
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Keliones</title>
    <link rel="stylesheet" href="source/stylesheets/style1.css">
    <link rel="stylesheet" href="source/stylesheets/carousele.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
</head>
<style>
</style>

<body>

    <div class="container-fluid">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner row w-100 mx-auto">
                <?php
                    if ($rez->num_rows > 0) {

                        for($i=0; $i<$kiek; $i++){
                            $y = $rez -> fetch_assoc(); 
                                echo
                                    ' <div class="carousel-item col-md-4 active">
                                    <div class="card">
                                        <h5 class="card-title">'.$y["Pavadinimas"].'</h5>
                                        <img class="card-img-top img-fluid" src="'.$y["Foto"].'" alt="Card image cap">
                                        <div class="card-body">
                                            <p>Registruotis iki: '. $y["Reg_iki"].'<br>
                                            Liko vietų: '. $y["Liko_vietu"].'<br>
                                            <button type="button"><a href="travels_list.php?kuris='.$y["Nr"].'">Plačiau</a></button>
                                            
                                            </p>
                                            
                                        </div>
                                    </div>
                                    </div>';
                        }   
                    }
                    else {
                        echo "0 results";
                    }
                    $mysqli->close();
                ?>

            </div>

            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>


    <script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>

    <script type="text/javascript" src="source/script/carousel.js"></script>
    <script type="text/javascript" src="source/script/script.js"></script>

</body>

</html>
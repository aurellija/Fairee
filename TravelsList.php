<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Keliones</title>
    <link rel="stylesheet" href="src/css/style1.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
    
</head>

<body>
    <?php 
   include('src/php/nav.php');
   include('src/php/mydb.php');
   ?>

    <div class="container-fluid">

        <div id="car" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="row justify-content-center">

                <div class="col-8" style="border:1px solid black">

                    <ul class="carousel-indicators">
                        <li class="item1 active"></li>
                        <li class="item2"></li>
                        <li class="item3"></li>
                        <li class="item4"></li>
                        <li class="item5"></li>
                    </ul>

                    <div class="carousel-inner">
                        <?php

                        if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        $nr=$_GET['kuris'];

                        $rez = $mysqli -> query('SELECT Nr, Pavadinimas, Reg_iki, Liko_vietu, Foto FROM all_keliones');
                       
                        $kiek = $rez -> num_rows;

                        for($i=1; $i<=$kiek; $i++){
                            $y2 = $rez -> fetch_assoc(); 
                            if($i==$nr){
                                echo '
                                <div class="carousel-item active">
                                <h2>'.$y2["Pavadinimas"].'<h2>
                                <img src="'.$y2["Foto"].'" alt="Keliones nuotrauka" width="1100" height="500">
                                </div>';

                            }
                            else{
                            echo '
                            <div class="carousel-item">
                            <h2>'.$y2["Pavadinimas"].'<h2>
                            <img src="'.$y2["Foto"].'" alt="Keliones nuotrauka" width="1100" height="500">
                            </div>';
                            }
                        }
                        }
                        else echo 'klaida';
                        ?>
                    </div>

                </div>
            </div>


            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#car">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#car">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div>

    <script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="src/js/script.js"></script>
    <script type="text/javascript" src="src/js/carousele2.js"></script>

</body>

</html>
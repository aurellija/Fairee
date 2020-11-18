<div id="car" class="carousel slide" data-ride="carousel" data-interval="5000">
    <div class="row justify-content-center">
            <div class="carousel-inner">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $nr=$_GET['kuris'];
                $rez = $cnct -> query('SELECT Nr, Pavadinimas, Reg_iki, Liko_vietu, Foto, Aprasymas FROM all_keliones');
                $kiek = $rez -> num_rows;
                
                    for($i=1; $i<=$kiek; $i++){
                        $y2 = $rez -> fetch_assoc();
                        if($i==$nr) $act="active";
                        else $act="";
                            echo '
                            <div class="carousel-item ' .$act.'">
                            <h3>'.$y2["Pavadinimas"].'<h3>
                            <img src="'.$y2["Foto"].'" alt="Keliones nuotrauka" width="1100" height="500">
                            <h6>'.$y2["Aprasymas"].'</h6> </div>';
                    }
                }
                else echo 'klaida';
                ?>
            </div>
    </div>

</div>
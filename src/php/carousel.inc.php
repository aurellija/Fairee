<div id="car" class="carousel slide" data-ride="carousel" data-interval="5000">
    <div class="carousel-inner">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nr=$_GET['kuris'];
        $rez = $cnct -> query('SELECT Nr, Pavadinimas, Data, Tipas, Organizatorius, Trukme, 
        Reg_iki, Liko_vietu, Foto, Aprasymas FROM visos_keliones');
        $kiek = $rez -> num_rows;
            for($i=1; $i<=$kiek; $i++){
                $y2 = $rez -> fetch_assoc();
                if($y2['Nr']==$nr)  $act="active";
                else $act="";
                    echo '
                    <div class="carousel-item ' .$act.'">
                        <div class="row mt-3">
                            <div class="col-xl">
                                <h3>'.$y2["Pavadinimas"].'</h3><br>
                                <div class="row">
                                    <div class="col">
                                    <h6> Registruotis iki: '.$y2["Reg_iki"].'</h6> 
                                        <h6> Kelionės data: '.$y2["Data"].'</h6> 
                                        <h6> Kelionės trukmė: '.$y2["Trukme"].' d.</h6> 
                                        
                                    </div>
                                    <div class="col">
                                        <h6> Tipas: '.$y2["Tipas"].'</h6> 
                                        <h6> Organizatorius: '.$y2["Organizatorius"].'</h6>
                                        <h6> Liko vietų: '.$y2["Liko_vietu"].' d.</h6> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <br><h6>'.$y2["Aprasymas"].'</h6> 
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                <button type="button"><a href="register.php">Registruotis</a></button>
                                </div>
                            </div>
                            <div class="col">
                                <img src="'.$y2["Foto"].'" alt="Keliones nuotrauka" width="100%" height="100%">
                            </div>
                        </div>
                    </div>';
            }
        }
        else echo 'klaida';
        ?>
    </div>
    <a class="carousel-control-prev" href="#car">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#car">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
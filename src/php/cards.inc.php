<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <div class="carousel-inner row w-250 mx-auto">
        <?php
            include 'db.inc.php';
            $rez = $cnct -> query('SELECT Nr, Pavadinimas, Reg_iki, Liko_vietu, Foto FROM visos_keliones');
            $kiek = $rez -> num_rows;
                if ($rez->num_rows > 0) {
                    $act="active";
                    for($i=0; $i<$kiek; $i++){
                        $y = $rez -> fetch_assoc(); 
                        if($i>0) {$act="";}
                            echo 
                            '<div class="carousel-item col-md-4 ' .$act.'">
                                <div class="card my-3">
                                    <h4 class="card-title">'.$y["Pavadinimas"].'</h4>
                                    <img class="card-img-top img-fluid" src="'.$y["Foto"].'"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <p>Registruotis iki: '. $y["Reg_iki"].'<br>
                                        Liko vietų: '. $y["Liko_vietu"].'<br>
                                        <button class="btn btn-md mt-2 btn-block" type="submit" name="submit">
                                        <a href="from-travel-cards.php?kuris='.$y["Nr"].'">Plačiau</a></button>
                                        </p>
                                    </div>
                                </div>
                            </div>';
                    } 
                }
                else {
                    echo "0 results";
                }
                $cnct->close();
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

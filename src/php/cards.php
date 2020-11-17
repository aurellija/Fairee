
  
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <div class="carousel-inner row w-100 mx-auto">
        <?php
            include 'php/mydb.php';
            $rez = $mysqli -> query('SELECT Nr, Pavadinimas, Reg_iki, Liko_vietu, Foto FROM all_keliones');
            $kiek = $rez -> num_rows;
                if ($rez->num_rows > 0) {
                    $act="active";
                    for($i=0; $i<$kiek; $i++){
                        $y = $rez -> fetch_assoc(); 
                        if($i>0) {$act="";}
                            echo 
                            '<div class="carousel-item col-md-4 ' .$act.'">
                                <div class="card">
                                <h4 class="card-title">'.$y["Pavadinimas"].'</h4>
                                    <img class="card-img-top img-fluid" src="'.$y["Foto"].'"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <p>Registruotis iki: '. $y["Reg_iki"].'<br>
                                        Liko vietų: '. $y["Liko_vietu"].'<br>
                                        <button type="button"><a href="from-travel-cards.php?kuris='.$y["Nr"].'">Plačiau</a></button>
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
</div>

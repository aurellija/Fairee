<?php
    if (isset($_SESSION['Nr'])) {
        echo 
        '<nav class="navbar navbar-expand-sm navbaras">
            <a class="navbar-brand" href="../index.php"><img src="assets/fairee-logo.svg" width="60" height="60"
                    alt=""></a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="travel-cards.php">Visos kelionės</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my-travels.php">Mano kelionės</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profilis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="log-out.php" >Atsijungti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Apie</a>
                    </li>
                </ul>
            </div>
        </nav>';
    }
    else {
        echo
        '<nav class="navbar navbar-expand-sm navbaras">
            <a class="navbar-brand" href="../index.php"><img src="assets/fairee-logo.svg" alt=""></a>
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="log-in.php">Prisijungti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Apie</a>
                </li>
                </ul>
            </div>
        </nav>';
    }
?>
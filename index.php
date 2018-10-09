<?php

require_once('html-templates\head.php');

?>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">My Flights</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="view/addAirport.php">Airports</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="view/addCountry.php">Countries</a>
                    </li>
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Flights</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="view/addFlight.php">Add Flight</a>
                            <a class="dropdown-item" href="view/showFlight.php">Show Flight</a>
                        </div>
                    </li>
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilots</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="view/addPilot.php">Add Pilot</a>
                            <a class="dropdown-item" href="view/showPilot.php">Show Pilot</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container-fluid p-0">
        <div id="carouselSlides" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselSlides" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSlides" data-slide-to="1"></li>
                <li data-target="#carouselSlides" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/carousel1.jpeg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/carousel2.jpeg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/carousel3.jpg" alt="Third slide">
                </div>
            </div>
        </div>
    </main>
    <?PHP 
require_once('html-templates\footer.php');
?>

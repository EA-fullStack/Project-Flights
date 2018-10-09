<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>My Flights</title>
</head>
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
                            <a class="nav-link" href="add_content/addAirport.php">Airports</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="add_content/addCountry.php">Countries</a>
                    </li>
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Flights</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="add_content/addFlight.php">Add Flight</a>
                            <a class="dropdown-item" href="add_content/showFlight.php">Show Flight</a>
                        </div>
                    </li>
                    <li class="nav-item dropright">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilots</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="add_content/addPilot.php">Add Pilot</a>
                            <a class="dropdown-item" href="add_content/showPilot.php">Show Pilot</a>
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
    <footer>
    
    
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
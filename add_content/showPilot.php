<?php 
    require_once '..\bl.php';
?>

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
    <?php
    require_once '../header.php';
    ?>
    <main class="container-fluid p-0">
    <h1 align=center>Our Pilots</h1>
    <table class="table table-striped container">
  <thead class="thead-dark">
  <?php
        $buisness = new BusinessLogic();
        $allFlights = $buisness->getPilot();
        ?>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Picture</th>
    </tr>
  </thead>
  <tbody>
<?php
    foreach ($allFlights as $key => $value) {
?>
    <tr>
    <th scope="row"><?php echo $key+1 ?></th>
    <td><?php echo $value['id'] ?></td>
    <td><?php echo $value['name'] ?></td>
    <td><?php echo $value['picture_src'] ?></td>
    </tr>
    </tbody>
<?php
}
?>
</table>

    </main>
    <footer>
    
    
    </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    require_once '..\bl.php';
    //main head html
    ?>
    
<?php
$title = "show pilots";
require_once('..\html-templates\head.php');

?>


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
    <td>
    
    <!-- <div style='position:absolute' id='pilotImg<?php echo $key ?>' class="collapse"> -->
    <img class='pilot-images' src="../assets/pilot-profiles/<?php echo $value['picture_src'] ?>" alt="">
    <!-- </div> -->
    
    </td>
    </tr>
    </tbody>
<?php
}
?>
</table>

</main>
<?PHP 
require_once('..\html-templates\footer.php');
?>
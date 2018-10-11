
<?php
    $bl = new BusinessLogic;
    ?>
    <?php
        $buisness = new BusinessLogic();
    ?>

    <h1 align=center>All Flights</h1>
    <table class="flightsTable table table-striped container">
    <thead class="thead-dark">
    <tr>
        <td scope="col">Flight No</td>
        <td scope="col">Flight Date</td>
        <td scope="col">Flight From</td>
        <td scope="col">Flight To</td>
        <td scope="col">Pilot</td>
    </tr>
  </thead>
    <tbody>
    <?php
    
    if(!$tdFlight = $bl->getCompiledFlights() === ''){
        echo $tdFlight = $bl->getCompiledFlights();

    }else{
        for ($i=0; $i < 5; $i++) { 
            echo "<td>No Flights</td>";
        }
    }
    ?>
    </tbody>
    </table>

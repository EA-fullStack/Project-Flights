<?php
$title = "Show Flights";
require_once('..\html-templates\footer.php');
?>
<body>

<?php
    require_once '..\bl.php';

    $bl = new BusinessLogic;
    $arrayOfFlights = $bl->getFlight();
?>
<table>
<?php foreach ($arrayOfFlights as $item) { ?>
<tr>
<td><?php echo $item->getFlightId() ?></td>
<td><?php echo $item->getFlightFrom() ?></td>
<td><?php echo $item->getFlightTo() ?></td>
</tr>
<?php } ?>


<?PHP 
require_once('..\html-templates\footer.php');
?>


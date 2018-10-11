<?php
$title = "Add Airport";
require_once('..\controller\head.php');
require_once ('..\model\validate-model.php');
require_once('..\bl.php');


?>
<body>
    <?php
    require_once '../header.php';
    ?>
    <main class="container-fluid p-0">
    <h1 align=center>Add Airport</h1>
    <div class="addPilotWraper container border rounded">
        <?php require_once("../../project-flights/controller/addAirportsForm.php"); ?>
    </div>
    
    </main>
<?PHP 
require_once('..\controller\footer.php');
?>


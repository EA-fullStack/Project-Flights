<?php

$title = "Add Country";
require_once('..\controller\head.php');
require_once ('..\model\validate-model.php');
require_once('..\bl.php');
?>
<body>
    <?php
    require_once '../header.php';
    ?>
    <main class="container-fluid p-0">
        <h1 align=center>Add Country</h1>
    <div class="addPilotWraper container border rounded">
        <?php
           require_once('../controller/addCountrysForm.php');
        ?>
    </div>
    </main>
    <?PHP 
require_once('..\controller\footer.php');
?>

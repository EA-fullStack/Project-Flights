<?php
$title = "Add Pilot";
require_once('..\controller\head.php');
require_once('..\model\flight-model.php');
require_once '..\bl.php';

?>
<body>
    <?php
    require_once '../header.php';
    ?>
    <main class="container-fluid text-center my-4">
    
        <h1 class="mb-5"><u>Add Pilot</u></h1>

        <form>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="First name">
                </div>
            </div>
            <div class="form-group">
                <h2 for="exampleFormControlFile1">Select pilot's picture</h2>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>

    </main>
    <?PHP 
require_once('..\controller\footer.php');
?>

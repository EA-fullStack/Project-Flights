<form method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Airport Name</label>
    <input name='Aname' type="text" class="form-control" id="formGroupExampleInput" placeholder="Airport Name">
  </div>
  <div class="form-group">
    <label>Country ID</label>
    <!-- <input name='Aid' type="text" class="form-control" id="formGroupExampleInput" placeholder="Country ID"> -->
    <select class='col-md-9' name="countryId" id="">
        <?php
        $allCountrys = $bl->getCountry();
        foreach ($allCountrys as $key => $value) {
            echo $value['id'];
        ?>
        <option value="<?php echo $value['id']; ?>">
        <?php echo $value['name']; ?>
        </option>
        <?php
        }
        ?>

    </select>
  </div>

    <div class="buttonWraper">
        <button name='addAP' class='btn-success px-5 py-1 m-4 rounded'>Add</button>
    </div>
</form>

<?php
if(isset($_POST['addAP'])){
        $validation = new ValidateContent();
        $content[] = $_POST['Aname'];
        $content[] = $_POST['countryId'];
        if($validation->validateInput($content)){
            $airPort = new AirportModel($content);
            $bl->insertAirPort($airPort);
    }

}

?>
<form method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">Country Name</label>
    <input name='countryName' type="text" class="form-control" id="formGroupExampleInput" placeholder="Country name">
  </div>
    <div class="buttonWraper">
        <button name='addC' class='btn-success px-5 py-1 m-4 rounded'>Add</button>
    </div>
</form>

<?php
if(isset($_POST['addC'])){
        $validation = new ValidateContent();
        $content[] = $_POST['countryName'];
        if($validation->validateInput($content)){
            $country = new CountryModel($content);
            $bl->insertCountry($country);
    }

}

?>
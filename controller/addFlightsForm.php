<form method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput">No</label>
    <input name='Fno' type="text" class="form-control" id="formGroupExampleInput" placeholder="Flight No">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Flight Date</label>
    <input name='FdateTime' type="date" class="form-control" id="formGroupExampleInput" placeholder="Date/Time">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">From Airport</label>
    <select class=col-md-12 name="Ffrom" id="">
    <?php 
    $airports = $bl->getAirport();
    foreach ($airports as $key => $value) {
    ?>
      <option value="<?php echo $value['id'] ?>">
        <?php echo $value['name'] ?>
        
      </option>
    <?php } ?>
    </select>  
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">To Airport</label>
    <select class=col-md-12 name="Fto" id="">
    <?php 
    $airports = $bl->getAirport();
    foreach ($airports as $key => $value) {
    ?>
      <option value="<?php echo $value['id'] ?>">
        <?php echo $value['name'] ?>
        
      </option>
    <?php } ?>
    </select>  
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Pilot id\Level</label>
    <select class=col-md-12 name="Pid" id="">
    <?php 
    $pilots = $bl->getPilot();
    foreach ($pilots as $key => $value) {
    ?>
      <option value="<?php echo $value['id'] ?>">
        <?php echo $value['name']. " Level: " .$value['level'] ?>
        
      </option>
    <?php } ?>
    </select>    
  </div>
    <div class="buttonWraper">
        <button name='addPilot' class='btn-success px-5 py-1 m-4 rounded'>Add</button>
    </div>
</form>

<?php
if(isset($_POST['addPilot'])){
  require_once '../model/flight-model.php';
  $validation = new ValidateContent();
  $content[] = $_POST['Fno'];
  $content[] = $_POST['FdateTime'];
  $content[] = $_POST['Ffrom'];
  $content[] = $_POST['Fto'];
  $content[] = $_POST['Pid'];
  if($validation->validateInput($content)){
    $flight = new FlightModel($content);
    $bl->insertFlight($flight);
  }
}

?>
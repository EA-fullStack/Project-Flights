<?php
    require_once 'dal.php';
    require_once 'model/flight-model.php';
    require_once 'model/pilot-model.php';
    require_once 'model/airport-model.php';
    require_once 'model/country-model.php';

class BusinessLogic {
    private $dal;

    function __construct() {
        $this->dal = new DataAccessLayer;
    }

    function getAirport() {
        $q = 'SELECT * FROM `airport`';
        $results = $this->dal->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push( $resultsArray, $row);
        }
        return $resultsArray;
    }

    function getCountry() {
        $q = 'SELECT * FROM `country`';
        $results = $this->dal->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push( $resultsArray, $row);
        }
        return $resultsArray;
    }

    function getFlight() {
        $q = 'SELECT * FROM `flight`';
        $results = $this->dal->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push( $resultsArray, $row);
        }
        return $resultsArray;
    }

    function getPilot() {
        $q = 'SELECT `id`, `name`, `level`, `picture_src` FROM `pilot`;';
        $results = $this->dal->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push( $resultsArray, $row);
        }
        return $resultsArray;
    }
    
    
        function insertCountry($country){
            $countryName = $country->getCountryName();
            $table = "country";
            $column = "name";
            if($this->checkExisting($column, $table, $countryName)){
                $q = "INSERT INTO $table(`name`) VALUES ('$countryName');";
                $this->dal->insert($q);
            }else{
                echo "Country Exists";
            }
        }


        function checkExisting($item, $table, $str){
        $q = "SELECT `$item` FROM `$table` WHERE `$item` = '$str' ";
        $results = $this->dal->select($q);
        $row = $results->fetch();
        if(is_array($row))
            return false;
        return true;
        }

        
        function insertAirPort($Aport){
            $country_id =  $Aport->getAirportContryId();
            $airportName = $Aport->getAirportName();
            $table = "airport";
            $column = "name";
            if($this->checkExisting($column, $table, $airportName)){
                $q = "INSERT INTO $table(`name`,`country_id`) VALUES ('$airportName', '$country_id');";
                $this->dal->insert($q);
            }else{
                echo "Airport Exists";
            }
            
        }


        function insertFlight($flight){
            $flightId =  $flight->getFlightNo();
            $table = "flight";
            $column = "no";
            $flightsArr = $flight->getFlight(); 
            $fNumber = $flight->getFlightNo();
            $fDate = $flight->getFlightDate();
            $fFrom =  $flight->getFlightFrom();
            $fTo = $flight->getFlightTo();
            $fPilot = $flight->getFlightPilotId();
            if($this->checkExisting($column, $table, $flightId)){
                $q = "INSERT INTO `$table`(`no`, `flight_datetime`, `flight_from`, `flight_to`, `pilot_id`)
                VALUES ('$fNumber', '$fDate', '$fFrom', '$fTo', '$fPilot')";
                $this->dal->insert($q);
            }else{
                echo "flight Exists";
            }
        }

        function getCompiledFlights(){
            $flightsArr = [];
            $flightsArr = $this->getFlight(); 
            $temp = "";
            // print_r($flightsArr);
            for ($i=0; $i < count($flightsArr); $i++) { 
                $temp .= "<tr>";
                $temp .= "<td>" . $flightsArr[$i]['no'] . "</td>";
                $temp .= "<td>" . $flightsArr[$i]['flight_datetime'] . "</td>";
                $temp .=  "<td>" . $this->flightFromFkJoin($flightsArr[$i]['flight_from']);
                $temp .=  "<td>" . $this->flightToFkJoin($flightsArr[$i]['flight_to']);
                $temp .=  "<td>" . $this->flightPilotFkJoin($flightsArr[$i]['pilot_id']);
                for ($j=0; $j < 1; $j++) { 
                $temp .= "</tr>";
                }
            }
            return $temp;
        }

    

        function flightPilotFkJoin($index){
            $query = "SELECT 
            pilot.id, pilot.name, flight.pilot_id
        FROM 
            pilot
        INNER JOIN 
            flight 
        ON
            pilot.id=flight.pilot_id
            WHERE pilot.id =flight.pilot_id = $index; 
        ";
        $result = $this->dal->fkJoin($query);
        $pilot = $result->fetch();
        return $pilot['name'];
        } 



        function flightFromFkJoin($index){
            $query = "SELECT 
            airport.id, airport.name, flight.flight_from
        FROM 
            airport
        INNER JOIN 
            flight 
        ON
            airport.id = flight.flight_from
            WHERE airport.id =  $index;";
        $result = $this->dal->fkJoin($query);
        $results = $result->fetch();
        return $results['name'];
        } 


        function flightToFkJoin($index){
            $query = "SELECT 
            airport.id, airport.name, flight.flight_to
        FROM 
            airport
        INNER JOIN 
            flight 
        ON
            airport.id = flight.flight_to
            WHERE airport.id =  $index;";
        $result = $this->dal->fkJoin($query);
        $results = $result->fetch();
        return $results['name'];
        } 

        

/* SELECT 
    pilot.id, pilot.name, flight.pilot_id
FROM 
    pilot
INNER JOIN 
    flight 
ON
    pilot.id=flight.pilot_id
    WHERE pilot.id =flight.pilot_id; 
 */
        

}
$bl = new BusinessLogic();

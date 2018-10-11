<?php

class AirportModel
{
    private $name;
    private $contry_id;
    
    function __construct($arr) {
        $this->name = $arr[0];
        $this->contry_id = $arr[1];
    }
    
    function getAirportId() {
        return $this->id;
    }
    function getAirportName() {
        return $this->name;
    }
    function getAirportContryId() {
        return $this->contry_id;
    }

    
}

?>
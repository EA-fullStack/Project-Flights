<?php

class AirportModel
{
    private $id;
    private $name;
    private $contry_id;
    
    function __constructor($arr) {
        $this->id = $arr['id'];
        $this->name = $arr['name'];
        $this->contry_id = $arr['contry_id'];
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
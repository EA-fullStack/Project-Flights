<?php

class FlightModel
{
    private $no;
    private $flight_datetime;
    private $flight_from;
    private $flight_to;
    private $pilot_id;
    
    
    public function __construct($arr) {
        $this->no = $arr[0];
        $this->flight_datetime = $arr[1];
        $this->flight_from = $arr[2];
        $this->flight_to = $arr[3];
        $this->pilot_id = $arr[4];
    }

    function getFlightId() {
        return $this->id;
    }
    function getFlightNo() {
        return $this->no;
    }
    function getFlightDate() {
        return $this->flight_datetime;
    }
    function getFlightFrom() {
        return $this->flight_from;
    }
    function getFlightTo() {
        return $this->flight_to;
    }
    function getFlightPilotId() {
        return $this->pilot_id;
    }
    function getFlight(){
    
        $flightsArr = [];
        $flightsArr[] = $this->no;
        $flightsArr[] = $this->flight_datetime;
        $flightsArr[] = $this->flight_from;
        $flightsArr[] = $this->flight_to;
        $flightsArr[] = $this->pilot_id;
        return $flightsArr;
        
        
    }
}

?>
<?php

class FlightModel
{
    private $id;
    private $no;
    private $flight_datetime;
    private $flight_from;
    private $flight_to;
    private $pilot_id;
    
    
    function __constructor($arr) {
        $this->id = $arr['id'];
        $this->no = $arr['no'];
        $this->flight_datetime = $arr['flight_datetime'];
        $this->flight_from = $arr['flight_from'];
        $this->flight_to = $arr['flight_to'];
        $this->pilot_id = $arr['pilot_id'];
    }

    function getFlightId() {
        return $this->id;
    }
    function getFlightNo() {
        return $this->no;
    }
    function getFlightFlightDatetime() {
        return $this->flight_datetime;
    }
    function getFlightFlightFrom() {
        return $this->flight_from;
    }
    function getFlightFlightTo() {
        return $this->flight_to;
    }
    function getFlightPilotId() {
        return $this->pilot_id;
    }
}

?>
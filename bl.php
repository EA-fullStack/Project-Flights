<?php
    require_once './dal.php';
    require_once './flight-model.php';
    require_once './pilot-model.php';
    require_once './airport-model.php';
    require_once './country-model.php';

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
            array_push( $resultsArray, new AirportModel($row));
        }
        return $resultsArray;
    }

    function getCountry() {
        $q = 'SELECT * FROM `country`';
        $results = $this->dal->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push( $resultsArray, new CountryModel($row));
        }
        return $resultsArray;
    }

    function getFlight() {
        $q = 'SELECT * FROM `flight`';
        $results = $this->dal->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push( $resultsArray, new FlightModel($row));
        }
        return $resultsArray;
    }

    function getPilot() {
        $q = 'SELECT * FROM `pilot`';
        $results = $this->dal->select($q);
        $resultsArray = [];

        while ($row = $results->fetch()) {
            array_push( $resultsArray, new PilotModel($row));
        }
        return $resultsArray;
    }
}
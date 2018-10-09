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

}
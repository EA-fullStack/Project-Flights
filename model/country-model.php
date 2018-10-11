<?php

class CountryModel
{
    private $id;
    private $name;
    
    function __construct($arr) {
        $this->id = $arr[0];
        $this->name = $arr[0];
    }

    function getCountryId() {
        return $this->id;
    }
    function getCountryName() {
        return $this->name;
    }
}

?>
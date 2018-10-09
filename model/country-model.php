<?php

class CountryModel
{
    private $id;
    private $name;
    
    function __constructor($arr) {
        $this->id = $arr['id'];
        $this->name = $arr['name'];
    }

    function getCountryId() {
        return $this->id;
    }
    function getCountryName() {
        return $this->name;
    }
}

?>
<?php

class PilotModel
{
    private $id;
    private $name;
    private $level;
    private $picture_src;
    
    function __construct($arr) {
        $this->id = $arr['id'];
        $this->name = $arr['name'];
        $this->level = $arr['level'];
        $this->picture_src = $arr['picture_src'];
    }

    function getPilotId() {
        return $this->id;
    }
    function getPilotName() {
        return $this->name;
    }
    function getPilotLevel() {
        return $this->level;
    }
    function getPilotPictureSrc() {
        return $this->picture_src;
    }
}

?>
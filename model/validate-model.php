<?php

class ValidateContent {



    function validateInput($content){
        if($this->emptyCheck($content) === false){
            echo "You need to fill all the inputs";
            return;
        }
        return true;

    
        
    }


    function emptyCheck($content){
    
        for ($i=0; $i < count($content); $i++) { 
            if($content[$i] === ''){
                return false;
            }
            return true;
        }
    }
}


?>
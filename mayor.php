<?php
    define("EDAD_ADULTO",18);
    
    $edad = 17;
    if($edad>=EDAD_ADULTO){
        echo "eres mayor de edad";
    }else{
        echo "eres un infante necesitas " . (EDAD_ADULTO - $edad) . " a&ntilde;os ";
    }
    
?>
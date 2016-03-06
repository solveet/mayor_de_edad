<?php

function rombo($lados = 10){
   $numerocalculador = ($lados * 2) - 1;
   $numerofactor = -1;
   for($iy = 0; $iy<$lados; $iy++){
        $contadoro = 0;
        for($ix=0; $ix < $numerocalculador; $ix++){
            if($iy==0){
                if($ix == (($numerocalculador-1)/2)){
                    echo "o";
                    $numerofactor = $iy+1;
                }else{
                    echo "&nbsp;&nbsp;";
                }   
            }else{
                $numerocalculador1_ = ($numerocalculador - $numerofactor)/2;
                if( ( ($ix + 1) > $numerocalculador1_) && ($contadoro<$numerofactor) ){
                    echo "o";
                    $contadoro++;
                }else{
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        $numerofactor = $numerofactor + 2;
        $contadoro = 0;
        echo "<br>";
   } 
   
   $numerofactor = $numerocalculador - 2;
   for($iy = 0; $iy<($lados-1); $iy++){
       
       for($ix=0; $ix < $numerocalculador; $ix++){
            $numerocalculador1_ = ($numerocalculador - $numerofactor)/2;
            if( ( ($ix + 1) > $numerocalculador1_) && ($contadoro<$numerofactor) ){
                echo "o";
                $contadoro++;
            }else{
                echo "&nbsp;&nbsp;";
            }
       }
       echo "<br>";
       $numerofactor = $numerofactor - 2;
       $contadoro = 0;
   }

}

rombo();

?>

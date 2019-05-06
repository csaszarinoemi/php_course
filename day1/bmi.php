<?php 

$massInKg = 81.2;
$heightInM = 1.78;

function bmiCalulator($mass, $height){
 return $mass/($height*2);
}

bmiCalulator($massInKg, $height)
?>
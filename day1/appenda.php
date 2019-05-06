<?php 

function appenda($stringList){
  for ($i=0; $i < count($stringList) ; $i++) { 
    $stringList[$i].='a';
  }
  print_r($stringList);
}

$animals = ['koal', 'pand', 'zebr'];
appenda($animals);
?>
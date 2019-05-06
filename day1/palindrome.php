<?php 

function createPalindrome($input){
  echo $input.strrev($input);
}

createPalindrome('1234');
?>
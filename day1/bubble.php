<?php 

//  Create a function that takes a list of numbers as parameter
    //  Returns a list where the elements are sorted in ascending numerical order
    //  Make a second boolean parameter, if it's `true` sort that list descending
    //  Example:
   // System.out.println(bubble(new int[] {34, 12, 24, 9, 5}));
    //  should print [5, 9, 12, 24, 34]
// System.out.println(advancedBubble(new int[] {34, 12, 24, 9, 5}, true));
 //should print [34, 24, 12, 9, 5]


// solution 1
function bubble($inputList, $boolean=false){
  if($boolean){
    rsort($inputList);
    print_r($inputList);
  } else {
     sort($inputList);
    print_r($inputList);
  }
}

$myList = [3,7,2,11,44,1];
bubble($myList, true);


?>
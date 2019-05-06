<?php
// Write a program that stores a number, and the user has to figure it out.
// The user can input guesses, after each guess the program would tell one
// of the following:
//
// The stored number is higher
// The stried number is lower
// You found the number: 8
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php 
$numToGuess = 23;
if(isset($_POST['guess_num'])){
  if($_POST['guess_num'] < $numToGuess){
  echo 'The stored number is higher';
  } else if ($_POST['guess_num'] > $numToGuess){
  echo 'The stored number is lower';
  } else {
  echo "You found the number: {$numToGuess}";
  } 
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label for="guess_num">Guess the Number</label>
  <input type="text" name="guess_num">
  <input type= "submit" value= "GO">
</form>

<?php
} else {
  ?> 
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <label for="guess_num">Guess the Number</label>
  <input type="text" name="guess_num">
  <input type= "submit" value= "GO">
</form>
<?php
}
?>


</body>
</html>



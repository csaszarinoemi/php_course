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

function legCounter($chickenNum, $pigNum){
  return ($chickenNum*2 + $pigNum*4);
}

   // Write a program that asks for two integers
    // The first represents the number of chickens the farmer has
    // The second represents the number of pigs owned by the farmer
    // It should print how many legs all the animals have

  if(isset($_POST['chicken']) && isset($_POST['pig'])){
        if(filter_var($_POST['chicken'], FILTER_VALIDATE_INT) && filter_var($_POST['pig'], FILTER_VALIDATE_INT)){
          echo "They have ".legCounter($_POST['chicken'], $_POST['pig']). " legs altogether. <br>"; ?>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" > 
          <button type="submit" name="button">Go back</button>
          </form>
          <?php
        }else {
          echo 'Please give me a number!';
          ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" > 
      <label for="chicken">Number of chickens you have</label>
      <input type= "text" name="chicken">
      <br>
      <label for="pig">Number of pigs you have</label>
      <input type= "text" name="pig">
      <br>
      <button type= "submit" name="submit">Count It!</button>
      </form>

<?php
        } ?>
<!--<a href= "animalsAndLegs.php">Go Back</a>-->
<?php
  } else { ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" > 
    <label for="chicken">Number of chickens you have</label>
    <input type= "text" name="chicken">
    <br>
    <label for="pig">Number of pigs you have</label>
    <input type= "text" name="pig">
    <br>
    <button type= "submit" name="submit">Count It!</button>
  </form>

<?php
  }
?>
</body>
</html>

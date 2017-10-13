<!DOCTYPE HTML>  
<html>
<head>
  <tittle> Calculator</tittle>
<style>

 @import url("styles.css");
</style>
</head>
<body>  
<h1>Calculator</h1>
<h2>Please fill out the form to calculate summary for 3 numbers. </h2>

<?php
// define variables and set to empty values
$nameErr = $num1Err = $math1Err = $math2Err = $num2Err= $num3Err ="";
$name = $num1 = $math1 = $math2 = $num2= $num3 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "";
  } else {
    $name = $_POST["name"];
  }
  
  if (empty($_POST["num1"])) {
    $num1Err = "Number #1 is required";
  } else {
    $num1 = $_POST["num1"];
  }
    
  if (empty($_POST["num2"])) {
    $num2Err = "Number #2 is required";
  } else {
    $num2 = $_POST["num2"];
  }

  if (empty($_POST["num3"])) {
    $num3Err = "Number #3 is required";
  } else {
    $num3 = $_POST["num3"];
  }

  if (empty($_POST["math1"])) {
    $math1Err = "Mathematical Symbol is required";
  } else {
    $math1 = $_POST["math1"];
  }


 if (empty($_POST["math2"])) {
    $math2Err = "Mathematical Symbol is required";
  } else {
    $math2 = $_POST["math2"];
  }
}


?>


<p><span class="error">* required field.</span></p>
<form method="post">  
  Name: <input class="a" type="text" name="name">
  <span class="error"> <?php echo $nameErr;?></span>
  <br><br>
  Number 1: <input type="text" name="num1">
  <span class="error">* <?php echo $num1Err;?></span>
  <br><br>
  
  Math Symbol: <select name="math1" style="color:black; font-size:1.0em">
  
     
                <option value=""> -Select One </option>
                <option value="-" > Subtract</option>
                <option value="*" > Multiply </option>
                <option value="+" > Add </option>
  </select>
  <span class="error"> *<?php echo $math1Err;?></span>
  </br></br>
  
  Number 2: <input type="text" name="num2">
  <span class="error">*<?php echo $num2Err;?></span>
  <br><br>
 
  Math Symbol:
  <input type="radio" name="math2" value="+">Add
  <input type="radio" name="math2" value="-">Subtract
  <input type="radio" name="math2" value="*">Multiply
  <span class="error">* <?php echo $math2Err;?></span>
  <br><br>
  
  Number 3: <input type="text" name="num3">
  <span class="error">*<?php echo $num3Err;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php


if ($math1=='+'){
  $result1 = ($num1 + $num2);
  
}
if ($math1=='-'){
  $result1 = ($num1 - $num2);
  
}

if ($math1=='*'){
  $result1 = ($num1 * $num2);
  
}

if (($math2=='+')&& ($num1!="")&&($num2!="")&&($num3!="")){
  $result2 = ($result1 + $num3);
   echo "<h1 class='result'>". 'Hello ' . $name. '!'.  "</br>";
   echo  "Result: (".$num1 . " ". $math1 . " " . $num2 . ") ". $math2 . " ". $num3 . " = ".$result2 . "</h1>";
   
}

if (($math2=='-')&& ($num1!="")&&($num2!="")&($num3!="")){
  $result2 = ($result1 - $num3);
  echo "<h1 class='result'>". 'Hello '. $name. '!'.  "</br>";
  echo  "Result: (".$num1 . " ". $math1 . " " . $num2 . ") ". $math2 . " ". $num3 . " = ".$result2 . "</h1>";
  
  
}

if (($math2=='*')&& ($num1!="")&&($num2!="")&($num3!="")){
  $result2 = ($result1 * $num3);
  echo "<h1 class='result'>". 'Hello '. $name. '!'.  "</br>";
  echo  " Result: (".$num1 . " ". $math1 . " " . $num2 . ") ". $math2 . " ". $num3 . " = ".$result2 . "</h1>";
  
  
}



?>

</body>
</html>
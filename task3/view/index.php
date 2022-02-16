<?php require"../control/result.php"?>

<html>
<head>
</head>
<Body>
<h1><?php echo "Registration form "?></h1>
<form action="" method="post">
  <label for="uname">First name:</label>
  <input type="text" name="uname">
  <?php 
  echo $namerr;
  ?>
<br>
 
  
   <label for="age">Age:</label>
  <input type="text" id="age" name="age">
   <?php 
  echo $agerr;
  ?>
<br>
    <label for="pass">password:</label>
  <input type="text"  name="pass"><?php 
  echo $rpass;
  ?>
  

<br>

  <input type="radio" name="radio" value="jprogrammer">
  <label for="jprogrammer">Junior programmer</label>
  <input type="radio" name="radio" value="sprogrammer">
  <label for="sprogrammer">Sensior programmer</label>
  <input type="radio"  name="radio" value="projectlead">
  <label for="projectlead">Project Lead</label><?php 
  echo $rradio;
  ?><br>
 check box
  <input type="checkbox"  name="box1" value="box1"> Box 1
   <input type="checkbox"  name="box2" value="box2"> Box 2
    <?php 
  echo $chekmessage.$checkbox1.$checkbox2;
  ?><br>
 <label for="file">file choose</label>
  <input type="file" id="file" name="file" value="file"><br>
 
<input type="submit" name="Submit">
<input type="Reset" value="Reset">
</form>
</Body>

</html>
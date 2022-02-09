<?php
$uname=$pass="";
if(isset($_POST["Submit"])){
  $uname=$_REQUEST["uname"];
  if(empty($uname)){
  echo "please enter a valid name";
}else{
  echo "your name is".$uname;
}
echo"<br>";
$pass=$_REQUEST["pass"];
if(strlen($pass)<6){
  echo "please enter a valid pass and this field is required";
}else{
  echo "your password is valid";
}
echo"<br>";
if(isset($_POST["radio"])){
    echo "you have selected".$_POST["radio"];
}else{
  echo "you have not selected anything";
}
}
?>
<html>
<head>
</head>
<Body>
<h1><?php echo "I am php"?></h1>
<form action="" method="post">
  <label for="uname">First name:</label>
  <input type="text" name="uname"><br>
  
 
  
   <label for="age">Age:</label>
  <input type="text" id="age" name="age"><br>
    <label for="pass">password:</label>
  <input type="text"  name="pass"><br>

  <input type="radio" name="radio" value="jprogrammer">
  <label for="jprogrammer">Junior programmer</label>
  <input type="radio" name="radio" value="sprogrammer">
  <label for="sprogrammer">Sensior programmer</label>
  <input type="radio"  name="radio" value="projectlead">
  <label for="projectlead">Project Lead</label>
 <label for="file">file choose</label>
  <input type="file" id="file" name="file" value="file"><br>
 
<input type="submit" name="Submit">
<input type="Reset" value="Reset">
</form>
</Body>

</html>
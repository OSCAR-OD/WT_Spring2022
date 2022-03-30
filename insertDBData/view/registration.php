<?php
include("../control/registrationcheck.php");
?>
<html>
    <body>
  <form action="" method="post" enctype="multipart/form-data">
       
   <label for="fname">First name:</label>
     <input type="text" name="fname">
     <?php 
     //comes from registrationcheck if there is an err
         echo $fnamerr;
       ?>
      <br>
    <label for="lname">Last name:</label>
    <input type="text" name="lname">
     <?php 
   echo $lnamerr;
  ?>
  <br>
  
 <label for="age">Age:</label>
  <input type="number" name="age">
    <?php 
   echo $ageerr;
    ?>
 <br>
    <label for="pass">password:</label>
   <input type="password"  name="pass"><?php 
   echo $passerr;
   ?>
  

<br>
<label for="position" >position :
    </label>
  <input type="radio" name="position" value="jprogrammer">
  <label for="jprogrammer">Junior programmer</label>
  <input type="radio" name="position" value="sprogrammer">
  <label for="sprogrammer">Sensior programmer</label>
  <input type="radio"  name="position" value="projectlead">
  <label for="projectlead">Project Lead</label><?php 
  echo $radioerr;
  ?><br>

      Salary:
            <input type="salary" name="salary">
           <?php 
   echo $salaryerr;
   ?> 
 <label for="filename">file choose</label>
  <input type="file" id="filename" name="filename" ><br>
      <?php 
   echo  $filenameerr;
   ?>

<input type="submit" name="Submit">
<input type="Reset" value="Reset">
</form>
</Body>

</html>

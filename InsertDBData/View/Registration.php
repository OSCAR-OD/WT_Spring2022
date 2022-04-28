<?php require "../Control/RegCheck1.php" ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
</head>
<body>
<div class="reg-card">
	<h3>Registration form </h3><hr>
 
<form action="" method="post" onsubmit="return validateForm()">

 <table border="0" width="700px" align="center"  cellspacing="2" cellpadding="2" >
<tr height="10px" >
   <td>
   <label for="firstname" >First Name :</label><input type="text" name="firstname" id="fname">&nbsp;&nbsp; <br><br>
   </td></tr> 
   <tr height="10px" ><td>
   <p id="errfname"></p>
<?php 
  echo $firstnameErr;
  ?></td></tr>  
 <tr height="10px" >
   <td><label for="lastname" >Last Name :</label> <input type="text" name="lastname" id="lname"><br><br>
   </td></tr> 
   <tr height="10px" ><td>
   <p id="errlname"></p>
   <?php
  echo $lastnameErr;
   ?></td></tr>
  <tr height="10px">
     <td><label for="age" >Age :</label>&nbsp;&nbsp; <input type="number" name="age" id="age"><br><br>
     </td></tr> 
   <tr height="10px" ><td>
      <p id="errage"></p>
   <?php
  echo $ageErr;
   ?></td></tr>
  <tr height="10px">
    <td><label for="gender" >Gender :
    </label>&nbsp;&nbsp;
            <input type="radio" value="Male" name="gender">Male
            <input type="radio" value="Female" name="gender">Female
            <input type="radio" value="Others" name="gender">Others<br><br>
   <?php
  echo $genderErr;
   ?></td></tr>
  <tr height="10px">
     <td><label for="contNo" >contact No :</label> <input type="number" name="contNo" id="contno"><br><br>
     </td></tr> 
   <tr height="10px" ><td>
     <p id="errcontno"></p>
  <?php
  echo $contNoErr;
   ?></td></tr>
   <tr>
  <td> <label for="designation">Designation:</label> </td>
   <td>
<label for="juniorprogrammer">Junior Programmer</label>
    <input type="radio" id="juniorprogrammar" name="designation" value="Junior Programmer">
  <label for="seniorprogrammer">Senior Programmer</label>
  <input type="radio" id="seniorprogrammar" name="designation" value="Senior Programmer">
  <label for="projectmanager">Project Manager</label>    
  <input type="radio" id="projectmanager" name="designation" value="Project Manager">
  <?php
   echo $desegnationerr;
   ?></td>
  </tr>
   <tr>
     <td>
     Preferred Language 
   <td><input type="checkbox" id="java" name="Java" value="Java" >
         <label for="java">Java</label>
     <input type="checkbox" id="php" name="PHP" value="PHP" >
        <label for="php">PHP</label>
     <input type="checkbox" id="c++" name="C++" value="C++" >
             <label for="c++">C++</label>
             <?php
         echo $langerr.$lang1.$lang2.$lang3;
          ?></td>
   </tr>
   <tr height="10px">
     <td><label for="email" >Email :</label> <input type="email" name="email" id="email"><br><br>
     </td></tr> 
   <tr height="10px" ><td>
     <p id="erremail"></p>
   <?php
  echo $emailErr;
   ?></td></tr>
  <tr><td><label for="pass">password :</label>&nbsp;&nbsp;&nbsp;<input type="password" name="pass" id="pass" placeholder="Password"><br>
  </td></tr> 
   <tr height="10px" ><td>
  <p id="errpass"></p>
    <?php 
  echo $passErr; ?></font></td> </tr>
    <tr height="10px">
     <td><label for="confpass" >Confirm password :</label> <input type="password" name="confpass" id="confpass" ><br><br>
     </td></tr> 
   <tr height="10px" ><td>
     <p id="errconfpass"></p>
   <?php
  echo $confpassErr;
   ?></td></tr> 
  <tr height="10px">
  <td>&nbsp;&nbsp;&nbsp;<input type="submit" name="Submit" class="button submitbutton">&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" class="button resetbutton"><br></td>
</tr>
        <tr height="10px">   
        <td><a href="login.php">Login</a>
            </td>
        </tr>
</table>

</form>
  
    </div>
<script src="../public/js/RegValid.js">
</script>
</body>

</html>

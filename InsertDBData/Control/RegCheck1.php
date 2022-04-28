<?php
include ("../model/RegModel.php");
$fname=$lname=$age=$gen=$contNo=$designation=$lang=$lang1=$lang2=$lang3=$email==$pass=$confpass="";
$firstnameErr=$lastnameErr=$ageErr=$genderErr=$contNoErr=$desegnationerr=$langerr=$emailErr=$sidErr=$passErr=$confpassErr="";
$flag=0;
$filled=FALSE;

  if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["Submit"]))){
	//check data from registration forms fields.
  //if any field is empty or less then show error

    if(empty($_POST["firstname"]) || (strlen($_POST["firstname"])<3))
    {
        $firstnameErr="* required! First Name must be grater then 4 char";
    }else
    {
      $fname = $_POST["firstname"];
      $_SESSION["firstname"] = $fname;
      $flag++;
    }
    echo "<br>";
 if(empty($_POST["lastname"]) || (strlen($_POST["lastname"])<3))
    {
        $lastnameErr="* Last Name must be grater than 4 char ";
    }
    else
    { 
      $lname=$_POST["lastname"];
       $_SESSION["lastname"] = $lname;
        $flag++;
    }
    echo "<br>";
     if(empty($_POST["age"]) || (($_POST["age"])<10))
    {
        $ageErr="* Age must be grater than 10";
    }
    else
    {
           $age=$_POST["age"];
          $_SESSION["age"] =  $age;
          $flag++;
    }
    echo "<br>";
   if(isset($_POST["gender"]))
    {
        $gen = $_POST['gender'];
        $_SESSION["gender"] = $gen;
        $flag++;
    }
    else
    { 
        $genderErr= "* Your have not selected any Gender";
 
    }
    echo "<br>";
     
         if(empty($_POST["contNo"]) || (strlen($_POST["contNo"])!=11))
    {
        $contNoErr="* Enter valid contNo Number ";
    }
    else
    {
         $contNo=$_POST["contNo"];
        $_SESSION["contNo"] = $_POST['contNo'];
        $flag++;
    }
    echo "<br>";
 if(isset($_POST["designation"])){
            $designation=$_POST["designation"];
            $designationerr="-> you have selected ".$designation;
            $flag++;
        }
        else{
            $designationerr="->you have not selected any designation";
        }
           echo "<br>";

   if(isset($_POST["PHP"]) || isset($_POST["Java"]) || isset($_POST["C++"])){
       
        $langerr="->you have selected ";
        if(isset($_POST["PHP"])){
          $lang1=$_POST["PHP"].",";
          
        }
        if(isset($_POST["Java"])){
            $lang2=$_POST["Java"].",";
          }
        if(isset($_POST["C++"])){
            $lang3=$_POST["C++"];
          }
          $lang=$lang1.$lang2.$lang3;
          $flag++;
    }
    else{
        $langerr="->you have not selected any preferred language";
    }
     echo "<br>";
    if(empty($_POST["email"]) || ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"]))
    {
        $emailErr="* Enter valid Email Address ";
    }
    else
    {
        $email= $_POST['email'];
      $_SESSION["email"] = $_POST['email'];
        $flag++;
    }

    echo "<br>";
    if(empty($_POST["pass"]) ||(strlen($_POST["pass"])<5))
    {
        $passErr = "* please enter a valid password and this field is required";
  }
    else
    {   
         $pass=$_POST["pass"];
             $_SESSION["pass"] = $_POST['pass'];
         $flag++;
    }
      echo"<br>";
      if(empty($_POST["confpass"]) ||(strlen($_POST["confpass"])<5))
    {
        $confpassErr = "* please enter a valid password and this field is required";
  }
    else
    {   
         $confpass=$_POST["confpass"];
             $_SESSION["confpass"] = $_POST['confpass'];
         $flag++;
    }
      echo"<br>";
      if($filled===FALSE){  

               $filled=TRUE;
                //$flag++;
              }

  if($filled===TRUE &&  $flag==10){
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->Registration($fname,$lname,$age,$gen,$contNo,$designation,$lang,$email,$pass,"mytable",$conobj);
    $mydb->closecon($conobj);                                               
  }
}
    
?>

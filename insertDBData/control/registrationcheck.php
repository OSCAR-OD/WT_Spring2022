<?php
include("../model/model.php");
//to check the input field values from views
$fname=$lname=$age=$pass=$position=$devtype=$salary="";
$fnamerr=$lnamerr=$ageerr=$chekmessage=$checkbox1=$checkbox2=$passerr=$radioerr=$salaryerr=$filenameerr="";
      $flag=0;
if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["Submit"]))){
 
   if(empty($_POST["fname"]) || (strlen($_POST["fname"])<3)){
  $fnamerr="please enter a valid first name";
  }else{
 
   $fname = $_POST["fname"];
    $flag++;
}
echo"<br>";

 if(empty($_POST["lname"]) || (strlen($_POST["lname"])<3)){
$lnamerr="please enter a valid last name";
}else{
 // $namer="your name is ".$namer;
   $lname = $_POST["lname"];
    $flag++;
}
echo"<br>";

     if(empty($_POST["age"]) || (($_POST["age"])<10))
    {
        $ageerr="* Age must be grater than 10";
    }
    else
    {
           $age=$_POST["age"];
          $flag++;
    }
    echo "<br>";

     if(empty($_POST["pass"]) ||(strlen($_POST["pass"])<5))
    {
        $passerr = "* please enter a valid password and this field is required";
  }
    else
    {   
         $pass=$_POST["pass"];
         $flag++;
    }
      echo"<br>";

if(isset($_POST["position"])){
  $position= $_POST["position"];
  $flag++;
}else{
  $radioerr= "you have not selected anything";
}
echo"<br>";

if(isset($_FILES["filename"]["tmp_name"])){
  $flag++;

}else{
 $filenameerr= "you have not selected any file";
}
echo"<br>";

       if( $flag==6){
        $target_dir = "../files/";
        $fileName = basename($_FILES["filename"]["name"]);
        $fileTarget = $target_dir.$fileName;  
        $tempFileName = $_FILES["filename"]["tmp_name"];
   
    $result = move_uploaded_file($tempFileName,$fileTarget);
    
		/*
		*	If file was successfully uploaded in the destination folder
		*/
		if($result) { 
			echo "Your file <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";	
			$mydb=new DB();
            $connobj=$mydb->opencon();
            
 $mydb->InsertData($fname,$lname,$age,$pass,$position,$salary,$fileName,"mytable",$connobj);
             $mydb->closecon($connobj);	
     	}
		else {			
			echo "Sorry !!! There was an error in uploading your file";			
		}
		
	}
	/*
	* 	If file is already present in the destination folder
	*/
	else {
		echo "*err!!!Please fill out everything perfectly!";
	}
}
	?>	
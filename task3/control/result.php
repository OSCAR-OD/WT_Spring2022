<?php
$uname=$pass=$age="";
$namerr=$agerr=$chekmessage=$checkbox1=$checkbox2=$rpass=$rradio="";
//pname is for saving the data in the jason
//$pname=$page=$pchekmessage=$pcheckbox1=$pcheckbox2=$prpass=$prradio="";
if(isset($_POST["Submit"])){
  $uname=$_REQUEST["uname"];
  if(empty($uname)||strlen($uname)<5){
  $namerr="please enter a valid name";

 // $namerr="please enter a valid name";
}else{
	//for shwing the data as jason
 // $namer="your name is ".$namer;
  $namerr=$uname;

}
echo"<br>";
 if(empty($age)){
  $agerr="please enter a valid age";
}else{
// $agerr="your age is ".$age;
 $agerr=$age;

}
echo"<br>";
$pass=$_REQUEST["pass"];
if(empty($pass)||strlen($pass)<6){
  $rpass= "please enter a valid password and this field is required";
}else{
$rpass="your password is valid";

}
echo"<br>";
if(isset($_POST["radio"])){
  $rradio= "you have selected".$_POST["radio"];
}else{
  $rradio= "you have not selected anything";
}
echo"<br>";
if(isset($_POST["box1"])||isset($_POST["box2"])){
	$chekmessage="you have selected";
	if(isset($_POST["box1"])){
	 $checkbox1= $_POST["box1"];
	}
	if(isset($_POST["box2"])){
	 $checkbox2= $_POST["box2"];
	}
}
else{
$chekmessage= "you have not selected box";
}
$formdata = array(
	      'Name'=>$namerr,
	      'age'=>$agerr,
	      'checkbox'=>$chekmessage.$checkbox1.$checkbox2

	    );

       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
       //Convert updated array to JSON
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   //write json data into data.json file
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	 echo "my name: ".$mydata[1]->Name;
	 echo "my age: ".$mydata[1]->age;
	 echo "my checkbox: ".$mydata[1]->checkbox;
}else{
  echo"please enter a valid information";
}

?>

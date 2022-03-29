<?php
Class DB
{
function opencon()
{
$DBHostname="localhost";
$DBUsername="root";
$DBpass="";
$DBName="testdb2";
 ///model for registration
$conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
if($conn->connect_error)
  {
echo"can't create connection object".$conn->connect_error;
  }
return$conn;
 }
//$devtype,
 function Insertdata($fname,$lname,$age,$pass,$position,$salary,$filename,$tablename,$conn)
 {    //to insert in db
$sqlstr="INSERT INTO $tablename(fname,lname,age,pass,position,salary,filename) VALUES ('$fname','$lname',$age,'$pass','$position',$salary,'$filename')";
if($conn->query($sqlstr)==TRUE)
{
    echo"Data inserted";
}
else
 { 
echo"can't insert ".$conn->error;
 }

}
function closecon($conn)
{
$conn->close();
}

}



?>
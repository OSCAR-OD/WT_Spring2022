<?php
class DB
{
    function opencon(){
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="testdb2";
        
        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName);
        if($conn->connect_error)
        {
        echo "cant create connection object".$conn->connect_error;
        }
        return $conn;
    }
function Registration($fname,$lname,$age,$gen,$contNo,$designation,$lang,$email,$pass,$tablename,$conn)
{
    
    $sqlstr="INSERT INTO $tablename (fname,lname,age,gen,contNo,designation,lang,email,pass) VALUES 
    ('$fname','$lname',$age,'$gen',$contNo,'$designation','$lang','$email','$pass')";
    
    if($conn->query($sqlstr)===TRUE)
    {
      header("Location: ../View/viewdata.php");
      }
    else{
        echo "cant insert".$conn->error;
    }
}
function closecon($conn){
    $conn->close();
}

}

?>
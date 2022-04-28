<?php 
include ("../model/RegModel.php");
$fname=$lname=$age=$email="";

if(isset($_POST["fetch"]))
{
$mydb=new DB();
$conobj=$mydb->opencon();

$mydata=$mydb->fetchData($conobj, "mytable");
if($mydata->num_rows > 0)
{
echo "<table>";

    while($row=$mydata->fetch_assoc())
    {
    echo "<tr>";
        echo "<td>".$row["fname"]."</td>";
        echo "<td>".$row["lname"]."</td>";
        echo "<td>".$row["age"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
}
else{
    echo "no data found";
}

}
if(isset($_POST["search"]))
{


    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->searchUser($conobj, "mytable",$_POST["searchdata"]);
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
     
           $fname=$row["fname"];
            $lname=$row["lname"];
            $age=$row["age"];
            $email=$row["email"];
         
        }
    

    }
    else{
        echo "no data found";
    }
    


}



if(isset($_POST["update"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->updateData("mytable",$_POST["fname"],$_POST["lname"],$_POST["age"],$_POST["email"],$conobj);

}

if(isset($_POST["delete"]))
{

    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->deleteData("mytable",$_POST["searchdata"],$conobj);

}

?>
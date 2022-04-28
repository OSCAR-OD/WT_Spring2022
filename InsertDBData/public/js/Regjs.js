
function fetchuser()
{
var fname=document.getElementById("fname").value;
var xttp= new XMLHttpRequest();
xttp.onreadystatechange = function (){
    if(this.readyState==4 && this.status==200)
    {
        document.getElementById("message").innerHTML=this.responseText;
    }
};


xttp.open("POST","/InsertDBData/Control/ajax.php",true);
xttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xttp.send("fname="+fname);



}

<?php
$db=new mysqli("localhost","root","","test");

if(isset($_POST["btnSubmit"])){
    $name=$_POST["txtName"];
    $age=$_POST["txtAge"];

    $db->query("insert into children(name,age)values('$name','$age')");
    echo "Success";
}
 

?>
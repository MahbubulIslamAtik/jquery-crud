<?php
$db=new mysqli("localhost","root","","test");

    $id=$_POST["txtId"];
    $db->query("delete from children where id='$id'");
    echo "Success";
 

?>
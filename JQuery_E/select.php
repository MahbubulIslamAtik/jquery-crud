<?php
$db=new mysqli("localhost","root","","test");

$result=$db->query("select id,name,age from children");
$html="<table>";
$html="<tr><td><b>ID</b></td><td><b>Name</b></td><td><b>Age</b></td><td><b>Action</b></td></tr>";
while(list($id,$name,$age)=$result->fetch_row()){
  $html.="<tr>";
  $html.="<td>$id</td>";
  $html.="<td>$name</td>";
  $html.="<td>$age</td>";
  $html.="<td>";
  $html.=" <button data-id='$id' class='edit'>Edit</button>";
  $html.=" <button data-id='$id' class='delete'>Delete</button>";
  $html.="</td>";
  $html.="</tr>";
}
$html.="</table>";
echo $html;

?>
<?php
echo $del=$_GET['id'];
$con = mysqli_connect("localhost","root","","tabledata");
$sql = "delete from tabdata where id=$del";
$qry = mysqli_query($con,$sql) or die ('query unsucessfull');
header("Location:http://localhost/project/crud/tableform.php");

?>
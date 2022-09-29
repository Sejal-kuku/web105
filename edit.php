<?php
$con = mysqli_connect("localhost","root","","tabledata"); 
 echo $n1=$_GET['fname'];
 echo $n2=$_GET['aged'];
 echo $n3=$_GET['rolll'];
 $del=$_GET['id'];

$sql = "update tabdata set fname='$n1',aged='$n2',rolll='$n3' where id='$del'";
$qry = mysqli_query($con,$sql) or die('connecton failed');
if($qry){
    echo "insertd";
} else{
    echo "failed";
}
header("Location: http://localhost/project/crud/tableform.php  ");
?>
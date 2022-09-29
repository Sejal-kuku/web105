<?php
 $n1=$_GET['fname'];
 $n2=$_GET['aged'];
 $n3=$_GET['rolll'];
 
$con = mysqli_connect("localhost","root","","tabledata");
$sql = "insert into tabdata(fname,aged,rolll)values('{$n1}','{$n2}','{$n3}')";
$qry = mysqli_query($con,$sql) or die('connecton failed');
if($qry){
    echo "insertd";
} else{
    echo "failed";
}
header("Location: http://localhost/project/crud/tableform.php");
?>
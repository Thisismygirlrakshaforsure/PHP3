<?php
$servername="localhost";
$username="username';
$password="password";
$dbname="MyDb";
//create Connection
$con=mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$con)
{
die("connection failed" mysqli_connect_error());
}
//sql to delete a record
$sql="DELETE FROM persons WHERE id=4";
if(mysqli_query($con,$sql))
{
echo"Record deleted successfully";
}
else
{
echo"error deleting record" mysqli_error($con);
}
mysqli_close($con);
?>

<?php
include("../../../includes/connection.php");
session_start();
$name1=$_POST['name'];
$pin=$_POST['pin'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$gamename=$_POST['gamename'];
$result=$_POST['result'];
$sql="INSERT INTO ipsgm(uname,pin,branch,uyear,gamename,result)VALUES('$name1','$pin','$branch','$year','$gamename','$result')";
$result=mysqli_Query($con,$sql);
if($result)
{
    // echo "data inserted";
    header("location:ipsgm1.php");
}   
else{
    echo "data not inserted";
}
?>
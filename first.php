<?php
session_start();
include "conn.php";
$user_name=$_REQUEST['email_user'];
$pass=$_REQUEST['pwd'];
$sql1= "SELECT * FROM user_detail WHERE username='$user_name' AND password='$pass'";
$qry=mysqli_query($conn,$sql1);
$fin_qry=mysqli_fetch_array($qry);
$count=mysqli_num_rows($qry);
unset($_SESSION['error']);
if($count==1)
{
    $_SESSION['name']=$fin_qry['name'];
    header("location: new2.php");
}
else {
    
    $_SESSION['error']="error";
    header("location: bootst.php#login"); }
?>
<?php
$servername="localhost";
$username="root";
$password="";
$database_name="student_reg";
$conn = mysqli_connect($servername,$username,$password,$database_name);
if(mysqli_connect_errno())
{
    echo "Failed to connect" .mysqli_connect_error();
}
?>
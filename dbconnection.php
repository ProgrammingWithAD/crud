<?php
$con=mysqli_connect("localhost", "root", "", "crud");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>
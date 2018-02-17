<?php
include 'dbset.php';

$myusername= $_POST['myusername'];
$mypassword= $_POST['mypassword'];

$myusername= stripcslashes($myusername);
$mypassword= stripcslashes($mypassword);
$myusername= mysql_real_escape_string($myusername);
$mypassword= mysql_real_escape_string($mypassword);
$encpass= md5($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password ='$encpass'";
$result=  mysql_query($sql);

$count=  mysql_num_rows($result);

if($count == 1){ 
session_register("myusername");
//session_register("mypassword");
header("location:login_success.php");
}
else
{
header("location:loginer.php");
}
?>

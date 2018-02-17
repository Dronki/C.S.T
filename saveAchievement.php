<?php
include 'dbset.php';

$achname = $_POST['name'];
$achname = stripcslashes($achname);
$achname = mysql_real_escape_string($achname);

$achdesc = $_POST['desc'];
$achdesc = stripcslashes($achdesc);
$achdesc = mysql_real_escape_string($achdesc);

$achpoint = $_POST['point'];
$achpoint = stripcslashes($achpoint);
$achpoint = mysql_real_escape_string($achpoint);

$achurl = $_POST['imgurl'];
$achurl = stripcslashes($achurl);
$achurl = mysql_real_escape_string($achurl);

$achievementQuery = "INSERT INTO `achievements` VALUES('','$achname','$achdesc','$achpoint','$achurl','')";
$achievementResult = mysql_query($achievementQuery);
header("location:sap.php");
?>

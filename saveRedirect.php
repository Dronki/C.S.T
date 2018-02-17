<?php
include('dbset.php');

$linktoadd = $_POST['link'];
$linktoadd = stripcslashes($linktoadd);
$linktoadd = mysql_real_escape_string($linktoadd);

$countquery = mysql_query("SELECT * FROM `redirects`");
$num = mysql_num_rows($result2);
$numrows = $num + 1;

$linktoaddquery = "INSERT INTO `redirects` VALUES('','$linktoadd')";
$linkresult = mysql_query($linktoaddquery);
header("location:sap.php");
?>
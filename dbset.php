<?php
$host = "mysql4.000webhost.com";
$db_name = "a4355190_members";
$username = "a4355190_cst";
$password = "Cst1979";
$tbl_name="members";

mysql_connect("$host","$username","$password")or die("Cannot Connect");
mysql_select_db("$db_name")or die("Cannot select DB");
?>

<?php
include 'dbset.php';
$getreid = $_GET['id']; 

$linkquery = mysql_query("SELECT link FROM redirects WHERE id='$getreid'");
if (!$linkquery) {
    echo 'Länken existerar ej!<br/>';
    echo 'Could not run query: ' . mysql_error();
exit;
}

$link = mysql_fetch_row($linkquery);

header("location:$link[0]");
?>

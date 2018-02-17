<?php
session_start();
include '../dbset.php';
$platsRad = mysql_query("SELECT rowId FROM seats WHERE bookedby='$_SESSION[myusername]'");
$platsRAD = mysql_fetch_row($platsRad);
$platsRAD = $platsRAD[0];

$platsId = mysql_query("SELECT columnId FROM seats WHERE bookedby='$_SESSION[myusername]'");
$platsID = mysql_fetch_row($platsId);
$platsID = $platsID[0];

$row = $_GET['r'];
$column = $_GET['c'];
echo $_SESSION['myusername'];
if(empty($row) || empty($column)){
    echo "Var god specificera en plats";
}else{
$emptyornotQuery = mysql_query("SELECT bookedby FROM seats WHERE rowID='$row' AND columnID='$column'");
if(!$emptyornotQuery){
    echo mysql_error();
}
$emptyornot = mysql_fetch_row($emptyornotQuery);
$emptyornot = $emptyornot[0];
if(empty($emptyornot)){
    if($boughtBool = "true"){
        if(empty($platsID) || empty($platsRAD)){
            $bookQuery = mysql_query('UPDATE seats SET bookedby=\''.$_SESSION['myusername'].'\' WHERE rowId=\''.$row.'\' AND columnId=\''.$column.'\'');
            $statusQuery = mysql_query('UPDATE seats SET status="1" WHERE rowId=\''.$row.'\' AND columnId=\''.$column.'\'');
        }else{
            echo "Platsen du har försökt att boka är upptagen eller så har du redan bokat en plats...";
        }
    if(!$bookQuery){
        echo mysql_error();
    }
    if(!$statusQuery){
        echo mysql_error();
    }
    header("location:../profile.php");
}else{
    echo "Platsen du har försökt att boka är upptagen...";
}
}
}

?>

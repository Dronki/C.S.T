<?php
include '../dbset.php';
session_start();
GLOBAL $ticket;
GLOBAL $control;

$ticket= $_POST['ticket'];
$control = $_POST['control'];

$ticket = stripcslashes($ticket);
$control = stripcslashes($control);

$ticket = mysql_real_escape_string($ticket);
$control = mysql_real_escape_string($control);

$ownerquery = mysql_query("SELECT owner FROM tickets WHERE id='$ticket' AND control='$control'");
if (!$ownerquery) {
    echo 'Kunde inte köra: ' . mysql_error();
    exit;
}
$owner = mysql_fetch_row($ownerquery);
$owner = $owner[0];

$ticketExists = mysql_query("SELECT id FROM tickets WHERE id='$ticket' AND control='$control'");
if($ticketExists){
    $ticketBool = true;
}else{
    $ticketBool = false;
}
$ticketExist = mysql_fetch_row($ticketExists);
$ticketExist = $ticketExist[0];

$boughtQuery = mysql_query("SELECT biljett FROM members WHERE username='$_SESSION[myusername]'");
$boughtBool = mysql_fetch_row($boughtQuery);
$boughtBool = $boughtBool[0];

echo $boughtBool;

if(empty($owner)){
    //Denna biljetten finns för att ta tag i!
    takeTicket();
}else{
    //Biljetten är redan tagen, vilket inte borde hända...
    header("location:error.php?id=1");
}

function takeTicket(){
    $funcTicket = $GLOBALS["ticket"];
    $funcControl = $GLOBALS["control"];
    $user = $_SESSION['myusername'];
    //echo $user;
    //echo $funcTicket;
    //echo $funcControl;
    
   $updatequery = mysql_query('UPDATE members SET biljett=\'true\' WHERE username=\''.$_SESSION['myusername'].'\''); 
   if(!$updatequery){
       echo mysql_error();
   }
    //$ticketquery = mysql_query ("UPDATE tickets SET owner='".$_SESSION['myusername']."' WHERE id='".$ticket."' AND control='".$control."'");
   $ticketquery = mysql_query('UPDATE tickets SET owner=\''.$user.'\' WHERE id=\''.$funcTicket.'\' AND control=\''.$funcControl.'\'');
   if(!$ticketquery){
       echo mysql_error();
   }
   header("location:plats.php");
}
?>
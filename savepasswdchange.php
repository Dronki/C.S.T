<?php
include 'dbset.php';
session_start();

$idquery = mysql_query("SELECT id FROM $tbl_name WHERE username = '$_SESSION[myusername]'");
if (!$idquery) {
    echo 'Kunde ej hämta id-nummer. <br/> Anledning: ' . mysql_error();
}
$id = mysql_fetch_row($idquery);

$newpass= $_POST['newpassfinal'];
$newpass = stripcslashes($newpass);
$newpass = mysql_escape_string($newpass);
$newpassenc= md5($newpass);

$pwquery = mysql_query('UPDATE members SET password=\''.$newpassenc.'\' WHERE username=\''.$_SESSION['myusername'].'\' AND id=\''.$id[0].'\'');
if (!$pwquery) {
    die('Ogiltig query: ' . mysql_error());
    echo 'Information:<br/>';
    echo 'Användarnamn: '.$_SESSION['myusername'].'<br/>';
    echo 'ID: '.$id[0].'<br/>';
    mail("noreply@cst.site50.net", "Felrapport!", 
            'Följande fel har inträffat för användaren:%0A
             '.$_SESSION['myusername'].'%0A
             Som har ID-nummer:'.$id[0].'%0A
             Info:'.mysql_error().'%0A');
    echo 'Felrapport har skickats.';
}
header("location:profile.php");
?>

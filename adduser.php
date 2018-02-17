<?php
include 'dbset.php';

$myusername= $_POST['myusername'];
$mypassword= $_POST['mypassword'];
$myemail = $_POST['myemail'];
$myaddress = $_POST['adress'];
$mypostort = $_POST['postort'];
$myfnamn= $_POST['fnamn'];
$myenamn= $_POST['enamn'];
$mypostnr= $_POST['postnr'];
$mypernr= $_POST['pernr'];

//Skydda för sql-injektioner
$myusername= stripcslashes($myusername);
$mypassword= stripcslashes($mypassword);
$myemail = stripcslashes($myemail);
$myaddress = stripcslashes($myaddress);
$mypostort = stripcslashes($mypostort);
$myfnamn = stripcslashes ($myfnamn);
$myenamn = stripcslashes($myenamn);
$mypostnr = stripcslashes($mypostnr);
$mypernr = stripcslashes($mypernr);
//Skydda för sql-injektioner
$myusername= mysql_real_escape_string($myusername);
$mypassword= mysql_real_escape_string($mypassword);
$myemail = mysql_real_escape_string($myemail);
$myaddress = mysql_real_escape_string($myaddress);
$mypostort = mysql_real_escape_string($mypostort);
$myfnamn = mysql_real_escape_string ($myfnamn);
$myenamn = mysql_real_escape_string($myenamn);
$mypostnr = mysql_real_escape_string($mypostnr);
$mypernr = mysql_real_escape_string($mypernr);

//Md5 password.
$encpass= md5($mypassword);

$x = new mysqli();

$Admin = "FALSE";
$result2 = mysql_query("SELECT * FROM $tbl_name");
$num_rows = mysql_num_rows($result2);
echo $num_rows;

$sql="INSERT INTO `members` VALUES ('','$myemail', '$myusername', '$encpass', '$Admin','$myfnamn', '$myenamn','$myaddress', '$myportort', '$mypostnr', '$mypernr','1','Newcomer;','5','false');";
$result=  mysql_query($sql);

$welcomesubject = "Välkommen!";
$welcomemsg = "
Hejsan!
Vi är ytterst glada att du har bestämt dig för att registrera dig på C.S.T.
Lite info om dig:
Användarnamn: ".$myusername."
Du kan återställa ditt lösen genom att maila ditt användarnamn, namn (förnamn och efternamn) samt ditt personnummer till admin@cst.site50.net
Vänliga hälsningar,
C.S.T Styrelse.
";
$from = "noreply@cst.site50.net";
$headers = "Skickat från:" . $from;
mail($myemail,$welcomesubject,$welcomemsg,$headers);
header("location:index.php");
?>

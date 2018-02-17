<?php
include 'dbset.php';
?>
<hr/>
<!--Här ska vi kolla om användaren är admin med att kolla om användaren har TRUE i adminst-->
<?php
$adminquery = mysql_query("SELECT adminst FROM $tbl_name WHERE username = '$_SESSION[myusername]'");
if (!$adminquery) {
    echo 'Kunde inte köra: ' . mysql_error();
    exit;
}

$fnamnquery = mysql_query("SELECT fname FROM $tbl_name WHERE username = '$_SESSION[myusername]'");
if (!$fnamnquery) {
    echo 'Kunde ej hämta förnamn. <br> Anledning: ' . mysql_error();
    exit;
}

$enamnquery = mysql_query("SELECT ename FROM $tbl_name WHERE username = '$_SESSION[myusername]'");
if (!$enamnquery) {
    echo 'Kunde ej hämta efternamn. <br> Anledning: ' . mysql_error();
}

$adressquery = mysql_query("SELECT adress FROM $tbl_name WHERE username = '$_SESSION[myusername]'");
if (!$adressquery) {
    echo 'Kunde ej hämta adress. <br> Anledning: ' . mysql_error();
}

$lvlquery = mysql_query("SELECT level from $tbl_name WHERE username ='$_SESSION[myusername]'");
if(!$lvlquery){
    echo 'Kunde inte hämta level! <br /> Anledning: ' . mysql_error();
}

$pointQuery = mysql_query("SELECT points from $tbl_name WHERE username='$_SESSION[myusername]'");
if(!$pointQuery){
    echo 'Kunde inte hämta poäng! <br /> Anledning: ' . mysql_error();
}
$lvl = mysql_fetch_row($lvlquery);
$lvl = $lvl[0];
$points = mysql_fetch_row($pointQuery);
$points = $points[0];

$ticketQuery = mysql_query("SELECT id FROM tickets WHERE owner='$_SESSION[myusername]'");
if(!$ticketQuery){
    echo mysql_error();
}
$ticketId = mysql_fetch_row($ticketQuery);
$ticketId = $ticketId[0];

$controlQuery = mysql_query("SELECT control FROM tickets WHERE owner='$_SESSION[myusername]'");
if(!$controlQuery){
    echo mysql_error();
}
$controlID = mysql_fetch_row($controlQuery);
$controlID = $controlID[0];

$boughtQuery = mysql_query("SELECT biljett FROM members WHERE username='$_SESSION[myusername]'");
$boughtBool = mysql_fetch_row($boughtQuery);
$boughtBool = $boughtBool[0];

$platsRad = mysql_query("SELECT rowId FROM seats WHERE bookedby='$_SESSION[myusername]'");
$platsRAD = mysql_fetch_row($platsRad);
$platsRAD = $platsRAD[0];

$platsId = mysql_query("SELECT columnId FROM seats WHERE bookedby='$_SESSION[myusername]'");
$platsID = mysql_fetch_row($platsId);
$platsID = $platsID[0];

$adminst = mysql_fetch_row($adminquery);
$förnamn = mysql_fetch_row($fnamnquery);
$efternamn = mysql_fetch_row($enamnquery);
$adress = mysql_fetch_row($adressquery);
$getst = $adminst[0];
if ($getst == "TRUE"){
    echo "<a href='http://cst.site50.net/wordpress/wp-login.php'>Admin för blogg</a><br />";
    echo "<a href='sap.php'>Admin Panel</a><br />";
}else{
}
?>
<a href="profile.php">Min profil</a><br />
<a href="boka/redeem.php" title="Om du har en biljett kan du passa på att boka i förväg ;)">Boka</a>
<?php include_once 'logoutbtn.php'; ?>
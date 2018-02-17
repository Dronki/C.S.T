<?php 
include 'dbset.php';
$antalmedlemmar = 0;
echo "<table border='1'>";
echo "<tr><td>ID</td><td>Användarnamn:</td><td>Mail:</td><td>Level:</td><td>Poäng</td>";
$memberquery ="SELECT * FROM  `members`";
$domemberquery = mysql_query($memberquery);
$row = mysql_fetch_array($domemberquery);
while($row = mysql_fetch_array($domemberquery)){ 
    //echo '<img src="'.$row[imageurl].'" height="74" width="74" align="left"/>';
    $antalmedlemmar++;
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td><a href='mailto:".$row['mail']."?Subject=So we meet again...'>".$row['mail']."</a></td>";
    echo "<td>".$row['level']."</td>";
    echo "<td>".$row['points']."</td>";
    echo "</tr>";
}
echo "<tr>";
echo "<td>Antal medlemmar:</td>";
echo "<td align='center'>".$antalmedlemmar."</td></tr>";
echo "</table>";
?>
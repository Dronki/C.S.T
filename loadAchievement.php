<?php
include 'dbset.php';

$achQuery ="SELECT * FROM  `achievements`";
$doachQuery = mysql_query($achQuery);
//$num=mysql_numrows($doachQuery);
$row = mysql_fetch_array($doachQuery);
echo '<div id="datum">Achievements</div>';
echo '<br />';
while($row = mysql_fetch_array($doachQuery)){ 
    echo '<div id="achbox">';
    echo '<img src="'.$row[imageurl].'" height="74" width="74" align="left"/>';
    echo '<div id="achname">'.$row['name'].'</div>'; 
    echo '<div id="achdesc">Poäng: '.$row['points'].'</div>';
    echo '<div id="achdesc">Beskrivning: <br />'.$row['desc'].'</div>';
    echo '</div>';
}
?>

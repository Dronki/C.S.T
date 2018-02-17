<table border="0" cellpadding="1" cellspacing="1" align="center" bgcolor="red">
    <img src="boka/scen.png">
    <br />
    <br />
    <br />
    <br />
    <td>
    <?php
    //include '../dbset.php';
    echo "<table border='0' cellpadding='1' cellspacing='1' align='left'>";
    session_start();
    $tableRow = false;
    $prevRowID = null;
    $seatColor = null;
    $seatQuery = "SELECT * FROM seats WHERE rowID='A' order by rowID, columnID asc";
    $seatResult = mysql_query($seatQuery);                        
    while(list($rowID, $columnID, $status, $bookedby) = mysql_fetch_row($seatResult)){
        if($status == 0){
            $seatColor = "lightgreen";
        }else if($status = 1){
            $seatColor = "white";
        }
        echo "<td bgcolor='$seatColor' align='center'>";
        if($status == 0){
            //echo "<a href='javascript:choice('.$rowID.','.$columnID.');'>$rowID$columnID</a>";
                echo "$rowID$columnID";
                $platser++;
        }else{
            echo "$rowID$columnID";
        }
        echo "</td>";

        if(($rowID == 'A' && $columnID == 2)
            || ($rowID == 'A' && $columnID == 4)
            ||   ($rowID == 'A' && $columnID == 6)
            ||   ($rowID == 'A' && $columnID == 8)
            ||   ($rowID == 'A' && $columnID == 10)
            ||   ($rowID == 'A' && $columnID == 12)
            ||   ($rowID == 'A' && $columnID == 14)
            ||   ($rowID == 'A' && $columnID == 16)
            ||   ($rowID == 'A' && $columnID == 18)
            ||   ($rowID == 'A' && $columnID == 20)
            ||   ($rowID == 'A' && $columnID == 22)
            ||   ($rowID == 'A' && $columnID == 24)
            ||   ($rowID == 'A' && $columnID == 26)
            ||   ($rowID == 'A' && $columnID == 28)){
            echo "<tr>&nbsp;</tr>";
        }
    }
    echo "</table>";
    ?>
    </td>
<td>
<?php
    echo "<table border='0' cellpadding='1' cellspacing='1' align='right'>";
    $tableRow = false;
    $prevRowID = null;
    $seatColor = null;
    $seatQuery = "SELECT * FROM seats WHERE rowID='B' order by rowID, columnID asc";
    $seatResult = mysql_query($seatQuery);                        
    while(list($rowID, $columnID, $status, $bookedby) = mysql_fetch_row($seatResult)){
        if($status == 0){
            $seatColor = "lightgreen";
        }else if($status = 1){
            $seatColor = "white";
        }
        echo "<td bgcolor='$seatColor' align='center'>";
        if($status == 0){
            //echo "<a href='javascript:choice(".$rowID.",$columnID);'>$rowID$columnID</a>";
            echo "$rowID$columnID";
            $platser++;
        }else{
            echo "$rowID$columnID";
        } 
        echo "</td>";

        if(($rowID == 'B' && $columnID == 2)
            || ($rowID == 'B' && $columnID == 4)
            ||   ($rowID == 'B' && $columnID == 6)
            ||   ($rowID == 'B' && $columnID == 8)
            ||   ($rowID == 'B' && $columnID == 10)
            ||   ($rowID == 'B' && $columnID == 12)
            ||   ($rowID == 'B' && $columnID == 14)
            ||   ($rowID == 'B' && $columnID == 16)
            ||   ($rowID == 'B' && $columnID == 18)
            ||   ($rowID == 'B' && $columnID == 20)
            ||   ($rowID == 'B' && $columnID == 22)
            ||   ($rowID == 'B' && $columnID == 24)
            ||   ($rowID == 'B' && $columnID == 26)
            ||   ($rowID == 'B' && $columnID == 28)){
            echo "<tr>&nbsp;</tr>";
        }
    }
    echo "</table>";
    ?>
</td>
</table>
<?php
GLOBAL $platser;
echo "Platser kvar: ".$platser."/60";
?>
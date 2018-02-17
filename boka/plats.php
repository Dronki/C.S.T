 <?php
session_start();
include '../dbset.php';
$boughtQuery = mysql_query("SELECT biljett FROM members WHERE username='$_SESSION[myusername]'");
$boughtBool = mysql_fetch_row($boughtQuery);
$boughtBool = $boughtBool[0];
if(isset ($_SESSION['myusername'])){
}else{
header("location:../profile.php");
}

/*if(empty($ticketId) || empty($controlID)){
    header("location:redeem.php");
}*/

if(empty($platsID) || empty($platsRAD)){
}else{
    header("location:../profile.php");
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>C.S.T</title>
        <link rel="stylesheet"
        type="text/css" href="../style.css" />
        <script type="text/javascript" src="js/seats.js">
        </script>
    </head>
    <body>
        <div id="wrapper">
        <div id="meny">
            <a href="../index.php">
            <img src="../img/logga.jpg" height="180" width="500"/>
            </a>     
            <br>
            <a href="../index.php">Hem</a> | 
            <a href="../achList.php">Achievements</a> |
            <a href="../about.php">Om Oss</a>
        </div>
        <div id="user">
            <?php
            include_once '../main_login.php';
            ?>
        </div>
        <div id="dummycontent" align="center">
            <table border="0" cellpadding="1" cellspacing="1" align="center" bgcolor="red">
                        <img src="scen.png">
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
                                 echo "<a href='javascript:choice(\"".$rowID."\",$columnID)'>$rowID$columnID</a>";
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
                    <!--<table border="0" cellpadding="1" cellspacing="1" align="center" bgcolor="red">-->
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
                                echo "<a href='javascript:choice(\"".$rowID."\",$columnID)'>$rowID$columnID</a>";
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
        </div>
        <br>
        <div Id="footer">
            <?php include '../footer.php'; ?>
        </div>
        </div>
    </body>
</html>

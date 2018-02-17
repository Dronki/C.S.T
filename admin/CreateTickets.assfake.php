<?php

include '../dbset.php';

    $img = imagecreatefrompng("C.S.T_Biljett.png");
    $black = imagecolorallocate($img, 0, 0, 0);
    imagestring($img, 9, 285, 282, "264", $black);
    imagestring($img, 9, 285, 340, "169", $black);
    imagepng($img, "tickets/ticket-264.png");
    //echo "Created ticket: 264<br />";
    //echo "<br /><hr /> <br />";
    imagedestroy($img);
    print "<img src='tickets/ticket-264.png' height='400' width='600'><br />";   
    $ticketID ="SELECT * FROM  `tickets`";
    $doticketID = mysql_query($ticketID);
    $row = mysql_fetch_array($doticketID);
while($row = mysql_fetch_array($doticketID)){ 
        $img = imagecreatefrompng("C.S.T_Biljett.png");
        $black = imagecolorallocate($img, 0, 0, 0);
        imagestring($img, 9, 285, 282, $row['id'], $black);
        imagestring($img, 9, 285, 340, $row['control'], $black);
        imagepng($img, "tickets/ticket-".$row['id'].".png");
        //echo "Created ticket: ".$row['id']."<br />";
        //echo "<br /><hr /> <br />";
        imagedestroy($img);
        print "<img src='tickets/ticket-$row[id].png' height='400' width='600'><br />";  
}
?>
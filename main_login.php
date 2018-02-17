<?php
session_start();
if(isset ($_SESSION['myusername'])){
    echo "Välkommen {$_SESSION['myusername']}.";
    include_once 'UserPanel.php';
}else{
    echo "Du är inte inloggad. <br />";
    include_once 'login.php';
}

echo "<hr /><div align='center'>Föreningen drivs i samarbete med<br /><a href='http://www.sverok.se/'><img src='http://cst.site50.net/img/minilogga.jpg'/></a></div>";
?>
<?php
$errorcode = $_GET['id'];

if($errorcode == 1){
    $errordesc = "Biljetten är redan tagen, vänligen kontakta <a href='mailto:admin@cst.site50.net?Subject=Biljettfel'>admin</a>";
}else if($errorcode == 2){
    $errordesc = "Biljetten existerar ej!";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>C.S.T - Fel</title>
        <link rel="stylesheet"
        type="text/css" href="../style.css" />
    </head>
    <body>
        <div id="wrapper">
        <div id="err" align="center">
            <?php echo $errordesc; ?>
        </div>
        </div>    
    </body>
</html>

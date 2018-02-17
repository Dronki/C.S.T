<?php
session_start();
if(!session_is_registered(myusername)){
header("location:index.php");
}else{
header("location:index.php");
}
?>
<html><head>
    <link rel="stylesheet"
    type="text/css" href="style.css" />
    </head>
    <body>
        <div id="content" align="center">
            Inloggningen lyckades! =)<br/>
            <a href="index.php">Klicka här för att fortsätta..</a>
       </div>
    </body>
</html>
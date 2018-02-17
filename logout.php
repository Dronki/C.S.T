<?php
session_start();
session_destroy();
?>

<html><head>
    <link rel="stylesheet"
    type="text/css" href="style.css" />
    </head>
    <body>
        <div id="content">
            Logout Successful <br/>
            <a href="index.php">Click here to continue if your being redirected.</a>
            <?php
            header("location:index.php");
            ?>
       </div>
    </body>
</html>
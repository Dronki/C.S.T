<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Lista över achievements för medlemmar och deltagande">
        <title>C.S.T - Lista över achievements</title>
        <link rel="stylesheet"
        type="text/css" href="style.css" />
    </head>
    <body>
        <div id="wrapper">
        <div id="meny">
            <?php include 'meny.php'; ?>
        </div>
        
        <div id="user">
            <?php
            include_once 'main_login.php';
            ?>
        </div>
            <div id="content">
                <p>
                    <?php
                                include_once 'loadAchievement.php';
                    ?>
                </p>
             </div>
        <br>
        <div Id="footer">
            <?php include 'footer.php'; ?>
        </div>
        </div>
    </body>
</html>

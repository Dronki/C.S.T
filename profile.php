<?php
include 'dbset.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>C.S.T</title>
        <link rel="stylesheet"
        type="text/css" href="style.css" />
        <script type="text/javascript" src="js/profile.js"></script>
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
            <?php
            session_start();
            if(isset ($_SESSION['myusername'])){
                    $adminstat = strtolower($getst);
                    echo "Användar-namn: {$_SESSION['myusername']}<br />";
                    echo "Förnamn: " . $förnamn[0] . "<br />";
                    echo "Efternamn: " . $efternamn[0] . "<br />";
                    echo "Adress: " . $adress[0] . "<br />";
                    $sIP = $_SERVER [ 'REMOTE_ADDR' ] ; 
                    echo "IP-Adress: $sIP<br />";
                    echo "Level: ".  $lvl ."<br />";
                    echo "Poäng: ". $points . "<br />";
                    echo "Biljett: ".$ticketId ." - ".$controlID."<br />";
                    echo "Bokad plats: ".$platsRAD."".$platsID."<br />";
                    //echo "Köpt: ".$boughtBool."<br />";
                    echo "Achievements: *** Kommer snart *** <br />";
                    echo "<hr />";
                    include_once 'pw/pwform.php';
            }else{
            echo "Du är inte inloggad. <br />";
            include_once 'login.php';
            }
            ?>
        </div>
        <br>
        <div Id="footer">
            <?php include 'footer.php'; ?>
        </div>
        </div>
    </body>
</html>
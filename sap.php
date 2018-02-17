
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Förenings webbsida C.S.T LAN spel Borås Sverok">
        <title>C.S.T - Super Admin Panel</title>
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
                if($getst == "TRUE"){
                    echo "<div id='datum'>Lägg till en omdirigering:</div>";
                    include_once('addRedirect.php');
                    echo '<hr />';
                    echo '<div id="datum">Lägg till en achievement:</div>';
                    include_once ('addAchievement.php');
                    echo '<hr />';
                    include ('loadAchievement.php');
                    echo '<br /><hr />';
                    echo '<div id="datum">Bokade platser:</div>';
                    include_once ('boka/Platsvisare.php');
                    echo '<br /><hr />';
                    echo '<div id="datum">Medlemmar:</div><br />';
                    include 'admin/EditUserPanel.php';
                    echo "<hr /><br />";
                }else{
                    header("location:index.php");
                }
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

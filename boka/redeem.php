<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>C.S.T</title>
        <link rel="stylesheet"
        type="text/css" href="../style.css" />
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
            <div id="content">
                <?php
                include ('../dbset.php');
                session_start();
                if(isset ($_SESSION['myusername'])){
                    include 'redeemForm.php';
                }else{
                    header("location:../index.php");
                }
                ?>
        </div>
        <br>
        <div Id="footer">
            <?php include '../footer.php'; ?>
        </div>
        </div>
    </body>
</html>


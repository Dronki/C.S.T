<?php
session_start();
?>
<html><head>
    <title>C.S.T - Registrera</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript" src="js/regga.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">
    function PasswordChanged(field)
    {
        var span = document.getElementById("PasswordStrength");
        span.innerHTML = CheckPassword(field.value);
    }
    function PassMatch(field, field2)
    {
        var span = document.getElementById("PasswordMatch");
        span.innerHTML = CheckMatch(field.value, field2.value);
    }
    function MailCheck(mail)
    {
        var span = document.getElementById("mailField");
        span.innerHtml = checkMail(mail.value);
    }
    </script>
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
            <div id="datum" align="center">Registrera ett konto.</div>
            <br/>
            <u>Du rekommenderas att läsa dessa 2 filer innan du registrerar dig på vår webbsida.</u>
            <br />
            <a href="Filer/C.S.T Medlemsavtal.pdf">C.S.Ts Medlemsavtal</a>
            <br />
            <a href="Filer/Stadgar.pdf">C.S.Ts Stadgar</a>
            <br />
            <br />
            <div id="achname">
            <form name="form1" method="post"action="adduser.php" align="left">
                <label for="myusername">Användarnamn:</label>
                <br />
                <input name="myusername" type="text" id="myusername" />
                <br />
                <label for="mypassword">Lösenord:</label>
                <br />
                <input name="slavepass" type="password" id="slavepass" />
                <br />
                <label for="mypassword">Ange ditt lösenord igen:</label>
                <br />
                <input name="mypassword" type="password" id="mypassword" />
                <br />
                <label for="myemail">E-post:</label>
                <br />
                <input name="myemail" type="text" id="myemail" onkeyup="MailCheck(this.value)"/>
                <br /><span id="mailField"></span>
                <hr />
                <label for="fnamn">Förnamn:</label>
                <br />
                <input name="fnamn" type="text" id="fnamn" />
                <br />
                <label for="enamn">Efternamn:</label>
                <br />
                <input name="enamn" type="text" id="enamn" />
                <br />
                <label for="pernr">Personnummer:</label>
                <br />
                <input name="pernr" type="text" id="pernr" />
                <br />
                <label for="adress">Adress:</label>
                <br />
                <input name="adress" type="text" id="adress" />
                <br />
                <label for="postort">Postort:</label>
                <br />
                <input name="postort" type="text" id="postort" />
                <br />
                <label for="postnr">Postnummer:</label>
                <br />
                <input name="postnr" type="text" id="postnr" />
                <br />
                <input name="Submit" type="submit" value="Registrera" />
            </form>
            </div>
       </div>
       <br>
       <div Id="footer">
            <?php include 'footer.php'; ?>
       </div>
        </div>
    </body>
</html>
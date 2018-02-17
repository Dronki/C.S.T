<?php
if($getst == "TRUE"){
    echo '
        <form name="addRedirect" method="post"action="saveRedirect.php" align="left">
        Länk för att lägga till databasen för omdirigeringar:
        <br />
        <input name="link" type="text" id="link" />
        <input name="Submit" type="submit" value="Lägg till" />
        </form>
        ';
}else{
    echo "Det verkar vara något fel, antingen så är du inte inloggad<br />eller så har du inte rättigheter att använda denna komponent.";
}
?>



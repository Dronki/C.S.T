<?php
if($getst == "TRUE"){
    echo '
        <form name="addAchievement" method="post"action="saveAchievement.php" align="left">
        Här kan du lägga till achievements.
        <br />
        <label for="name">Namn:</label>
        <input name="name" type="text" id="name" />
        <br />
        <label for="point">Poäng:</label>
        <input name="point" type="text" id="point" />
        <br />
        <label for="imgurl">URL för ikon:</label>
        <input name="imgurl" type="text" id="imgurl" />
        <br />
        <label for="desc">Beskrivning:</label>
        <br />
        <textarea name="desc" type="text" id="desc" rows="15" cols="80"></textarea>
        <br />
        <input name="Submit" type="submit" value="Lägg till" />
        </form>
        ';
}else{
    echo "Det verkar vara något fel, antingen så är du inte inloggad<br />eller så har du inte rättigheter att använda denna komponent.";
}
?>

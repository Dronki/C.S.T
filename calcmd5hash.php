<?php
$string1 = $_GET['s'];
$md5 = md5($string1);
echo 'md5hash: '.$md5.'<br />hash made from: '.$string1;
?>

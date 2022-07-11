<?php 
$name = "user";
$value="jdox";
setcookie($name,$value,time()+2000);
echo $_COOKIE[$name];
?>
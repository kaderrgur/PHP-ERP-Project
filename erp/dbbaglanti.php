
<?php
 




$host = "localhost";
$user = "root";
$pass = "";
$db   = "erp";
 




$baglan = mysql_connect($host, $user, $pass) or die (mysql_Error());
 

mysql_select_db($db, $baglan) or die (mysql_Error());
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8_turkish_ci'");
 



?>
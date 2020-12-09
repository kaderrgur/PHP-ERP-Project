<?php
include "admindbbaglanti.php";

/// cookie delete
setcookie($cookie_id, "", time()-86400);

//// 
header("Location: index.php");
die("HATALI DENEME");

?>
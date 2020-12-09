<?php

include "dbbaglanti.php";


    {	
		$profilguncelle=mysql_query("UPDATE admin SET admin_kadi='$_POST[admin_kadi]' WHERE admin_id=1");
        $profilguncelle=mysql_query("UPDATE admin SET admin_email='$_POST[admin_email]' WHERE admin_id=1");
        $profilguncelle=mysql_query("UPDATE admin SET admin_adsoyad='$_POST[admin_adsoyad]' WHERE admin_id=1");

    }


 header ("Location:anasayfa.php");

?>
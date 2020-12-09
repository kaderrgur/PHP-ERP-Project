
<?php

include "../dbbaglanti.php";



if(isset($_POST['onay_logo']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_logo='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_logo='0' WHERE onay_id=1");  
    }


if(isset($_POST['onay_indexslayt']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_indexslayt='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_indexslayt='0' WHERE onay_id=1");  
    }


if(isset($_POST['onay_indexyazi']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_indexyazi='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_indexyazi='0' WHERE onay_id=1");  
    }
    

if(isset($_POST['onay_duyuru']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_duyuru='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_duyuru='0' WHERE onay_id=1");  
    }


if(isset($_POST['onay_indexhizmetler']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_indexhizmetler='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_indexhizmetler='0' WHERE onay_id=1");  
    }


if(isset($_POST['onay_indexfoto']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_indexfoto='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_indexfoto='0' WHERE onay_id=1");  
    }


if(isset($_POST['onay_indexreferans']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_indexreferans='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_indexreferans='0' WHERE onay_id=1");  
    }


if(isset($_POST['onay_altiletisim']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_altiletisim='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_altiletisim='0' WHERE onay_id=1");  
    }


if(isset($_POST['onay_tcmbkur']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_tcmbkur='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_tcmbkur='0' WHERE onay_id=1");  
    }


if(isset($_POST['onay_altfacebook']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_altfacebook='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_altfacebook='0' WHERE onay_id=1");  
    }


if(isset($_POST['onay_altsosyal']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_altsosyal='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_altsosyal='0' WHERE onay_id=1");  
    }



if(isset($_POST['onay_altmenu']))
    {	
		$gorunumayar=mysql_query("UPDATE onay SET onay_altmenu='1' WHERE onay_id=1");
    }

else
    {
    	$gorunumayar=mysql_query("UPDATE onay SET onay_altmenu='0' WHERE onay_id=1");  
    }








 header ("Location:anasayfa.php");


?>
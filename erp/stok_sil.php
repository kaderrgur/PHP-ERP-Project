<?php

include "dbbaglanti.php";

$stokid=$_GET['id'];

	
		$stoksil=mysql_query("DELETE from stoklar WHERE stok_id='$stokid'");
		echo "Kayıt Başarılı Bir Şekilde Silindi..";
		echo '<br><br><a href="stok_duzenle_sil.php"><<Önceki Sayfaya Git</a>';

?>
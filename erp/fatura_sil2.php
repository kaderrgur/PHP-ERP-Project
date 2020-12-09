<?php

include "dbbaglanti.php";

$faturaid=$_GET['id'];

	
		$stoksil=mysql_query("DELETE from finans WHERE finans_id='$faturaid'");
		echo "Kayıt Başarılı Bir Şekilde Silindi..";
		echo '<br><br><a href="fatura_sil.php"><<Önceki Sayfaya Git</a>';

?>
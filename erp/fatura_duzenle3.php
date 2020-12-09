<?php

include "dbbaglanti.php";
$faturaid=$_GET['id'];
$fatura_no=$_POST['fatura_no'];
$fatura_firma=$_POST['fatura_firma'];
$fatura_miktar=$_POST['fatura_miktar'];
$fatura_odemesi=$_POST['fatura_odemesi'];



if ($fatura_odemesi==0 or $fatura_no=="" or $fatura_firma=="" or $fatura_miktar=="")
{
	echo "Hatalı veya Eksik Giriş Yaptınız Tekrar Deneyin..";
	echo '<br><br><a href="javascript:history.back()"><<Önceki Sayfaya Git</a>';

}

else
{

    {	
		$stokduzenle=mysql_query("UPDATE finans SET fatura_no='$fatura_no', fatura_firma='$fatura_firma', fatura_miktar='$fatura_miktar', fatura_odemesi='$fatura_odemesi' WHERE finans_id='$faturaid'");

		echo "Kayıt Başarılı Bir Şekilde Düzenlendi..";
		echo '<br><br><a href="javascript:history.back()"><<Önceki Sayfaya Git</a>';
    }
}

?>
<?php

include "dbbaglanti.php";
$fatura_no=$_POST['fatura_no'];
$fatura_miktar=$_POST['fatura_miktar'];
$fatura_firma=$_POST['fatura_firma'];
$fatura_odemesi=$_POST['fatura_odemesi'];



if ($fatura_no=="" or $fatura_miktar=="" or $fatura_firma=="" or $fatura_odemesi==0)
{
	echo "Hatalı veya Eksik Giriş Yaptınız Tekrar Deneyin..";
	echo '<br><br><a href="fatura_ekle.php"><<Önceki Sayfaya Git</a>';

}

else
{
	{
		$faturaekle=mysql_query("INSERT INTO finans (fatura_no,fatura_miktar,fatura_firma,fatura_odemesi) VALUES ('$fatura_no','$fatura_miktar','$fatura_firma','$fatura_odemesi')");
		echo "Kayıt Başarılı Bir Şekilde Eklendi..";
		echo '<br><br><a href="fatura_ekle.php"><<Önceki Sayfaya Git</a>';
	}
}

?>
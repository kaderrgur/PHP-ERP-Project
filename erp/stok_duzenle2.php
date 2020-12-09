<?php

include "dbbaglanti.php";
$stokid=$_GET['id'];
$stok_kategori_id=$_POST['stok_kategorisi'];
$stok_adi=$_POST['stok_adi'];
$stok_miktari=$_POST['stok_miktari'];
$stok_degeri=$_POST['stok_degeri'];



if ($stok_kategori_id==0 or $stok_adi=="" or $stok_miktari=="" or $stok_degeri==0)
{
	echo "Hatalı veya Eksik Giriş Yaptınız Tekrar Deneyin..";
	echo '<br><br><a href="javascript:history.back()"><<Önceki Sayfaya Git</a>';

}

else
{

    {	
		$stokduzenle=mysql_query("UPDATE stoklar SET stok_kategori_id='$stok_kategori_id', stok_adi='$stok_adi', stok_miktari='$stok_miktari', stok_degeri='$stok_degeri' WHERE stok_id='$stokid'");

		echo "Kayıt Başarılı Bir Şekilde Düzenlendi..";
		echo '<br><br><a href="stok_duzenle_sil.php"><<Önceki Sayfaya Git</a>';
    }
}

?>
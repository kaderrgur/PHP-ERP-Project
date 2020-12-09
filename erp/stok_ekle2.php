<?php

include "dbbaglanti.php";
$stok_kategori_id=$_POST['stok_kategorisi'];
$stok_adi=$_POST['stok_adi'];
$stok_miktari=$_POST['stok_miktari'];
$stok_degeri=$_POST['stok_degeri'];



if ($stok_kategori_id==0 or $stok_adi=="" or $stok_miktari=="" or $stok_degeri==0)
{
	echo "Hatalı veya Eksik Giriş Yaptınız Tekrar Deneyin..";
	echo '<br><br><a href="stok_ekle.php"><<Önceki Sayfaya Git</a>';

}

else
{

    {	
		$stokekle=mysql_query("INSERT INTO stoklar (stok_kategori_id,stok_adi,stok_miktari,stok_degeri) VALUES ('$stok_kategori_id','$stok_adi','$stok_miktari','$stok_degeri')");
		echo "Kayıt Başarılı Bir Şekilde Eklendi..";
		echo '<br><br><a href="stok_ekle.php"><<Önceki Sayfaya Git</a>';
    }
}

?>
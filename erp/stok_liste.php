<?php include "dbbaglanti.php";?>



<html>
<body>

<table border="1" width="908" height="91">
	<tr>
		<td width="125" height="48" align="center"><font color="#FF0000"><b>Stok 
		Kategorisi</b></font></td>
		<td width="500" height="48" align="center"><font color="#FF0000"><b>Stok 
		Adı</b></font></td>
		<td width="145" height="48" align="center"><font color="#FF0000"><b>Stok 
		Miktarı</b></font></td>
		<td width="103" height="48" align="center"><font color="#FF0000"><b>Stok 
		Değeri</b></font></td>
	</tr>
	



<?php

$stoklar = mysql_query("SELECT * FROM stoklar");
$kategoriler = mysql_query("SELECT * FROM kategoriler");
$kategori = mysql_fetch_array($kategoriler);

while($stoklarcekilen_veri = mysql_fetch_array($stoklar)){
extract($stoklarcekilen_veri);


$sorgulacek = $stoklarcekilen_veri["stok_kategori_id"];
$gelenveri=mysql_fetch_array(mysql_query("SELECT * FROM kategoriler where kategori_id=$sorgulacek"));
$stok_degeri2 = $stoklarcekilen_veri["stok_degeri"];
$stok_hesap = $stoklarcekilen_veri["stok_miktari"];
$stok_hesap2 = $stok_hesap * 0.20;



$stokdegeriyaz;
if ($stok_degeri2==1)
{
	
	$stokdegeriyaz = '<b>Önemli Stok</b>';

}
else if ($stok_degeri2==2)
{
	$stokdegeriyaz = "Normal Stok";
}
else
{
	$stokdegeriyaz = "Stok";
}


$stokmiktariyaz;
if ($stok_hesap2<=50)
{
	
	$stokmiktariyaz = '<font color="blue">(Stok Az)</font>';

}

else
{
	$stokmiktariyaz = '<font color="green">(Stok Normal)</font>';
}


echo '
<tr>
<td width="125">'.$gelenveri["kategori_adi"].'</td>
<td width="500">'.$stoklarcekilen_veri["stok_adi"].'</td>
<td width="145">'.$stok_hesap.'&nbsp;&nbsp;&nbsp;'.$stokmiktariyaz.'</td>
<td width="103">'.$stokdegeriyaz.'</td>
</tr>
';


}    
 
?>




	
</table>

</body>
</html>
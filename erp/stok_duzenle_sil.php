<?php include "dbbaglanti.php";?>



<html>
<body>

<table border="1" width="908" height="91">
	<tr>
		<td width="125" height="48" align="center"><font color="#FF0000"><b>Stok 
		Kategorisi</b></font></td>
		<td width="500" height="48" align="center"><font color="#FF0000"><b>Stok 
		Adı</b></font></td>
		<td width="145" height="48" align="center"><font color="#FF0000"><b>Düzenle</b></font></td>
		<td width="103" height="48" align="center"><font color="#FF0000"><b>Sil</b></font></td>
	</tr>
	



<?php

$stoklar = mysql_query("SELECT * FROM stoklar");
$kategoriler = mysql_query("SELECT * FROM kategoriler");
$kategori = mysql_fetch_array($kategoriler);

while($stoklarcekilen_veri = mysql_fetch_array($stoklar)){
extract($stoklarcekilen_veri);


$stokid = $stoklarcekilen_veri["stok_id"];
$sorgulacek = $stoklarcekilen_veri["stok_kategori_id"];
$gelenveri=mysql_fetch_array(mysql_query("SELECT * FROM kategoriler where kategori_id=$sorgulacek"));

$stok_degeri2 = $stoklarcekilen_veri["stok_degeri"];
$stok_hesap = $stoklarcekilen_veri["stok_miktari"];






echo '
<tr>
<td width="125">'.$gelenveri["kategori_adi"].'</td>
<td width="500">'.$stoklarcekilen_veri["stok_adi"].'</td>
<td width="145"><a href="stok_duzenle.php?id='.$stokid.'">Kaydı Düzenle</a></td>
<td width="103"><a href="stok_sil.php?id='.$stokid.'">Kaydı Sil</a></td>
</tr>
';


}    
 
?>




	
</table>

</body>
</html>
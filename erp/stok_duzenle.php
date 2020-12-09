<html>
<body>
<head>
<meta http-equiv="Content-Language" content="tr">
</head>
<table border="0" width="43%" height="100">


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red"><b>ŞUANKİ DEĞERLER :</b></font>
<br>


<?php
include "dbbaglanti.php";

$stokid=$_GET['id'];



$stoklar=mysql_fetch_array(mysql_query("SELECT * FROM stoklar where stok_id=$stokid"));

;?>


<?php
if ($stoklar["stok_kategori_id"] == 1)
{
	echo '

	<tr>
		<td width="360" align="right" height="23">Stok Kategorisi :</td>
		<td height="23"><select size="1" name="stok_kategorisi">
		{
		<option value="1" selected>Hammadde</option>
		}
		?>

';}

else if ($stoklar["stok_kategori_id"] == 2)
{
	echo '

	<tr>
		<td width="360" align="right" height="23">Stok Kategorisi :</td>
		<td height="23"><select size="1" name="stok_kategorisi">
		{
		<option value="1" selected>Yarı Mamül</option>
		}
		?>

';}

else if ($stoklar["stok_kategori_id"] == 3)
{
	echo '

	<tr>
		<td width="360" align="right" height="23">Stok Kategorisi :</td>
		<td height="23"><select size="1" name="stok_kategorisi">
		{
		<option value="1" selected>Normal Stok</option>
		}
		?>

';}

else if ($stoklar["stok_kategori_id"] == 4)
{
	echo '

	<tr>
		<td width="360" align="right" height="23">Stok Kategorisi :</td>
		<td height="23"><select size="1" name="stok_kategorisi">
		{
		<option value="1" selected>Montaj</option>
		}
		?>

';}

else if ($stoklar["stok_kategori_id"] == 5)
{
	echo '

	<tr>
		<td width="360" align="right" height="23">Stok Kategorisi :</td>
		<td height="23"><select size="1" name="stok_kategorisi">
		{
		<option value="1" selected>Demirbaş</option>
		}
		?>

';}

else if ($stoklar["stok_kategori_id"] == 6)
{
	echo '

	<tr>
		<td width="360" align="right" height="23">Stok Kategorisi :</td>
		<td height="23"><select size="1" name="stok_kategorisi">
		{
		<option value="1" selected>Ekipman</option>
		}
		?>

';}


?>


<?php
echo '
	<tr>
		<td width="360" align="right" height="23">Stok Adı :</td>
		<td height="23"><input type="text" name="stok_adi" size="42" value="'.$stoklar["stok_adi"].'"></td>
	</tr>
	<tr>
		<td width="360" align="right" height="23">Stok Miktarı :</td>
		<td height="23"><input type="text" name="stok_miktari" size="42" value="'.$stoklar["stok_miktari"].'"></td>
	</tr>

';
?>



<?php
if ($stoklar["stok_degeri"] == 1)
{
	echo '

	<tr>
		<td width="360" align="right" height="23">Stok Değeri :</td>
		<td height="23"><select size="1" name="stok_degeri">
		{
		<option value="1" selected>Önemli Stok</option>
		}

';}

else if ($stoklar["stok_degeri"] == 2)
{
	echo '

	<tr>
		<td width="360" align="right" height="23">Stok Değeri :</td>
		<td height="23"><select size="1" name="stok_degeri">
		{
		<option value="1" selected>Normal Stok</option>
		}

';}

else if ($stoklar["stok_degeri"] == 3)
{
	echo '

	<tr>
		<td width="360" align="right" height="23">Stok Değeri :</td>
		<td height="23"><select size="1" name="stok_degeri">
		{
		<option value="1" selected>Stok</option>
		}

';}


?>


</table>
<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red"><b>YENİ DEĞERLER :</b></font>
<br>

<?php


echo '
<form action="stok_duzenle2.php?id='.$stokid.'" method="post">
';
?>
<table border="0" width="43%" height="100">
	<tr>
		<td width="360" align="right" height="23">Stok Kategorisi :</td>
		<td height="23"><select size="1" name="stok_kategorisi">
		<option selected value="0">:::Kategori Seçin:::</option>
		<option value="1">Hammadde</option>
		<option value="2">Yarı Mamül</option>
		<option value="3">Normal Stok</option>
		<option value="4">Montaj</option>
		<option value="5">Demirbaş</option>
		<option value="6">Ekipman</option>
		</select></td>
	</tr>
	<tr>
		<td width="360" align="right" height="23">Stok Adı :</td>
		<td height="23"><input type="text" name="stok_adi" size="42"></td>
	</tr>
	<tr>
		<td width="360" align="right" height="23">Stok Miktarı :</td>
		<td height="23"><input type="text" name="stok_miktari" size="42"></td>
	</tr>
	<tr>
		<td width="360" align="right" height="23">Stok Değeri :</td>
		<td height="23"><select size="1" name="stok_degeri">
		<option selected value="0">:::Stok Değeri Seçin:::</option>
		<option value="1">Önemli Stok</option>
		<option value="2">Normal Stok</option>
		<option value="3">Stok</option>
		</select></td>
	</tr>
	<tr>
		<td width="360">&nbsp;</td>
		<td><input type="submit" value="Kaydı Düzenle" name="B1">
	</tr>
</table>


</form>
</body>
</html>
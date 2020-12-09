<html>
<body>
<head>
<meta http-equiv="Content-Language" content="tr">
</head>
<form action="stok_ekle2.php" method="post">
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
		<td><input type="submit" value="Formu Gönder" name="B1">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Formu Temizle" name="B2"></td>
	</tr>
</table>
</form>
</body>
</html>
<html>
<body>
<head>
<meta http-equiv="Content-Language" content="tr">
</head>
<form action="fatura_ekle2.php" method="post">
<table border="0" width="43%" height="100">

	<tr>
		<td width="360" align="right" height="23">Fatura No :</td>
		<td height="23"><input type="text" name="fatura_no" size="15"></td>
	</tr>
	<tr>
		<td width="360" align="right" height="23">Fatura Miktarı :</td>
		<td height="23"><input type="text" name="fatura_miktar" size="15"></td>
	</tr>
		<tr>
		<td width="360" align="right" height="23">Fatura Firma :</td>
		<td height="23"><input type="text" name="fatura_firma" size="42"></td>
	</tr>
	<tr>
		<td width="360" align="right" height="23">Fatura Ödemesi :</td>
		<td height="23"><select size="1" name="fatura_odemesi">
		<option selected value="0">:::Durum Seçiniz:::</option>
		<option value="1">Ödeme Yapıldı</option>
		<option value="2">Ödeme Yapılmadı</option>
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
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

$faturaid=$_GET['id'];



$finanslar=mysql_fetch_array(mysql_query("SELECT * FROM finans where finans_id=$faturaid"));

;?>



<?php
echo '
	<tr>
		<td width="360" align="right" height="23">Fatura No :</td>
		<td height="23"><input type="text" name="fatura_no" size="15" value="'.$finanslar["fatura_no"].'"></td>
	</tr>
	<tr>
		<td width="360" align="right" height="23">Fatura Firma :</td>
		<td height="23"><input type="text" name="fatura_firma" size="42" value="'.$finanslar["fatura_firma"].'"></td>
	</tr>
	<tr>
		<td width="360" align="right" height="23">Fatura Miktarı :</td>
		<td height="23"><input type="text" name="fatura_miktar" size="15" value="'.$finanslar["fatura_miktar"].'"></td>
	</tr>


';
?>


<?php
if ($finanslar["fatura_odemesi"] == 1)
{
	echo '

	<tr>
		<td width="360" align="right" height="23">Fatura Ödemesi :</td>
		<td height="23"><select size="1" name="fatura_odemesi">
		{
		<option value="1" selected>Ödeme Yapıldı</option>
		}

';}

else if ($finanslar["fatura_odemesi"] == 2)
{
	echo '

	<tr>
		<td width="360" align="right" height="23">Fatura Ödemesi :</td>
		<td height="23"><select size="1" name="fatura_odemesi">
		{
		<option value="2" selected>Ödeme Yapılmadı</option>
		}

';}




?>


</table>
<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red"><b>YENİ DEĞERLER :</b></font>
<br>

<?php


echo '
<form action="fatura_duzenle3.php?id='.$faturaid.'" method="post">
';
?>
<table border="0" width="43%" height="100">
	<tr>
		<td width="360" align="right" height="23">Fatura No :</td>
		<td height="23"><input type="text" name="fatura_no" size="15" value="<?php echo $finanslar['fatura_no'];?>"></td>
	</tr>
	<tr>
		<td width="360" align="right" height="23">Fatura Firma :</td>
		<td height="23"><input type="text" name="fatura_firma" size="42" value=""></td>
	</tr>
	<tr>
		<td width="360" align="right" height="23">Fatura Miktarı :</td>
		<td height="23"><input type="text" name="fatura_miktar" size="15" value=""></td>
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
		<td><input type="submit" value="Kaydı Düzenle" name="B1">
	</tr>
</table>


</form>
</body>
</html>
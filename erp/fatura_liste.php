<?php include "dbbaglanti.php";?>



<html>
<body>

<table border="1" width="908" height="91">
	<tr>
		<td width="125" height="48" align="center"><font color="#FF0000"><b>Fatura No</b></font></td>
		<td width="500" height="48" align="center"><font color="#FF0000"><b>Fatura Firma</b></font></td>
		<td width="145" height="48" align="center"><font color="#FF0000"><b>Fatura Miktarı</b></font></td>
		<td width="130" height="48" align="center"><font color="#FF0000"><b>Fatura Ödemesi</b></font></td>
	</tr>
	



<?php

$faturalar = mysql_query("SELECT * FROM finans");
while($stoklarcekilen_veri = mysql_fetch_array($faturalar)){
extract($stoklarcekilen_veri);



$faturaodemesi;
if ($fatura_odemesi==1)
{
	
	$faturaodemesi = '<font color="green">Ödeme Yapıldı</font>';

}
else if ($fatura_odemesi==2)
{
	$faturaodemesi = '<font color="red">Ödeme Yapılmadı</font>';
}



echo '

<tr>
<td width="125"><center>'.$stoklarcekilen_veri["fatura_no"].'</center></td>
<td width="500"><center>'.$stoklarcekilen_veri["fatura_firma"].'</center></td>
<td width="145"><center>'.$stoklarcekilen_veri["fatura_miktar"].'</center></td>
<td width="130"><center>'.$faturaodemesi.'</center></td>
</tr>

';


}    
 
?>




	
</table>

</body>
</html>
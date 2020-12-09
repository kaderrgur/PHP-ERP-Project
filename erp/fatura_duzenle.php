<?php include "dbbaglanti.php";?>



<html>
<body>

<table border="1" width="908" height="91">
	<tr>
		<td width="125" height="48" align="center"><font color="#FF0000"><b>Fatura No</b></font></td>
		<td width="500" height="48" align="center"><font color="#FF0000"><b>Fatura Firma</b></font></td>
		<td width="145" height="48" align="center"><font color="#FF0000"><b></b></font></td>
	</tr>
	



<?php

$faturalar = mysql_query("SELECT * FROM finans");
while($finanscekilen_veri = mysql_fetch_array($faturalar)){
extract($finanscekilen_veri);

$finans_id = $finanscekilen_veri["finans_id"];
$fatura_no = $finanscekilen_veri["fatura_no"];
$fatura_firma = $finanscekilen_veri["fatura_firma"];




echo '
<tr>
<td width="125">'.$finanscekilen_veri["fatura_no"].'</td>
<td width="500">'.$finanscekilen_veri["fatura_firma"].'</td>
<td width="145"><a href="fatura_duzenle2.php?id='.$finans_id.'">Kaydı Düzenle</a></td>
</tr>
';


}    
 
?>




	
</table>

</body>
</html>
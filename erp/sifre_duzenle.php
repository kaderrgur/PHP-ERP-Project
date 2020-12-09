
<?php

include "adminayarlar.php";


		$eskisifre = strip_tags(trim(dbtrim($_POST["eskisifre"])));
		$admin_sifre = strip_tags(trim(dbtrim($_POST["yenisifre"])));
		$yenisifretekrar = strip_tags(trim(dbtrim($_POST["yenisifretekrar"])));


		
		$token = create_token(11);
		
		$hash = create_password($admin_sifre);

		$hash2 = create_password($eskisifre);



		




if( dbcount("admin_id", "admin", "admin_sifre='".($hash2)."'") <= 0 )
{
echo "<script>alert(\"Şuanki şifreniz hatalı ! Lütfen tekrar deneyin..\");</script>";

echo'<script type="text/javascript">window.location = "anasayfa.php"</script>';
}





else if ($admin_sifre == $yenisifretekrar)


{
	dbquery("UPDATE admin SET admin_sifre='$hash' WHERE admin_id=1");

	
}

else 

{

echo "<script>alert(\"Yazdığınız yeni şifre ile şifrenin tekrarı aynı değil, lütfen tekrar deneyin..\");</script>";
echo'<script type="text/javascript">window.location = "anasayfa.php"</script>';

}


echo "Şifreniz başarılı bir şekilde değiştirildi.";
echo '<br><br><a href="javascript:history.back()"><<Önceki Sayfaya Git</a>';


?>



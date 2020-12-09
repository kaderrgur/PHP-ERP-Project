<?php
include "admindbbaglanti.php";


if( $giris_yapildimi == 'evet' ) {
    header("Location: anasayfa.php");
    die("Yönlendirilmiş olmalıydın!!!");
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ERP - Kullanıcı Girişi</title>

    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">


    <link href="plugins/node-waves/waves.css" rel="stylesheet" />


    <link href="plugins/animate-css/animate.css" rel="stylesheet" />


    <link href="css/style.css" rel="stylesheet">
</head>


<?php
if( isset($_POST["giris_onay"]) && $_POST["giris_onay"] == "2" ) {

    $admin_kadi = strip_tags(trim(dbtrim($_POST["admin_kadi"])));
    $admin_sifre = strip_tags(trim(dbtrim($_POST["admin_sifre"])));

    $hash = create_password($admin_sifre);

    if( dbcount("admin_id", "admin", "admin_kadi='".($admin_kadi)."' AND admin_sifre='".($hash)."'") <= 0 ) {
        echo "<script>alert(\"Girdiğiniz bilgiler hatalı ! Lütfen tekrar deneyin..\");</script>";
    } else if( dbresult("SELECT admin_onay FROM admin WHERE admin_kadi='".($admin_kadi)."' AND admin_sifre='".($hash)."'") != '1' ) {
        echo "Hesabınızı aktif etmelisiniz! Yazılımcı ile iletişime geçin.";
    } else {

        $result = dbquery("SELECT * FROM admin WHERE admin_kadi='".($admin_kadi)."' AND admin_sifre='".($hash)."'");
        $uyebilgi = $result->fetch_assoc();

        setcookie($cookie_id, $uyebilgi["admin_token"], time()+(86400*7));


        header("Location: anasayfa.php");
        die("HATALI DENEME");
    }
}
?>


<body class="login-page">
    <div class="login-box">
        <div class="logo">
            &nbsp&nbsp<center><img src="images/erplogo.png"></img></center>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="index.php" method="POST">
                    <input type="hidden" name="giris_onay" value="2" />

                    <div class="msg">YÖNETİCİ GİRİŞİ</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="admin_kadi" id="admin_kadi" value="<?=(isset($admin_kadi)?$admin_kadi:null);?>" placeholder="Kullanıcı Adınız" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="admin_sifre" id="admin_sifre" placeholder="Şifreniz" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                           
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">GİRİŞ YAP</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>







    <script src="plugins/jquery/jquery.min.js"></script>

 
    <script src="plugins/bootstrap/js/bootstrap.js"></script>


    <script src="plugins/node-waves/waves.js"></script>


    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>
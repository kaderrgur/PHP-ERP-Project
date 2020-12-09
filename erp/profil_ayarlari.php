<?php
include "dbbaglanti.php";

$gelenveri=mysql_fetch_array(mysql_query("SELECT * FROM admin where admin_id=1"));
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Kurumsal Kaynak Yönetimi | Yönetici Paneli</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/themes/all-themes.css" rel="stylesheet" />

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>


</head>
<body>

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>PROFİL AYARLARI</h2>
                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <form action="profilbilgileri_duzenle.php" method="post">
                                <table class="table table-hover dashboard-task-infos">
                                    
<th>#</th>
<th>Bölüm Başlığı</th>
<th>Şuanki İçerik</th>
<th>Yeni İçerik</th>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Yönetici Kullanıcı Adı :</td>
                                            <td><?php echo "".$gelenveri["admin_kadi"].""; ?></td>
                                            <td><input type="text" name="admin_kadi" class="form-control" placeholder="Buraya yazınız.." /></td>

                                     
                                    
                                        </tr>
             
                                        <tr>
                                            <td>3</td>
                                            <td>Yönetici e-posta Adresi :</td>

                                       <td><?php echo "".$gelenveri["admin_email"].""; ?></td>
<td><input type="text" name="admin_email" class="form-control" placeholder="Buraya yazınız.." /></td>
                                          
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Yönetici Adı ve Soyadı :</td>

                                        <td><?php echo "".$gelenveri["admin_adsoyad"].""; ?></td>
<td><input type="text" name="admin_adsoyad" class="form-control" placeholder="Buraya yazınız.." /></td>
                                         
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Yönetici Profil Fotoğrafı :</td>

                                       <td><img src="images/<?php echo "".$gelenveri["admin_foto"].""; ?>" width="40" height="40"></img></td>
<td><input type="text" name="admin_foto" class="form-control" placeholder="Buraya yazınız.." /></td>
                                         
                                        </tr>

                                    </tbody>

                                </table>
                                <center><button class="btn btn-primary waves-effect" type="submit">BİLGİLERİ KAYDET</button></center>
</form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>ŞİFRE AYARLARI</h2>
                            <ul class="header-dropdown m-r--5">
                               





                            </ul>
                        </div>























                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart">
                                <form action="sifre_duzenle.php" method="post">
                                <table class="table table-hover dashboard-task-infos">
                                



                                <tr> <td>Şuanki Şifreniz :</td><td><input type="text" name="eskisifre" class="form-control" placeholder="Buraya yazınız.." /></td></tr>
                                <tr><td>Yeni Şifreniz :</td><td><input type="text" name="yenisifre" class="form-control" placeholder="Buraya yazınız.." /></td></tr>
                                <tr><td>Yeni Şifreniz Tekrar :</td><td><input type="text" name="yenisifretekrar" class="form-control" placeholder="Buraya yazınız.." /></td></tr>


                                            


  </table>

  <center><button class="btn btn-primary waves-effect" type="submit">ŞİFREYİ DEĞİŞTİR</button></center>
</form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    </body>
    </html>
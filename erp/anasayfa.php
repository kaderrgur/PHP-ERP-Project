<?php
include "admindbbaglanti.php";


if( $giris_yapildimi == 'hayir' ) {
    header("Location: index.php");
    die("HATALI DENEME");
}



?>



<?php include "dbbaglanti.php";
$gelenveri=mysql_fetch_array(mysql_query("SELECT * FROM admin where admin_id=1"));
$gelenverionaylar=mysql_fetch_array(mysql_query("SELECT * FROM onay where onay_id=1"));
 
?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Kurumsal Kaynak Planlaması (ERP)</title>
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

<body class="theme-red">
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Lütfen Bekleyin...</p>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="ARANACAK KELIME...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="anasayfa.php">Kurumsal Kaynak Planlaması (ERP)</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
   
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
   <section>
    <aside id="leftsidebar" class="sidebar">
           <div class="user-info">
                <div class="image">
                    <img src="images/<?php echo "".$gelenveri["admin_foto"].""; ?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b><?php echo "".$gelenveri["admin_adsoyad"].""; ?></b></div>
                    <div class="email"><?php echo "".$gelenveri["admin_email"].""; ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="profil_ayarlari.php" target="I1"><i class="material-icons">person</i>Profil Ayarları</a></li>
                            <li role="separator" class="divider"></li>






                         
                            
                            <li role="separator" class="divider"></li>
                            <li><a href="cikis.php"><i class="material-icons">input</i>Çıkış Yap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">ANA MENÜ</li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>STOK</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                                <a href="stok_liste.php" target="I1">Stokları Listele</a>
                            </li>
                            <li>
                                <a href="stok_giris.php" target="I1">Stok Girişleri</a>
                            </li>
                          

                        </ul>
                    </li>

  <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>FİNANS</span>
                        </a>

						<ul class="ml-menu">

                            <li>
                                <a href="fatura_liste.php" target="I1">Faturaları Listele</a>
                            </li>
                            <li>
                                <a href="fatura_ekle.php" target="I1">Fatura Ekle</a>
                            </li>
                             <li>
                                <a href="fatura_duzenle.php" target="I1">Fatura Düzenle</a>
                            </li>
                           <li>
                                <a href="fatura_sil.php" target="I1">Fatura Sil</a>
                            </li>

                        </ul>

                    </li>
                    <li>
                          <li>
                        <a href="#">
                            <i class="material-icons">layers</i>
                            <span>İNSAN KAYNAKLARI</span>
                        </a>
                    </li>
                    <li>


                    <li>
                        <a href="#">
                            <i class="material-icons">layers</i>
                            <span>SATIN ALMA</span>
                        </a>
                    </li>
                    <li>

   <li>
                        <a href="#">
                            <i class="material-icons">layers</i>
                            <span>ÜRETİM</span>
                        </a>
                    </li>
                    <li>

   <li>
                        <a href="#">
                            <i class="material-icons">layers</i>
                            <span>KALİTE KONTROL</span>
                        </a>
                    </li>
                    <li>

                           <li>
                        <a href="#">
                            <i class="material-icons">layers</i>
                            <span>PROJE</span>
                        </a>
                    </li>

 
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019  -  <a href="javascript:void(0);">Kurumsal Kaynak Planlaması</a>.
                </div>
                <div class="version">
                    <b>Versiyon: </b> 1.0
                </div>
            </div>
          </aside>
       
       </section>

    <section class="content">
        <div class="container-fluid">
            





<?php 
    
$gelenverisayi1=mysql_query("SELECT COUNT(*) FROM `stoklar` WHERE stok_degeri=1");
$gelenverisayi2=mysql_query("SELECT COUNT(*) FROM `stoklar` WHERE stok_degeri=2");
$gelenverisayi3=mysql_query("SELECT COUNT(*) FROM `kategoriler`");
$gelenverisayi4=mysql_query("SELECT COUNT(*) FROM `finans`");


$say1 = mysql_fetch_array($gelenverisayi1);
$say2 = mysql_fetch_array($gelenverisayi2);
$say3 = mysql_fetch_array($gelenverisayi3);
$say4 = mysql_fetch_array($gelenverisayi4);
    
?>





            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">HAMMADDE STOK SAYISI</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo "".$say1[0]."";?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">YARI MAMÜL STOK SAYISI</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo "".$say2[0]."";?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">KATEGORİ SAYISI</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo "".$say3[0]."";?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">FATURA SAYISI</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo "".$say4[0]."";?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            

 <div id="ortasayfa"></div>
<div id="ortasayfa2"></div>

<iframe name="I1" src="stok_liste.php" width="1200" height="700" border="0" frameborder="0">
Tarayıcınız satır içi çerçeveleri desteklemiyor veya şu anda satır içi çerçeveleri göstermek için yapılandırılmamış.
</iframe>
                           
                  

 </section>

 
    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <script src="plugins/node-waves/waves.js"></script>

    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <script src="js/demo.js"></script>

</body>
</html>
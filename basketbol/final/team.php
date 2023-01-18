<?php
          session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Tarihçe</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
     
     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                   <a href="index.php" class=""><img src="imageBasketbol/team-match-img3.png"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <?php
 

                                   if(isset($_SESSION['uye'])){
                                       
                                        echo'<li><a href="index.php">Ana Sayfa</a></li>';
                         echo'<li><a href="blog-post-details.php">Haberler</a></li>';
                         echo'<li><a href="duyurular/duyurular/fixture.php">Canlı Maçlar</a></li>';
                         echo'<li><a href="duyurular/duyurular/takim.php">Takım</a></li>';
                         echo'<li><a href="about-us.php">Oyuncular</a></li>';
                         echo'<li class="active"><a href="team.php">Tarihçe</a></li>';
                         echo'<li><a href="contact.php">Bize Ulaşın</a></li>';
                         echo'<li><a href="profil.php">Profilim</a></li>';
                          echo'<li><a href="cikis.php">Çıkış Yap</a></li>';
                                   }
                                   else{
                                         echo'<li><a href="index.php">Ana Sayfa</a></li>';
                                       echo' <li><a href="blog-post-details.php">Haberler</a></li>';
                                       echo'<li><a href="duyurular/duyurular/fixture.php">Canlı Maçlar</a></li>';
                                       echo'<li><a href="duyurular/duyurular/takim.php">Takım</a></li>';
                         echo'<li><a href="about-us.php">Oyuncular</a></li>';
                         echo'<li class="active"><a href="team.php">Tarihçe</a></li>';
                         echo'<li><a href="contact.php">Bize Ulaşın</a></li>';
                         echo'<li><a href="loginPaneli/GirisYap.php">Giriş Yap</a></li>';
                                        echo' <li><a href="kayitPaneli/kayitPaneli.php">Kayıt Ol</a></li>';
                                   }

                              ?>
                    </ul>
               </div>

          </div>
     </section>

     <section>
          <div class="container">
               <div class="text-center">
                    <h1>Tarihçe</h1>

                    <br>

                    <p class="lead">Basketbol sporunun ülkemizde resmi bir hüviyete sahip olmasını takiben uluslararası temaslar da başlamış ve ilk milli maç 24 Haziran 1936 tarihinde Yunanistan ile oynanmıştır. 7-14 Ağustos 1936 tarihlerinde düzenlenen Berlin Olimpiyat Oyunları’na basketbol branşında da katılmaya karar verilmiş ve aşağıdaki isimlerden oluşan ilk Milli Takım aday kadrosu toplanmıştır. Feridun Vasfi, Kamil, Naili, Hayri (Galatasaray); Orhan, Cemal, Faruk, Şeref (Robert Kolej); Şakalak (Kurtuluş); Ben Habip (İstanbulspor); Habip, Penso, Ben Yakar (Barkhoba). Ancak, ön eleme turunda Mısır’a 33-23 mağlup olan Milli Takımımız, finallere katılmaya hak kazanamamıştır.

O tarihten itibaren ülkedeki gelişmelere bağlı olarak kısa süreli istisnalar haricinde tüm milli faaliyetlere katılınmış, ancak bölgesel organizasyonlar dışında A Milli Takım seviyesinde çok önemli bir başarı elde edilememiştir.

Önceki dönemde hemen her Avrupa Şampiyonası’nda yer alan A Milli Takımımız, 1981 yılında katıldığı Avrupa Şampiyonası sonrasında ne yazık ki 12 yıl boyunca finallere katılma hakkı elde edememiştir. Ay-Yıldızlılarımız 1993’te yeniden şampiyonada yer almaya başlamış ve o tarihten itibaren aralıksız olarak tüm şampiyonalara katılmıştır. 993 sonrasında büyük bir istikrar ve çıkış yakalayan A Milli Erkek Takımımız 1997 yılında İspanya’da düzenlenen Avrupa Şampiyonası’nda 8. olarak son 24 yılın en iyi derecesine imza atmıştır. Fransa’da organize edilen 1999 Avrupa Şampiyonası’nda bir kez daha ilk 8 takım arasında yer alan A Milli Takımımız, performansıyla otoriteler tarafından geleceğin takımı olarak nitelendirilmiştir.

Yükselişini sürdüren A Milli Takımımız, ülkemizin ev sahipliğinde gerçekleştirilen şampiyonalarda, önce 2001 yılında Avrupa ikincisi, daha sonra 2010 yılında Dünya ikincisi unvanlarını kazanırken, bu dönemde erkekler kategorisinde altyapı Avrupa Şampiyonaları’nda elde edilen 2 altın, 4 gümüş ve 6 bronz madalya başarıların sürekli ve kalıcı olacağını ispatlamıştır. A Milli Erkek Takımımız ayrıca 2002 yılından itibaren tüm Dünya Şampiyonası finallerine katılmıştır.

2005 yılından itibaren tüm Avrupa Şampiyonası finallerinde yer alan A Milli Kadın Takımımız ise 2011 yılında kazandığı Avrupa ikinciliği, 2013 yılındaki Avrupa üçüncülüğü, 2012 Londra Olimpiyatları’nda elde ettiği beşincilik ve son olarak da 2016'da kazandığı altıncılık ile tarihi başarılara imza atmış, ayrıca 2012 Avrupa Şampiyonası’nda üçüncü olan Ümit Milli Kız Takımımız, kızlar kategorisinde altyapılardaki ilk madalyamızı kazandırmıştır.

2014 yılında Ümit Erkek Milli Takımımız, Yunanistan’da düzenlenen Ümit Erkekler Avrupa Şampiyonası’nda altın madalyaya uzanırken, Genç Erkek Milli Takımımız da ülkemizin ev sahipliğinde, Konya’da gerçekleştirilen organizasyonu şampiyon olarak tamamladı.</p>
               </div>
          </div>
     </section>

     
     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h4><li><a href="dolarkuru.php">DövizKuru</a></li></h4>
                                    <h2>Merkez'i</h2>
                              </div>
                              <address>
                                   <p>Ankara<br></p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="https://twitter.com/erayyl6" class="fa fa-twitter"></a></li>
                                   <li><a href="https://www.instagram.com/erayyl6" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>İletişim Bilgileri</h2>
                              </div>
                              <address>
                                   <p>0312 456 78 45</p>
                                   <p>erayyalman123@gmail.com</p>
                              </address>

                              <div class="footer_menu">
                                   
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Tüm Haberlerden Haberdar Ol</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form method="post">
                                             <input type="email" class="form-control" placeholder="Email Giriniz.." name="email" id="email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Abone Ol">
                                             <?php
                                                  if(isset($_POST['submit'])) {
                                                            $alert="<script>alert('Email Hesabınıza Abone Olmak İçin Bağlantı Gönderildi.');</script>";
                                                            echo $alert;
                                                  }

                                               ?>
                                        </form>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
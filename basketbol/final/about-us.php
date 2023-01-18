<?php

     session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Oyuncular</title>

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
                         echo'<li class="active"><a href="about-us.php">Oyuncular</a></li>';
                         echo'<li><a href="team.php">Tarihçe</a></li>';
                         echo'<li><a href="contact.php">Bize Ulaşın</a></li>';
                         echo'<li><a href="profil.php">Profilim</a></li>';
                          echo'<li><a href="cikis.php">Çıkış Yap</a></li>';                         
                                   }
                                   else{
                                         echo'<li><a href="index.php">Ana Sayfa</a></li>';
                                       echo' <li><a href="blog-post-details.php">Haberler</a></li>';
                                       echo'<li><a href="duyurular/duyurular/fixture.php">Canlı Maçlar</a></li>';
                                       echo'<li><a href="duyurular/duyurular/takim.php">Takım</a></li>';
                         echo'<li class="active"><a href="about-us.php">Oyuncular</a></li>';
                         echo'<li><a href="team.php">Tarihçe</a></li>';
                         echo'<li><a href="contact.php">Bize Ulaşın</a></li>';
                         echo'<li><a href="loginPaneli/GirisYap.php">Giriş Yap</a></li>';
                                        echo' <li><a href="kayitPaneli/kayitPaneli.php">Kayıt Ol</a></li>';
                                   }

                              ?>
                         
                    </ul>
               </div>

          </div>
     </section>

     

     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-1 col-md-4 col-xs-12 pull-right">
                         <img src="imageBasketbol/IMG-20221227-WA0000.jpg" class="img-responsive img-circle" alt="">
                    </div>

                    <div class="col-md-7 col-xs-12">
                         <div class="about-info">
                              <h2>CENGİZ GERMİYAN</h2>

                              <figure>
                                   <figcaption>
                                        <p>Cengiz Germiyan (d. 7 Aralık 2002), Türk basketbolcudur. Kütahya Dumlupınar Üniversitesi'nde okudu. Okulun Türkiye Liginde'de final oynamasında en büyük rolü oynadı. 10 Numaralı formasıyla profesyonel olduğu 2018'den bugüne kadar 3 kez Türkiye Şampiyonluğu kazandı, defalarca final oynadı, 2 kez de Türkiye'nin finallerinin en değerli oyuncusu seçildi. 3 kez de Türkiye normal sezon MVP'si oldu.Basketbolda yaratıcılığı ve oyun zekası ile tanınan oyunculardandır.</p>

                                        <h6>Cengiz Germiyan, Türkiye'de tüm zamanların en çok triple-double yapan oyuncuları listesinde ilk 10'da yer almaktadır. Aynı zamanda 14 dakika, 33 saniye ile Türkiye tarihinin en hızlı triple-double yapma rekorunun sahibidir.</h6>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section>
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-xs-12">
                         <img src="imageBasketbol/89740246_2737446769625832_7991334096642727756_n.jpg" class="img-responsive img-circle" alt="">
                    </div>

                    <div class="col-md-offset-1 col-md-7 col-xs-12">
                         <div class="about-info">
                              <h2>NİKOLA JOKİC</h2>

                              <figure>
                                   <figcaption>
                                        <p>Nikola Jokic (d. 19 Şubat 1995), pivot pozisyonunda görev alan Sırp profesyonel basketbolcu. National Basketball Association (NBA) takımlarından Denver Nuggets forması giymektedir. 2014 NBA Seçmeleri'nde Denver Nuggets tarafından 2. tur, 41. sırada seçilmiştir. 4 kere NBA All-Star ve 2 kere NBA En Değerli Oyuncu seçildi. Aynı zamanda Sırbistan millî basketbol takımında oynamaktadır. Lakabı ise ''Joker''dir.</p>

                                        <h6>Jokic, NBA'de tüm zamanların en çok triple-double yapan oyuncuları listesinde ilk 10'da yer almaktadır. Aynı zamanda 14 dakika, 33 saniye ile NBA tarihinin en hızlı triple-double yapma rekorunun sahibidir.</h6>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
               </div>
          </div>
     </section>

<section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-1 col-md-4 col-xs-12 pull-right">
                         <img src="imageBasketbol/240715004_1506033526404444_9047133594527681530_n.jpg" class="img-responsive img-circle" alt="">
                    </div>

                    <div class="col-md-7 col-xs-12">
                         <div class="about-info">
                              <h2>JA MORANT</h2>

                              <figure>
                                   <figcaption>
                                        <p>Temetrius Jamel "Ja" Morant[1] (d. 10 Ağustos 1999) National Basketball Association (NBA) takımlarından Memphis Grizzlies'de oynayan Amerikalı profesyonel basketbol oyuncusudur. Oyun kurucu pozisyonunda oynamaktadır. 2019 NBA Seçmelerinde Memphis Grizzlies tarafından 1. turda 2. sıradan seçilmiştir.</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
               </div>
          </div>
     </section>

<section>
          <div class="container">
               <div class="row">
                    <div class="col-md-4 col-xs-12">
                         <img src="imageBasketbol/272228614_137798655375448_7685134941044862831_n.jpg" class="img-responsive img-circle" alt="">
                    </div>

                    <div class="col-md-offset-1 col-md-7 col-xs-12">
                         <div class="about-info">
                              <h2>STEPHEN CURRY</h2>

                              <figure>
                                   <figcaption>
                                        <p>Wardell Stephen Curry II (d. 14 Mart 1988), National Basketball Association (NBA) takımlarından Golden State Warriors forması giyen Amerikalı profesyonel basketbolcudur. 1.91 boyunda 86 kg ağırlığında bulunan Curry, oyun kurucu pozisyonunda görev almaktadır. Fakat Amerikalı oyuncu takımı zorda kaldığında gerektiği zaman Şutör gard pozisyonunda da oynayabilecek kapasiteye sahiptir. 2011 yılında Ayesha Curry ile evlenmiş, Riley ve Ryan Carson adında iki kız çocuğu ve Canon adında bir erkek çocuğu olmuştur.</p>

                                        
                                   </figcaption>
                              </figure>
                         </div>
                    </div>
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
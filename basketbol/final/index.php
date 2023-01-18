<?php
session_start();


?>


<!DOCTYPE html> 
<html lang="en">
<head>

     <title>Ana Sayfa</title>

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
                                       
                                       echo'<li class="active"><a href="index.php">Ana Sayfa</a></li>';
                         echo'<li><a href="blog-post-details.php">Haberler</a></li>';
                         echo'<li><a href="duyurular/duyurular/fixture.php">Canlı Maçlar</a></li>';
                         echo'<li><a href="duyurular/duyurular/takim.php">Takım</a></li>';
                         echo'<li><a href="about-us.php">Oyuncular</a></li>';
                         echo'<li><a href="team.php">Tarihçe</a></li>';
                         echo'<li><a href="contact.php">Bize Ulaşın</a></li>';
                         echo'<li><a href="profil.php">Profilim</a></li>';
                          echo'<li><a href="cikis.php">Çıkış Yap</a></li>';
                                   }
                                   else{
                                         echo'<li class="active"><a href="index.php">Ana Sayfa</a></li>';
                                       echo' <li><a href="blog-post-details.php">Haberler</a></li>';
                                       echo'<li><a href="duyurular/duyurular/fixture.php">Canlı Maçlar</a></li>';
                                       echo'<li><a href="duyurular/duyurular/takim.php">Takım</a></li>';
                         echo'<li><a href="about-us.php">Oyuncular</a></li>';
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

     <!-- HOME -->
     <section id="home">
          <div class="row">
               <div class="owl-carousel owl-theme home-slider">
                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Kanye West bir tweet attı, ortalık fena karıştı! Aldatılma iddiası: Karım Kim Kardashian’ı basketbolcu Chris Paul’la yakaladım
</h1>
                                        <h3>BOŞANMA TAMAM, SKANDALA DEVAM!.</h3>
                                        <a href="blog-post-details.php" class="section-btn btn btn-default">Devamı</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Sinan Güler basketbolculuk kariyerini noktaladı.</h1>
                                        <h3>39 yaşında kariyerini noktaladı.</h3>
                                        <a href="blog-post-details.php" class="section-btn btn btn-default">Devamı</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Basketbolda haftanın programı.</h1>
                                        <h3>13. hafta maçları.</h3>
                                        <a href="blog-post-details.php" class="section-btn btn btn-default">Devamı</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <main>
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="text-center">
                                   <h2>Hakkımızda</h2>

                                   <br>

                                   <p class="lead">Resmi kayıtlara göre ülkemizde basketbol ilk kez 1904 yılında, İstanbul’da, Robert Kolej Spor Salonu’nda (Dodge Gymnasium) oynanmıştır. Ülkemizdeki temelleri ABD’li bir beden eğitimi öğretmeni öncülüğünde Robert Kolej çatısı altında atılan bu sporun tanınması ve yayılması ise sonraki yıllarda Galatasaray Lisesi beden eğitimi öğretmeni Ahmet Robenson’un çabalarıyla gerçekleşmiştir. Türk sporcuların ilk basketbol maçı yapma teşebbüsü de yine Ahmet Robenson’un 1911 yılında Galatasaray Lisesi öğrencilerini örgütlemesiyle gerçekleşmiş, ancak meydana gelen sakatlıkların çokluğu nedeniyle bu girişim yarıda kalmıştır. 1913 yılında Fenerbahçe Spor Kulübü’nün basketbol branşında faaliyet gösterdiğine dair bazı kayıtlar bulunmaktadır. Yine Sarı-Lacivertli kulübün çatısı altında 1919 yılında Amerikalı bir öğretmen nezaretinde yapılan çalışmalar, ilk ciddi teşebbüs olarak kabul edilebilir. 1920 yılında Genç Hıristiyanlar Birliği (YMCA) teşkilatının Türkiye’de temsilcilik açması ile basketbol sporu daha bilinçli yapılmaya ve daha geniş kitlelere ulaşmaya başlarken, bunun sonucunda da ülkemizdeki ilk ciddi basketbol karşılaşması 4 Nisan 1921 tarihinde Cağaloğlu Öğretmen Okulu bahçesinde Amerikalılar ile Türkler arasında oynanmıştır. Bu tarihi maç, az bir farkla “18-14” Amerika takımı lehine sonuçlanmıştır.

</p>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                              <div class="section-title text-center">
                                   <h2>Haber Postları <small></small></h2>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="imageBasketbol/221006042658-02-nba-lebron-james-las-vegas.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i> Admin</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> 18/01/2023 10:30</span>
                                             <span title="Views"><i class="fa fa-eye"></i> 1</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="blog-post-details.php">Kanye West bir tweet attı, ortalık fena karıştı!</a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="blog-post-details.php" class="section-btn btn btn-primary btn-block">Devamı</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="imageBasketbol/Tim-Duncan.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i> Admin</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> 17/06/2023 12:30</span>
                                             <span title="Views"><i class="fa fa-eye"></i> 1</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="blog-post-details.php">Sinan Güler basketbolculuk kariyerini noktaladı.</a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="blog-post-details.php" class="section-btn btn btn-primary btn-block">Devamı</a>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-4 col-sm-4">
                              <div class="courses-thumb courses-thumb-secondary">
                                   <div class="courses-top">
                                        <div class="courses-image">
                                             <img src="imageBasketbol/1737105.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="courses-date">
                                             <span title="Author"><i class="fa fa-user"></i> Admin</span>
                                             <span title="Date"><i class="fa fa-calendar"></i> 16/06/2023 18:00</span>
                                             <span title="Views"><i class="fa fa-eye"></i> 1</span>
                                        </div>
                                   </div>

                                   <div class="courses-detail">
                                        <h3><a href="blog-post-details.php">Basketbolda haftanın programı.</a></h3>
                                   </div>

                                   <div class="courses-info">
                                        <a href="blog-post-details.php" class="section-btn btn btn-primary btn-block">Devamı</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
     </main>


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
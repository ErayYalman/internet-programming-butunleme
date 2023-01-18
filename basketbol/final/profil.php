<?php
        require('veriTabani.php'); 

    $kullanici=$_SESSION['uye'];

    

     $sorgu=$conn->prepare('SELECT * FROM uyeler WHERE kullaniciAdi=?');
     $sorgu->execute(array($kullanici));

     $row =$sorgu->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['kaydet'])){
     $sifre=$_POST['eskiSifre'];
     $sifre=md5($sifre);
if ($_POST['yeniSifre']=="") {
     if($sifre == $row["sifre"]){
          
        $sorgu=$conn->prepare("UPDATE uyeler SET ad = ?, soyad = ?, sifre = ? WHERE kullaniciAdi=? ");
          $md5Sifre=$_POST['yeniSifre'];
          $md5Sifre=md5($md5Sifre);
          $sorgu->execute([$_POST['ad'], $_POST['soyad'], $sifre, $kullanici]);
          echo'</br>';
          echo '<center><div class="alert alert-success">Bilgileriniz Güncellendi!</center></div>';
          header("refresh:2, url=profil.php");


     }else{
               echo'</br>';
         echo '<center><div class="alert alert-danger">Eski Şifeniz Uyuşmuyor!</center></div>';}
}
else {
           if($sifre == $row["sifre"]){
          
        $sorgu=$conn->prepare("UPDATE uyeler SET ad = ?, soyad = ?, sifre = ? WHERE kullaniciAdi=? ");
          $md5Sifre=$_POST['yeniSifre'];
          $md5Sifre=md5($md5Sifre);
          $sorgu->execute([$_POST['ad'], $_POST['soyad'], $md5Sifre, $kullanici]);
          echo'</br>';
          echo '<center><div class="alert alert-success">Bilgileriniz Güncellendi!</center></div>';
          header("refresh:2, url=profil.php");


     }else{
               echo'</br>';
         echo '<center><div class="alert alert-danger">Eski Şifeniz Uyuşmuyor!</center></div>';}
}
}
     

if (isset($_POST['sil'])) {
     $sifre=$_POST['eskiSifre'];
     $sifre=md5($sifre);
     if ($sifre==$row['sifre']) {
          $conn->prepare("DELETE FROM uyeler WHERE kullaniciAdi=?")->execute([$kullanici]);
     session_destroy();
     header('location: index.php');
     }
     else{
          echo"<br><br><br>";

          echo '<center><div class="alert alert-danger">Hesabınızı Silmek İçin Eski Parolanızı Doğru Giriniz!</center></div>';
          
     }
     
}

           

?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Profilim</title>

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
                         echo'<li><a href="team.php">Tarihçe</a></li>';
                         echo'<li><a href="contact.php">Bize Ulaşın</a></li>';
                         echo'<li class="active"><a href="profil.php">Profilim</a></li>';
                          echo'<li><a href="cikis.php">Çıkış Yap</a></li>';
                                   }
                                   else{
                                         echo'<li><a href="index.php">Ana Sayfa</a></li>';
                                       echo' <li><a href="blog-post-details.php">Haberler</a></li>';
                                       echo'<li><a href="duyurular/duyurular/fixture.php">Canlı Maçlar</a></li>';
                                       echo'<li><a href="duyurular/duyurular/takim.php">Takım</a></li>';
                         echo'<li><a href="about-us.php">Oyuncular</a></li>';
                         echo'<li><a href="team.php">Tarihçe</a></li>';
                         echo'<li class="active"><a href="contact.php">Bize Ulaşın</a></li>';
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
                    <h1>PROFİLİM</h1>

                    <br>

                    <p class="lead">Kullanıcı Bilgilerinizi Düzenleyip, Güncelleye Bilirsiniz.</p>
<section id="contact">
          <div class="container">
               
                <div class="col-md-6 col-sm-12">
                    
                         <form id="contact-form" role="form" action="" method="post">

                              <div class="col-md-12 col-sm-12">
         <input type="text" class="form-control" placeholder="AD" name="ad" value="<?php echo $row["ad"]; ?>" required>
                   <input type="text" class="form-control" placeholder="SOYAD" name="soyad" value="<?php echo $row["soyad"]; ?>"  required>
<input type="text" class="form-control" placeholder="KULLANICI ADI" name="kullaniciAdi" value="<?php echo $row["kullaniciAdi"]; ?>" disabled>
                <input type="password" class="form-control" placeholder="ESKİ ŞİFRE" name="eskiSifre" required>
                 <input type="password" class="form-control" placeholder="YENİ ŞİFRE" name="yeniSifre">

                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="kaydet" value="KAYDET">
                                   <input type="submit" class="form-control" name="sil" value="Hesabımı Sil">

                              </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="images/profil resimleri.jpg" class="img-responsive" alt="">
                         </div>
                    </div>
               </div>

                         </form>

               </div>

          </div>
     </section>


     <!-- CONTACT -->
     


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
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
<style type="text/css">
   .say_sabit{
      background-color:green;
      display: inline-block;
      width:50px;
      text-align: center;

   }

   .say_aktif{

      background-color:gray;
      display: inline-block;
      border:1px solid black;
      width:20px;
      text-align: center;
   }
   .say_a{
      background-color:gray;
      display: inline-block;
      width:20px;
      text-align: center;
      border:1px solid black;
   }
   .say_a:hover{
      background-color:#23231f;

   }
   a{
      text-decoration: none;
      color:white;
   }


</style>

<?php
  include("veriTabani.php");

 ?>                  

     



<!DOCTYPE html>
<html lang="tr">
<meta charset="UTF-8">
<head>
<meta charset="UTF-8">
     <title>Haber</title>

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
                         echo'<li class="active"><a href="blog-post-details.php">Haberler</a></li>';
                         echo'<li><a href="duyurular/duyurular/fixture.php">Canlı Maçlar</a></li>';
                         echo'<li><a href="duyurular/duyurular/takim.php">Takım</a></li>';
                         echo'<li><a href="about-us.php">Oyuncular</a></li>';
                         echo'<li><a href="team.php">Tarihçe</a></li>';
                         echo'<li><a href="contact.php">Bize Ulaşın</a></li>';
                         echo'<li><a href="profil.php">Profilim</a></li>';
                          echo'<li><a href="cikis.php">Çıkış Yap</a></li>';
                                   }
                                   else{
                                         echo'<li><a href="index.php">Ana Sayfa</a></li>';
                                       echo' <li class="active"><a href="blog-post-details.php">Haberler</a></li>';
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


     <section>
          <div class="container">
              <h1 style="color: green;" style=""><center>Haberler</center></h1>   
               <hr></hr>
               <br></br>
          </div>

<?php
echo"<meta charset='UTF-8'>";
               $Sayfa   = @ceil($_GET['sayfa']); //5,2 girilirse eğer get o zaman onu tam sayı yapar yanı 5 yapıyoruz bu kod ile
if ($Sayfa < 1) { $Sayfa = 1;} //eğer get değeri yerine girilen sayi 1 den küçükse sayfa değerini 1 yapıyoruz yani 1. sayfaya atıyoruz
$Say   = $conn->query("select * from haberler order by id ASC"); //makale sayısını çekiyoruz

$ToplamVeri   = $Say->rowCount(); //makale sayısını saydırıyoruz

$Limit    = 3; //bir sayfada kaç içerik çıkacağını belirtiyoruz. 

$Sayfa_Sayisi  = ceil($ToplamVeri/$Limit); //toplam veri ile limiti bölerek her toplam sayfa sayısını buluyoruz

if($Sayfa > $Sayfa_Sayisi){$Sayfa = $Sayfa_Sayisi;} //eğer yazılan sayı büyükse eğer toplam sayfa sayısından en son sayfaya atıyoruz kullanıcıyı

$Goster   = $Sayfa * $Limit - $Limit; // sayfa= 2 olsun limit=3 olsun 2*3=6 6-3=3 buranın değeri 2. sayfada 3'dür 3-4-5-6... sayfalarda da aynı işlem yapılıp değer bulunur

$GorunenSayfa   = 5; //altta kaç tane sayfa sayısı görüneceğini belirtiyoruz.


$Makale   = $conn->query("select * from haberler order by id ASC limit $Goster,$Limit"); //yukarda göstere attıgımız değer diyelim ki 3 o zaman 3.'id den başlayarak limit kadar veri ceker.

$MakaleAl = $Makale->fetchAll(PDO::FETCH_ASSOC);

?>

<div id="Makale">

   <?php foreach($MakaleAl as $MakaleCek){?>

   <div class="Makale">
               <div class='container'>
      <h1><?=$MakaleCek["baslik"]?></h1> 
                           
               
                      <p class='lead'>
                    <i class='fa fa-user'></i> Admin &nbsp;&nbsp;&nbsp;
                    <i class='fa fa-calendar'></i> 18/01/2023 18:30 &nbsp;&nbsp;&nbsp;
                    <i class='fa fa-eye'></i> 1
               </p>     

      <span><?=$MakaleCek["konu"]?></span>


               <br>
               <br>
               <hr>
                          
                        </div>
                    </div>
                </div>
   </div>
   <?php } echo"<center>";?>

   <?php if($Sayfa > 1){?>

   <span class="say_sabit"><a href="blog-post-details.php?sayfa=1">İlk</a></span> <!--1. Sayfaya gider-->

   <div class="say_sabit"><a href="blog-post-details.php?sayfa=<?=$Sayfa - 1?>">Önceki</a></div> <!--Bir Önceki Sayfaya Gitmek İçin Sayfa Değerini 1 eksiltiyoruz-->

   <?php } ?>

   <?php 

    for($i = $Sayfa - $GorunenSayfa; $i < $Sayfa + $GorunenSayfa +1; $i++){ // i kaç ise o sayıdan başlar 1-2-3-4-5 yazmaya. mesela sayfa 7deyiz 7 - 5 = 2'dir 2 sayfadan sonra sayfalamaya başlar yani 2-3-4-5-6-7 gibi bu aynı mantıkla devam eder.


      if($i > 0 and $i <= $Sayfa_Sayisi){

         if($i == $Sayfa){

            echo '<span class="say_aktif">'.$i.'</span>'; //eğer i ile sayfa değerleri aynıysa o zaman onu aktif css'si ekle

         }else{

            echo '<a class="say_a" href="blog-post-details.php?sayfa='.$i.'">'.$i.'</a>'; //eğer aynı değilse normal listele

         }

      }

   }
   ?>

   <?php if($Sayfa != $Sayfa_Sayisi){?>

   <div class="say_sabit"><a href="blog-post-details.php?sayfa=<?=$Sayfa + 1?>">Sonraki</a></div><!--Bir Sonra ki Sayfaya Gitmek için sayfa değerini 1 artırıyoruz.-->

   <div class="say_sabit"><a href="blog-post-details.php?sayfa=<?=$Sayfa_Sayisi?>">Son</a></div><!--Buldugumuz Toplam Sayfa Sayısını buraya cekiyoruz tıklandıgında en son sayfaya gider-->

   <?php } ?>



                    </div>
               </div>
          </div>
     </section>
                 
<section class="section-background">
          <div class="container">
               <div class="row">
                         <div class="form">
                              <form method="get">
                                   <div class="form-group">
                                        <label class="control-label">Haber Ara</label>

                                        <div class="input-group">
                                             <input type="text" class="form-control" name="aranan" placeholder="Haber Başlığını Giriniz..">
                                             <span class="input-group-btn">
                             <input type="submit" class="form-control" name="ara" id="form-submit" style='background:green; color:white; width: 100px; height:30px; font-family:arial;' value="Ara!">
                                             </span>
                                        </div>
                                   </div>
                              </form>
                         </div>

                         <br>
                         
                    </div>
</div></div></section>


<?php
 if(isset($_GET['ara'])){

 $kelime=$_GET['aranan'];
 
 if(!$kelime){
     echo"<center>";
  echo "Arama yapmak için haber başlığını giriniz!";
  echo"</center>";
 }else{
 
 $sorgu=$conn->prepare("SELECT * FROM haberler WHERE baslik LIKE :baslik");
 $sorgu->execute(array(':baslik' => '%'.$kelime.'%'));

 if($sorgu->rowCount()){
  
  echo $kelime."Kelimesine ait(".$sorgu->rowCount().") adet sonuç bulundu";
 
  foreach($sorgu as $row){
     ?>
   <center>
  <br>
  <br>
  <div class="Makale">
               <div class='container'>
      <h1><?=$row["baslik"]?></h1> 
                           
               
                      <p class='lead'>
                    <i class='fa fa-user'></i> Admin &nbsp;&nbsp;&nbsp;
                    <i class='fa fa-calendar'></i> 18/01/2023 18:30 &nbsp;&nbsp;&nbsp;
                    <i class='fa fa-eye'></i> 1
               </p>     

      <span><?=$row["konu"]?></span>


               <br>
               <br>
               <hr>
                          
                        </div>
                    </div>
                </div>
   </div>
</center>
<?php
 }

 }else{
  echo "Aranan kelimeye ait bir veri bulunmadı";
 }  
 
 }


    }

?> 


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
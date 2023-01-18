<?php
session_start();


?>


<!DOCTYPE html>
					<html>
					<head>
						<title>Döviz Kuru</title>
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
					<body>
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
                         echo'<li><a href="profil.php">Profilim</a></li>';
                          echo'<li><a href="cikis.php">Çıkış Yap</a></li>';
                                   }
                                   else{
                                         echo'<li><a href="index.php">Ana Sayfa</a></li>';
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
<?php 
				
					$kur = simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");

foreach ($kur -> Currency as $cur) {
	if ($cur["Kod"] == "USD") {
		$usdAlis  = $cur -> ForexBuying;
		$usdSatis = $cur -> ForexSelling;
	}

	if ($cur["Kod"] == "EUR") {
		$eurAlis  = $cur -> ForexBuying;
		$eurAlis = $cur -> ForexSelling;
	}
}
 ?>
					
					
				<div style="width:15%">
                <h3>Döviz Kuru</h3>
                <hr>
                <b>USD Alış: </b> <?php echo $usdAlis; ?> <br>
                <b>USD Satış: </b> <?php echo $usdSatis; ?>
                <hr>
                <b>EURO Alış: </b> <?php echo $eurAlis; ?> <br>
                <b>EURO Satış: </b> <?php echo $eurAlis; ?>
                </div>

              
               
<script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
               
					</body>
					</html>
	
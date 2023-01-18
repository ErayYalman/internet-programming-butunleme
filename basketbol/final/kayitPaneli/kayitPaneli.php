<?php
	require_once '../veriTabani.php';
		if ($_POST) {
			$ad=$_POST['ad'];
			$soyad=$_POST['soyad'];
			$kullaniciAdi=$_POST['kullaniciAdi'];
			$sifre1=$_POST['sifre1'];
			$sifre2=$_POST['sifre2'];
		if($sifre1==$sifre2){
				$sifre1= md5($sifre1);
			$gelenKullanciAdiSorgusu=$conn->prepare("SELECT * FROM uyeler WHERE kullaniciAdi=? LIMIT 1 ");
			$gelenKullanciAdiSorgusu->execute([$kullaniciAdi]);
			$gelenKullanciAdiSorgusuSayisi= $gelenKullanciAdiSorgusu->rowCount();
				if($gelenKullanciAdiSorgusuSayisi>0){
					echo '<center><div class="alert alert-danger">Kullanıcı Adı Zaten Kayıtlı!</center></div>';
				}else{
					$kayitSorgusu=$conn->prepare("INSERT INTO uyeler (ad, soyad, kullaniciAdi, sifre) VALUES (?, ?, ?, ?) ");
			$kayitSorgusu->execute([$ad, $soyad, $kullaniciAdi, $sifre1]);
			$kayitSorgusuSayisi= $kayitSorgusu->rowCount();
				if($kayitSorgusuSayisi>0){
					echo '</br>';
					echo '<center><div class="alert alert-success">Kayıt Başarılı Lütfen Giriş Yapınız!</center></div>';
				}else{
					echo '</br>';
					echo '<center><div class="alert alert-danger">Kayıt İşlemi Sırasında Hata!, Lütfen Tekrar Deneyiniz.</center></div>';
				}
				}

		}else{
			echo '</br>';
			echo '<center><div class="alert alert-danger">Şifreler Aynı Değil!</center></div>';
		}

			
		}
?>


<!DOCTYPE html>
<html lang="en">
<head>

     <title>Kayıt Ol</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/owl.carousel.css">
     <link rel="stylesheet" href="../css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/style.css">

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
                    <a href="../index.php" class=""><img src="../imageBasketbol/team-match-img3.png"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="../index.php">Ana Sayfa</a></li>
                         <li><a href="../blog-post-details.php">Haberler</a></li>
                         <li><a href="../duyurular/duyurular/fixture.php">Canlı Maçlar</a></li>
                         <li><a href="../duyurular/duyurular/takim.php">Takım</a></li>
                         <li><a href="../about-us.php">Oyuncular</a></li>
                         <li><a href="../team.php">Tarihçe</a></li>  
                         <li><a href="../contact.php">Bize Ulaşın</a></li>
                         <li><a href="../loginPaneli/GirisYap.php">Giriş Yap</a></li>
                         <li class="active"><a href="kayitPaneli.php">Kayıt Ol</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- SCRIPTS -->
     <script src="../js/jquery.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/owl.carousel.min.js"></script>
     <script src="../js/smoothscroll.js"></script>
     <script src="../js/custom.js"></script>

</body>
</html>






<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('../imageBasketbol/related-articel-img3.jpg');">
			<div class="wrap-login100">
				<form method="POST" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Kayıt Ol
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="ad" placeholder="AD">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="soyad" placeholder="SOYAD">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="kullaniciAdi" placeholder="KULLANICI ADI">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="sifre1" placeholder="ŞİFRE">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="sifre2" placeholder="ŞİFRE TEKRAR">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							KAYIT OL
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



</body>
</html>


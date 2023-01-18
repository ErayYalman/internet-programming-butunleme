<?php 
  require_once '../veriTabani.php';

if($_POST){

	$kullaniciAdi=$_POST['username'];
	$sifre=md5($_POST['pass']);

	if($kullaniciAdi !="" and $sifre !="") {


	$user = $conn->prepare('SELECT * FROM uyeler WHERE kullaniciAdi =? and sifre=?');
	  $user->execute([$kullaniciAdi, $sifre]);
	  $kontrol = $user->rowCount();
	  if ($kontrol > 0) {
	  	
			$_SESSION['uye']=$kullaniciAdi;

	  		echo '</br>';
	  	echo '<center><div class="alert alert-success">Giriş Başarılı!</center></div>';
	  	header("refresh:2, url=../index.php");
	  		}
	  else{
	  	
	  		echo '</br>';
	  	echo '<center><div class="alert alert-danger">Bu Bilgilere Ait Kullanıcı Bulunamadı!</center></div>';	
	}
	  
}
}
?>


<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>

     <title>Giriş Yap</title>

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
                         <li ><a href="../contact.php">Bize Ulaşın</a></li>
                         <li class="active"><a href="GirisYap.php">Giriş Yap</a></li>
                         <li><a href="../kayitPaneli/kayitPaneli.php">Kayıt Ol</a></li>
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
		<div class="container-login100" style="background-image: url('images/section-post-img.jpg');">
			<div class="wrap-login100">
				<form method="post" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>


					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

						

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="KULLANICI ADI" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="ŞİFRE" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="giris">
							GİRİŞ YAP
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	



</body>
</html>



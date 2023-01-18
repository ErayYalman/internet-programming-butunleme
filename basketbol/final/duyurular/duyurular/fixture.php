<?php
    session_start();
        if(isset($_SESSION['uye'])){
            ?>
            <!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../../css/bootstrap.min.css">
     <link rel="stylesheet" href="../../css/font-awesome.min.css">
     <link rel="stylesheet" href="../../css/owl.carousel.css">
     <link rel="stylesheet" href="../../css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../../css/style.css">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Canlı Maçlar</title>

    <!-- Css Files -->

    <link href="sitil.css" rel="stylesheet">
    
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
                    <a href="../../index.php" class=""><img src="../../imageBasketbol/team-match-img3.png"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                           <li><a href="../../index.php">Ana Sayfa</a></li>
                         <li><a href="../../blog-post-details.php">Haberler</a></li>
                         <li class="active"><a href="fixture.php">Canlı Maçlar</a></li>
                         <li><a href="takim.php">Takım</a></li>
                         <li><a href="../../about-us.php">Oyuncular</a></li>
                         <li><a href="../../team.php">Tarihçe</a></li>
                         <li ><a href="../../contact.php">Bize Ulaşın</a></li>
                         <li><a href="../../profil.php">Profilim</a></li>
                         <li><a href="../../cikis.php">Çıkış Yap</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- SCRIPTS -->
     <script src="../../js/jquery.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
     <script src="../../js/owl.carousel.min.js"></script>
     <script src="../../js/smoothscroll.js"></script>
     <script src="../../js/custom.js"></script>
    


        <!--// SubHeader \\-->
        <div class="sportsmagazine-subheader">
            <span class="subheader-transparent"></span>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Maçlar</h1>
                    </div>
                    <div class="col-md-12">
                        <ul class="sportsmagazine-breadcrumb"> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
 
                        <div class="col-md-12">
                            <div class="sportsmagazine-fixture sportsmagazine-fixture-list">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <div class="sportsmagazine-fixture-wrap">
                                            <div class="sportsmagazine-teams-match">
                                                <div class="sportsmagazine-first-team">
                                                    <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                                    <div class="sportsmagazine-first-team-info">
                                                        <h6><a href="404.html">Yorkshire</a></h6>
                                                        <span>Bepop Institute</span>
                                                    </div>
                                                </div>
                                                <div class="sportsmagazine-match-view">
                                                    <h5>Pool Match # 1</h5>
                                                    <span>VS</span>
                                                </div>
                                                <div class="sportsmagazine-second-team">
                                                    <figure><img src="extra-images/team-match-img2.png" alt=""></figure>
                                                    <div class="sportsmagazine-second-team-info">
                                                        <h6><a href="404.html">Sharks Club</a></h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-buy-ticket">
                                                <div class="sportsmagazine-buy-ticket-text">
                                                    <h5>Country Durham, UK</h5>
                                                    <time datetime="2008-02-14 20:00">August 2st, 2023 <span>@ 9:00 PM</span></time>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="sportsmagazine-fixture-wrap">
                                            <div class="sportsmagazine-teams-match">
                                                <div class="sportsmagazine-first-team">
                                                    <figure><img src="extra-images/team-match-img3.png" alt=""></figure>
                                                    <div class="sportsmagazine-first-team-info">
                                                        <h6><a href="404.html">Yorkshire</a></h6>
                                                        <span>Bepop Institute</span>
                                                    </div>
                                                </div>
                                                <div class="sportsmagazine-match-view">
                                                    <h5>Pool Match # 2</h5>
                                                    <span>VS</span>
                                                </div>
                                                <div class="sportsmagazine-second-team">
                                                    <figure><img src="extra-images/team-match-img4.png" alt=""></figure>
                                                    <div class="sportsmagazine-second-team-info">
                                                        <h6><a href="404.html">Sharks Club</a></h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-buy-ticket">
                                                <div class="sportsmagazine-buy-ticket-text">
                                                    <h5>Country Durham, UK</h5>
                                                    <time datetime="2008-02-14 20:00">August 4st, 2023 <span>@ 9:00 PM</span></time>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="sportsmagazine-fixture-wrap">
                                            <div class="sportsmagazine-teams-match">
                                                <div class="sportsmagazine-first-team">
                                                    <figure><img src="extra-images/team-match-img2.png" alt=""></figure>
                                                    <div class="sportsmagazine-first-team-info">
                                                        <h6><a href="404.html">Yorkshire</a></h6>
                                                        <span>Bepop Institute</span>
                                                    </div>
                                                </div>
                                                <div class="sportsmagazine-match-view">
                                                    <h5>Pool Match # 3</h5>
                                                    <span>VS</span>
                                                </div>
                                                <div class="sportsmagazine-second-team">
                                                    <figure><img src="extra-images/team-match-img3.png" alt=""></figure>
                                                    <div class="sportsmagazine-second-team-info">
                                                        <h6><a href="404.html">Sharks Club</a></h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-buy-ticket">
                                                <div class="sportsmagazine-buy-ticket-text">
                                                    <h5>Country Durham, UK</h5>
                                                    <time datetime="2008-02-14 20:00">August 6st, 2023 <span>@ 9:00 PM</span></time>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="sportsmagazine-fixture-wrap">
                                            <div class="sportsmagazine-teams-match">
                                                <div class="sportsmagazine-first-team">
                                                    <figure><img src="extra-images/team-match-img4.png" alt=""></figure>
                                                    <div class="sportsmagazine-first-team-info">
                                                        <h6><a href="404.html">Yorkshire</a></h6>
                                                        <span>Bepop Institute</span>
                                                    </div>
                                                </div>
                                                <div class="sportsmagazine-match-view">
                                                    <h5>Pool Match # 4</h5>
                                                    <span>VS</span>
                                                </div>
                                                <div class="sportsmagazine-second-team">
                                                    <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                                    <div class="sportsmagazine-second-team-info">
                                                        <h6><a href="404.html">Sharks Club</a></h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-buy-ticket">
                                                <div class="sportsmagazine-buy-ticket-text">
                                                    <h5>Country Durham, UK</h5>
                                                    <time datetime="2008-02-14 20:00">August 10st, 2023 <span>@ 9:00 PM</span></time>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="sportsmagazine-fixture-wrap">
                                            <div class="sportsmagazine-teams-match">
                                                <div class="sportsmagazine-first-team">
                                                    <figure><img src="extra-images/team-match-img3.png" alt=""></figure>
                                                    <div class="sportsmagazine-first-team-info">
                                                        <h6><a href="404.html">Yorkshire</a></h6>
                                                        <span>Bepop Institute</span>
                                                    </div>
                                                </div>
                                                <div class="sportsmagazine-match-view">
                                                    <h5>Pool Match # 5</h5>
                                                    <span>VS</span>
                                                </div>
                                                <div class="sportsmagazine-second-team">
                                                    <figure><img src="extra-images/team-match-img2.png" alt=""></figure>
                                                    <div class="sportsmagazine-second-team-info">
                                                        <h6><a href="404.html">Sharks Club</a></h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-buy-ticket">
                                                <div class="sportsmagazine-buy-ticket-text">
                                                    <h5>Country Durham, UK</h5>
                                                    <time datetime="2008-02-14 20:00">August 17st, 2023 <span>@ 9:00 PM</span></time>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="sportsmagazine-fixture-wrap">
                                            <div class="sportsmagazine-teams-match">
                                                <div class="sportsmagazine-first-team">
                                                    <figure><img src="extra-images/team-match-img4.png" alt=""></figure>
                                                    <div class="sportsmagazine-first-team-info">
                                                        <h6><a href="404.html">Yorkshire</a></h6>
                                                        <span>Bepop Institute</span>
                                                    </div>
                                                </div>
                                                <div class="sportsmagazine-match-view">
                                                    <h5>Pool Match # 6</h5>
                                                    <span>VS</span>
                                                </div>
                                                <div class="sportsmagazine-second-team">
                                                    <figure><img src="extra-images/team-match-img3.png" alt=""></figure>
                                                    <div class="sportsmagazine-second-team-info">
                                                        <h6><a href="404.html">Sharks Club</a></h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-buy-ticket">
                                                <div class="sportsmagazine-buy-ticket-text">
                                                    <h5>Country Durham, UK</h5>
                                                    <time datetime="2008-02-14 20:00">August 21st, 2023 <span>@ 9:00 PM</span></time>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="sportsmagazine-fixture-wrap">
                                            <div class="sportsmagazine-teams-match">
                                                <div class="sportsmagazine-first-team">
                                                    <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                                    <div class="sportsmagazine-first-team-info">
                                                        <h6><a href="404.html">Yorkshire</a></h6>
                                                        <span>Bepop Institute</span>
                                                    </div>
                                                </div>
                                                <div class="sportsmagazine-match-view">
                                                    <h5>Pool Match # 7</h5>
                                                    <span>VS</span>
                                                </div>
                                                <div class="sportsmagazine-second-team">
                                                    <figure><img src="extra-images/team-match-img2.png" alt=""></figure>
                                                    <div class="sportsmagazine-second-team-info">
                                                        <h6><a href="404.html">Sharks Club</a></h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-buy-ticket">
                                                <div class="sportsmagazine-buy-ticket-text">
                                                    <h5>Country Durham, UK</h5>
                                                    <time datetime="2008-02-14 20:00">August 24st, 2023 <span>@ 9:00 PM</span></time>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-md-12">
                                        <div class="sportsmagazine-fixture-wrap">
                                            <div class="sportsmagazine-teams-match">
                                                <div class="sportsmagazine-first-team">
                                                    <figure><img src="extra-images/team-match-img2.png" alt=""></figure>
                                                    <div class="sportsmagazine-first-team-info">
                                                        <h6><a href="404.html">Yorkshire</a></h6>
                                                        <span>Bepop Institute</span>
                                                    </div>
                                                </div>
                                                <div class="sportsmagazine-match-view">
                                                    <h5>Pool Match # 8</h5>
                                                    <span>VS</span>
                                                </div>
                                                <div class="sportsmagazine-second-team">
                                                    <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                                    <div class="sportsmagazine-second-team-info">
                                                        <h6><a href="404.html">Sharks Club</a></h6>
                                                        <span>Marine College</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sportsmagazine-buy-ticket">
                                                <div class="sportsmagazine-buy-ticket-text">
                                                    <h5>Country Durham, UK</h5>
                                                    <time datetime="2008-02-14 20:00">August 26st, 2023 <span>@ 9:00 PM</span></time>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            

  </body>
</html>
<?php
           } 
           else{
            ?>
            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../../css/bootstrap.min.css">
     <link rel="stylesheet" href="../../css/font-awesome.min.css">
     <link rel="stylesheet" href="../../css/owl.carousel.css">
     <link rel="stylesheet" href="../../css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../../css/style.css">

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
                    <a href="../../index.php" class=""><img src="../../imageBasketbol/team-match-img3.png"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                           <li><a href="../../index.php">Ana Sayfa</a></li>
                         <li><a href="../../blog-post-details.php">Haberler</a></li>
                         <li class="active"><a href="fixture.php">Canlı Maçlar</a></li>
                         <li ><a href="takim.php">Takım</a></li>
                         <li><a href="../../about-us.php">Oyuncular</a></li>
                         <li><a href="../../team.php">Tarihçe</a></li>
                         <li ><a href="../../contact.php">Bize Ulaşın</a></li>
                         <li ><a href="../../loginPaneli/GirisYap.php">Giriş Yap</a></li>
                         <li><a href="../../kayitPaneli/kayitPaneli.php">Kayıt Ol</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- SCRIPTS -->
     <script src="../../js/jquery.js"></script>
     <script src="../../js/bootstrap.min.js"></script>
     <script src="../../js/owl.carousel.min.js"></script>
     <script src="../../js/smoothscroll.js"></script>
     <script src="../../js/custom.js"></script>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/>   
     <h5><center><div class="alert alert-danger">Canlı Maçları Görebilmek İçin Lütfen Giriş Yapın!</center></div></h5>

</body>
</html>
<?php
    
  }
 ?> 
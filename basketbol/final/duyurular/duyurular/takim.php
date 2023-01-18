<?php   
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
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
    <title>Takımlar</title>

    <!-- Css Files -->



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SportsMagazine Home Page</title>

    <!-- Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="css/fancybox.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/chosen.html"> 

    <link rel="stylesheet" href="sitil.css" >
    
  </head>
  <body>
    <body style="background-color:gainsboro;"></body>

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
                         <li ><a href="fixture.php">Canlı Maçlar</a></li>
                         <li class="active"><a href="takim.php">Takım</a></li>
                         <li><a href="../../about-us.php">Oyuncular</a></li>
                         <li><a href="../../team.php">Tarihçe</a></li>
                         <li ><a href="../../contact.php">Bize Ulaşın</a></li>

                            <?php
                                    if(isset($_SESSION['uye'])){
                                        echo'<li><a href="../../profil.php">Profilim</a></li>';
                                        echo'<li><a href="../../cikis.php">Çıkış Yap</a></li>';

                                    }else{ echo'<li><a href="../../loginPaneli/GirisYap.php">Giriş Yap</a></li>';
                                        echo'<li><a href="../../kayitPaneli/kayitPaneli.php">Kayıt Ol</a></li>';
                                    }

                            ?>

                         
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
   
            

        
		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">
                        <!--// Content \\-->
                      <center><div class="col-md-8"></center>


                            <!--// Latest Match Result \\-->
                            
                            <div class="sportsmagazine-match-result">
                                <div class="sportsmagazine-match-title">
                                    <h2><font color="white">Latest Match Result</h2></font>
                                    <span><font color="white">Saturday, March 24th, 2022</span></font>
                                </div>
                                <ul>
                                    <li>
                                        <img src="extra-images/latest-result-logo-1.png" alt="">
                                        <h4><a>Yorkshire</a></h4>
                                        <span>03 Mark Baily (21)</span>
                                    </li>
                                    <li class="sportsmagazine-match-score">
                                        <h5>FINAL SCORE</h5>
                                        <p><strong class="sportsmagazine-color">79</strong> <small>:</small> 73</p>
                                    </li>
                                    <li>
                                        <img src="extra-images/latest-result-logo-2.png" alt="">
                                        <h4><a>Sharks Club</a></h4>
                                        <span>03 Mark Baily (21)</span>
                                    </li>
                                </ul>
                            </div>

                            <!--// Latest Match Result \\-->
                            
                            <!--// Widget TeamRanking \\-->
                            <div class="widget widget_team_ranking">
                                <center><div class="sportsmagazine-fancy-title"><h2>Team Rankings</h2></div></center>
                                <div class="ranking-title-table">
                                    <ul class="ranking-title-row">
                                        <li>Team Rank</li>
                                        <li>M</li>
                                        <li>W</li>
                                        <li>PTS</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>1</li>
                                        <li> <img src="extra-images/ranking-widget-flag-1.png" alt=""> <div class="ranking-logo"><span>L.A Pirates</span> <small>Bebop Institute</small> </div> </li>
                                        <li>08</li>
                                        <li>08</li>
                                        <li>16</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>2</li>
                                        <li> <img src="extra-images/ranking-widget-flag-2.png" alt=""> <div class="ranking-logo"><span>Ocean Kings</span> <small>Icarus College</small> </div> </li>
                                        <li>08</li>
                                        <li>07</li>
                                        <li>14</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>3</li>
                                        <li> <img src="extra-images/ranking-widget-flag-3.png" alt=""> <div class="ranking-logo"><span>Red Wings</span> <small>Marine College</small> </div> </li>
                                        <li>07</li>
                                        <li>07</li>
                                        <li>14</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>4</li>
                                        <li> <img src="extra-images/ranking-widget-flag-4.png" alt=""> <div class="ranking-logo"><span>Lucky Clovers</span> <small>Elric Bros School</small> </div> </li>
                                        <li>07</li>
                                        <li>06</li>
                                        <li>12</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>5</li>
                                        <li> <img src="extra-images/ranking-widget-flag-5.png" alt=""> <div class="ranking-logo"><span>Draconians</span> <small>Atlantic School</small> </div> </li>
                                        <li>06</li>
                                        <li>05</li>
                                        <li>10</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>6</li>
                                        <li> <img src="extra-images/ranking-widget-flag-6.png" alt=""> <div class="ranking-logo"><span>Bloody Wave</span> <small>Marine College</small> </div> </li>
                                        <li>06</li>
                                        <li>04</li>
                                        <li>08</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>7</li>
                                        <li> <img src="extra-images/ranking-widget-flag-7.png" alt=""> <div class="ranking-logo"><span>Ocean Kings</span> <small>St. Patrick’s Institute</small> </div> </li>
                                        <li>06</li>
                                        <li>04</li>
                                        <li>08</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>8</li>
                                        <li> <img src="extra-images/ranking-widget-flag-2.png" alt=""> <div class="ranking-logo"><span>Sharks</span> <small>Icarus College</small> </div> </li>
                                        <li>06</li>
                                        <li>02</li>
                                        <li>04</li>
                                    </ul>
                                </div>
                            </div>
                            <!--// Widget TeamRanking \\-->

                            
<!--// Widget Next Match \\-->
                            <div class="widget widget_next_match">
                                <center><div class="sportsmagazine-fancy-title"><h2>Next Match</h2></div></center>
                                <div class="widget_next_match_title">
                                    <h1>Championship Quarter Finals</h1>
                                    <span>Saturday, May 17th, 2022</span>
                                </div>
                                <ul>
                                    <li>
                                        <img src="extra-images/widget-next-match-logo-1.png" alt="">
                                        <h6><a>Los Angeles Lakers</a></h6>
                                        <small>Paddy's Institute</small>
                                    </li>
                                    <li>
                                        <div class="widget_next_match_option">
                                            <h6>09:00 pm</h6>
                                            <small>Madison Stadium</small>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="extra-images/widget-next-match-logo-2.png" alt="">
                                        <h6><a>Combine</a></h6>
                                        <small>ST Paddy's Institute</small>
                                    </li>
                                </ul>                               
  </body>

</html>
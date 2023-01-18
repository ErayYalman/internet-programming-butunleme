<?php
     session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>

     <title>Haberler</title>

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
                         echo'<li class="active"><a href="blog-posts.php">Haberler</a></li>';
                         echo'<li><a href="duyurular/duyurular/fixture.php">Canlı Maçlar</a></li>';
                         echo'<li><a href="duyurular/duyurular/takim.php">Takım</a></li>';
                         echo'<li><a href="about-us.php">Oyuncular</a></li>';
                         echo'<li><a href="team.php">Tarihçe</a></li>';
                         echo'<li><a href="contact.php">Bize Ulaşın</a></li>';
                         echo'<li><a href="profil.php">Profilim</a></li>';
                          echo'<li><a href="cikis.php">Çıkış Yap</a></li>';
                                   }
                                   else{
                                         echo'<li ><a href="index.php">Ana Sayfa</a></li>';
                                       echo' <li class="active"><a href="blog-posts.php">Haberler</a></li>';
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
               <div class="text-center">
                    <h1>Haber Postları</h1>

                    <br>

                    <p class="lead"></p>
               </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">
               <div class="row">
                    <div class="col-lg-3 pull-right col-xs-12">
                         <div class="form">
                              <form action="#">
                                   <div class="form-group">
                                        <label class="control-label">Haber Ara</label>

                                        <div class="input-group">
                                             <input type="text" class="form-control" placeholder="Search for...">
                                             <span class="input-group-btn">
                                                  <button class="btn btn-default" type="button">Ara!</button>
                                             </span>
                                        </div>
                                   </div>
                              </form>
                         </div>

                         <br>

                         <label class="control-label"></label>

                         <ul class="list">
                              <li><a href="blog-post-details.php">Kanye West bir tweet attı, ortalık fena karıştı!.</a></li>
                              <li><a href="blog-post-details.php">Sinan Güler basketbolculuk kariyerini noktaladı.</a></li>
                              <li><a href="blog-post-details.php">Basketbolda haftanın programı.</a></li>
                         </ul>
                   

                         

                         
                    </div>

                    <div class="col-lg-9 col-xs-12">
                         <div class="row">
                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="imageBasketbol/221006042658-02-nba-lebron-james-las-vegas.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.php">Kanye West bir tweet attı, ortalık fena karıştı!</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.php" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                <img src="imageBasketbol/Tim-Duncan.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.php">Sinan Güler basketbolculuk kariyerini noktaladı.</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.php" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="imageBasketbol/1737105.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.php">Basketbolda haftanın programı.</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.php" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="imageBasketbol/michael-jordan-celebrates-archive.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.php" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="imageBasketbol/Basketball_World_Cup_2010_Turkey2.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.php">Tempora molestiae, iste, consequatur unde sint praesentium!</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.php" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-sm-6">
                                   <div class="courses-thumb courses-thumb-secondary">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="imageBasketbol/1447480.jpg" class="img-responsive" alt="">
                                             </div>
                                             <div class="courses-date">
                                                  <span title="Author"><i class="fa fa-user"></i> John Doe</span>
                                                  <span title="Date"><i class="fa fa-calendar"></i> 12/06/2020 10:30</span>
                                                  <span title="Views"><i class="fa fa-eye"></i> 114</span>
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="blog-post-details.php">A voluptas ratione, error provident distinctio, eaque id officia?</a></h3>
                                        </div>

                                        <div class="courses-info">
                                             <a href="blog-post-details.php" class="section-btn btn btn-primary btn-block">Read More</a>
                                        </div>
                                   </div>
                              </div>
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

     <div class="modal fade bs-example-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         <h4 class="modal-title" id="gridSystemModalLabel">Book Now</h4>
                    </div>
                    
                    <div class="modal-body">
                         <form action="#" id="contact-form">
                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up location" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return location" required>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Pick-up date/time" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Return date/time" required>
                                   </div>
                              </div>
                              <input type="text" class="form-control" placeholder="Enter full name" required>

                              <div class="row">
                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter email address" required>
                                   </div>

                                   <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Enter phone" required>
                                   </div>
                              </div>
                         </form>
                    </div>

                    <div class="modal-footer">
                         <button type="button" class="section-btn btn btn-primary">Book Now</button>
                    </div>
               </div>
          </div>
     </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>

<?php
session_start();
 include("veri.php");

    if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
        header("Location: cikis.php");
    }
    ?>
<!DOCTYPE html>
<html lang="tr">
<meta charset="UTF-8">

<head>
    <meta charset="UTF-8">
    <title>Haberler admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        
            <div class="text-center pb-2">

                <H1>HABERLER ADMİN</H1>
            </div>
 <!DOCTYPE html>
 <html lang="tr">
 <meta charset="UTF-8">
<html>
<head>
    <meta charset="UTF-8">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000000;
  color: white;
  word-wrap: break-word;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>İd</th>
    <th>Baslik</th>
    <th>Konu</th>
    <th>Modify</th>
  </tr>
  <?php    
  echo"<meta charset='UTF-8'>";
        if (isset($_POST['bil'])) {
        $baslk = $_POST["baslik"];
        $knu = $_POST["konu"];
$baslk=addslashes($baslk);
$knu=addslashes($knu);
        $sorgu = $baglan->query("insert into haberler (baslik,konu) values ('$baslk','$knu')");
        echo "<script> alert('Haber başarıyla eklendi!');
        window.location.href='blog.php'; </script>";
    }

  $sec="select*from haberler";
  $sonuc=$baglan->query($sec);

  if($sonuc->num_rows>0)
  {
    while($cek=$sonuc->fetch_assoc())
    {
       echo "
       <tr>
       <td>".$cek['id']."</td>
       <td>".$cek['baslik']."</td>
       <td >".$cek['konu']."</td>
       <td>
       <a href=haberduzenle.php?id=".$cek['id'].">Düzenle</a> | 
       <a href=habersil.php?id=".$cek['id'].">sil</a>
       </td>
    
     </tr>
       
       ";
    }
  }
  else
  {
    echo "veri bulunamadı";
  }



?>

</table>
<div style= text-align:center; >
<br /><br />
<form method="post" action="blog.php">
	<input type="text" wrap="hard" name="baslik" placeholder="haber başlığı" required style="height: 30px; width: 400px;"> <br /><br />
	<textarea wrap="hard" name="konu" placeholder="haber konusu" required style="height: 100px; width: 900px;"></textarea>
	<br /><br />
 <button type="submit" name="bil" style="background: green; color: white; width: 100px ; font-family:arial;">Ekle</button>
 <hr></hr>
 </div>
 </form>
</body>

</html>
       
        </div>
    </div>
</div>
</div>
</div>
    <!-- Blog End -->


    <!-- Back to Top -->
  


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
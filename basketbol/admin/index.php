<?php
    session_start();
     include("veri.php");
    if ($_POST) {
        $kullanici = $_POST["kullanici"];
        $sifre = $_POST["sifre"];

        $sorgu = $baglan->query("select * from kullanici where (kullanici='$kullanici' && sifre='$sifre')");
        $kayitsay = $sorgu->num_rows;

        if ($kayitsay > 0) {
            setcookie("kullanici","msb",time()+60*60);
            $_SESSION["giris"] = sha1(md5("var"));

            echo "<script> window.location.href='blog.php'; </script>";
        } 
        else {
            echo "<script>
            alert('HATALI KULLANICI BİLGİSİ!'); window.location.href='index.php';
            </script>";
        }
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../final/css/bootstrap.min.css">
     <link rel="stylesheet" href="../final/css/font-awesome.min.css">
     <link rel="stylesheet" href="../final/css/owl.carousel.css">
     <link rel="stylesheet" href="../final/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../final/css/style.css">
</head>
<body style="text-align:center;padding-top:50px;">
<div class="form-group">
    <form action="" method="post">

        <b>Kullanıcı Adı:</b><br>
        <input type="text" name="kullanici" size="30" required><br><br>
        <b>Parola:</b><br>
        <input type="password" name="sifre" size="30" required><br><br><br>
        <input type="submit" class="form-control" name="giris" id="form-submit" value="Giriş Yap">
    </form>
</div>
    </br>
	</br>

</body>
</html>
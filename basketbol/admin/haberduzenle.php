<?php
		if (isset($_POST['cik'])) {
			
			header('location: blog.php');
		}


?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Modify</title>
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

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
  word-wrap: break-word;
}
	</style>
</head>
<body>
	
</body>
</html>


<?php
	require_once 'veri.php';
	$tt=$_GET['id'];
	if (isset($_POST['hbilgi'])) {
		
		$haberbaslik = $_POST["baslik"];
		$haberkonu = $_POST["konu"];
		
		
       $sorgu=$baglan->prepare("UPDATE haberler set baslik=? , konu=? where id=?");
       $sorgu->bind_param("ssi",$haberbaslik,$haberkonu,$tt);
       $sorgu->execute();
		
		echo "<script>alert('Güncelleme Tamamlandı');
		window.location.href='blog.php'; 
		</script>";
	}
	
	$sql= $baglan->query("SELECT * FROM haberler WHERE id ='".$tt."'");
		
	$satirsay=mysqli_num_rows($sql);
	if($satirsay>0)
	{
	   $satir=mysqli_fetch_array($sql);
		
	   ?>
	 
	 <div style= text-align:center; > 
	 <form method='post'>
	<input type=text name='baslik' style='height: 30px ; width:500px;' value="<?php echo $satir['baslik']; ?>"><br /><br />
	<textarea name='konu' style='height: 100px ; width:1000px'><?php echo $satir['konu']; ?></textarea>
	<br /><br />
 <button type='submit' name='hbilgi' style='background:green; color:white; width: 100px; height:30px; font-family:arial;'>Düzenle</button>
<button type="submit" name="cik" style='background: green; color: white; width: 100px; height:30px; font-family:arial;'>Çık</button>
 
 </form>
 </div>
 <?php
	}
	?>
	
	
	


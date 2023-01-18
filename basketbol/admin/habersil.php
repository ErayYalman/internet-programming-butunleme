<?php
	require_once 'veri.php';
		
	
	$sorgu= $baglan->prepare("DELETE FROM haberler WHERE id = ?");
	$sorgu->bind_param("i",$_GET['id']);
		$sorgu->execute();
		echo "<script> alert('Haber silindi!');
	 window.location.href='blog.php'; </script>";
?>
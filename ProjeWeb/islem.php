<?php
session_start();
if(isset($_POST['giris']))
{
  if($_POST['kullaniciadi']=="g191210002" && $_POST['sifre']=="123")
  {
	$_SESSION['kullaniciadi']=$_POST['kullaniciadi'];
	$_SESSION['sifre']=$_POST['sifre'];

	echo("Hoşgeldiniz.");
  }
    else
	{
        echo("Kullenıcı Adı veya Şifre Yanlış.");
	  header("Location:login.html");
	  exit;
	}
}
?>
<?php ##------ DüğünBuketi.com ------##  ##------ Ayar ------##

	## Oturum Başlatma ##
	session_start();
	ob_start("ob_gzhandler"); //Genzip methodu açık değil ise çalışmaz

	## Hataları Gizle	 ##
	error_reporting(0);

	## Bağlantı Değişkenleri ##
	$host	= "localhost";
	$user	= "root";
	$pass	= "root";
	$db		= "dugunbuketi";

	## MySql Bağlantısı ##
	$baglan = mysqli_connect($host, $user, $pass) or die(mysqli_Error());

	## Veritabanı Seçimi ##
	mysqli_select_db($baglan, $db) or die(mysqli_Error);

	## Karakter Sorunu ##
	mysqli_query($baglan, "SET CHARACTER SET 'utf8'");
	mysqli_query($baglan, "SET NAMES 'utf8'");

	## Saat Ayarı ##
	date_default_timezone_set("Europe/Istanbul");

		## Sabitler ##
		define("URL_BAS", "http://");
		$ayar["site_url"] = URL_BAS."localhost:8888/dugunbuketi";

?>

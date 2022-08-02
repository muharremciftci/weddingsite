<?php
$host = "localhost";
$veritabani = "fiberseo_evleniyoruz_6358";
$kullanici = "fiberseo_evleniyoruz_8596";
$sifre = "E[kK*Qa,bC#u";
try {
     $Conn = new PDO("mysql:host=$host;port=3306;dbname=$veritabani;charset=utf8", "$kullanici", "$sifre");
	 $Conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>

<?php
@session_start();
error_reporting(0);
$UsersId = @$_SESSION["UsersId"];
$ReturnUrl = $_SERVER['REQUEST_URI'];
$httphost = $_SERVER["HTTP_HOST"];
date_default_timezone_set('Europe/Istanbul');
define('PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once PATH."/datapath.php";

$_SESSION['ReturnUrl'] = $_SERVER['REQUEST_URI'];

$Admin_Ayarlar_Site_Dil_Secenegi = $_SESSION['Site_dili'];
if($Admin_Ayarlar_Site_Dil_Secenegi){
	$Admin_Ayarlar_Site_Dil_Secenegi_On_Ek = $_SESSION['Site_dili']."_";
}else{
	$Admin_Ayarlar_Site_Dil_Secenegi_On_Ek = "";
}
		
		
$genel_ayarlar_baglan = $Conn -> query("select*from ayarlar order by id asc");
while($genel_ayarlar_row = $genel_ayarlar_baglan->fetch(PDO::FETCH_ASSOC)){
	$genel_ayarlar = array("Genel Ayarlar",$genel_ayarlar_row["id"],$genel_ayarlar_row["firma_adi"],$genel_ayarlar_row["firma_resmi_adi"],$genel_ayarlar_row["title"],$genel_ayarlar_row["description"],$genel_ayarlar_row["keywords"],$genel_ayarlar_row["google_analytics"],$genel_ayarlar_row["google_web_master"],$genel_ayarlar_row["yandex_metrica"],$genel_ayarlar_row["yandex_web_master"],$genel_ayarlar_row["bing_web_master"],$genel_ayarlar_row["ad"],$genel_ayarlar_row["soyad"],$genel_ayarlar_row["eposta"],$genel_ayarlar_row["telefon"],$genel_ayarlar_row["telefon2"],$genel_ayarlar_row["faks"],$genel_ayarlar_row["adres"],$genel_ayarlar_row["ticari_sicil_no"],$genel_ayarlar_row["vergi_no"],$genel_ayarlar_row["vergi_dairesi"],$genel_ayarlar_row["maps"],$genel_ayarlar_row["web_sitesi"],$genel_ayarlar_row["web_sitesi_sade"],$genel_ayarlar_row["facebook"],$genel_ayarlar_row["twitter"],$genel_ayarlar_row["youtube"],$genel_ayarlar_row["instagram"],$genel_ayarlar_row["linkedin"],$genel_ayarlar_row["whatsapp"],$genel_ayarlar_row["whatsapp_buton_gosterim"],$genel_ayarlar_row["whatsapp_buton_gosterim_konum"],$genel_ayarlar_row["bayi_firma_adi"],$genel_ayarlar_row["bayi_web_sitesi"],$genel_ayarlar_row["bayi_web_sitesi_sade"],$genel_ayarlar_row["bayi_telefon"],$genel_ayarlar_row["bayi_ticari_sicil_no"],$genel_ayarlar_row["bayi_vergi_no"],$genel_ayarlar_row["bayi_vergi_dairesi"],$genel_ayarlar_row["bayi_logo"],$genel_ayarlar_row["bayi_giris_ekrani_foto"],$genel_ayarlar_row["mail_sunucu_adresi"],$genel_ayarlar_row["mail_isim"],$genel_ayarlar_row["mail_adresi"],$genel_ayarlar_row["mail_sifresi"],$genel_ayarlar_row["mail_secure"],$genel_ayarlar_row["mail_port"],$genel_ayarlar_row["bilgi_mail_adresi"],$genel_ayarlar_row["ust_slogan"],$genel_ayarlar_row["favicon"]);
}


	$dilayarlari = $Conn -> prepare("SELECT * FROM dil_ayarlari where id=?");
	$dilayarlari -> execute(array(1));
	$dilayarlari = $dilayarlari->fetch();
	if($dilayarlari){
		$ayarlar_dil_secenegi = $dilayarlari['dil_secenegi'];
		$ayarlar_dil_1_durum = $dilayarlari['dil_1_durum'];
		$ayarlar_dil_1_adi = $dilayarlari['dil_1_adi'];
		$ayarlar_dil_1_on_eki = $dilayarlari['dil_1_on_eki'];
		
		$ayarlar_dil_2_durum = $dilayarlari['dil_2_durum'];
		$ayarlar_dil_2_adi = $dilayarlari['dil_2_adi'];
		$ayarlar_dil_2_on_eki = $dilayarlari['dil_2_on_eki'];
		
		$ayarlar_dil_3_durum = $dilayarlari['dil_3_durum'];
		$ayarlar_dil_3_adi = $dilayarlari['dil_3_adi'];
		$ayarlar_dil_3_on_eki = $dilayarlari['dil_3_on_eki'];
		
		$ayarlar_dil_4_durum = $dilayarlari['dil_4_durum'];
		$ayarlar_dil_4_adi = $dilayarlari['dil_4_adi'];
		$ayarlar_dil_4_on_eki = $dilayarlari['dil_4_on_eki'];
		
		$ayarlar_dil_5_durum = $dilayarlari['dil_5_durum'];
		$ayarlar_dil_5_adi = $dilayarlari['dil_5_adi'];
		$ayarlar_dil_5_on_eki = $dilayarlari['dil_5_on_eki'];
	}

	$ayarlar_baslik = array("");
	$ayarlar_baslik_baglan = $Conn -> query("select*from baslik_dil_ayarlari order by id asc");
	while($ayarlar_baslik_row = $ayarlar_baslik_baglan->fetch(PDO::FETCH_ASSOC)){
		array_push($ayarlar_baslik,$ayarlar_baslik_row[$Admin_Ayarlar_Site_Dil_Secenegi_On_Ek."baslik"]);
	}

?>
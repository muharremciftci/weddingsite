<?php
ob_start();
@session_start();
date_default_timezone_set('Europe/Istanbul');
$userS = @$_SESSION["userS"];
define('PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once PATH."/datapath.php";
require_once "sqlkoruma.php";
	$txtusername = @(trim(htmlspecialchars(strip_tags($_POST["txtusername"]))));
	$txtpass = @md5((trim(htmlspecialchars(strip_tags($_POST["txtpass"])))));
	$rs1 = $Conn -> prepare("SELECT * FROM kullanicilar where kullanici_adi=? and sifre=?");
	$rs1 -> execute(array($txtusername,$txtpass));
	$rs1 = $rs1->fetch();
	if($rs1){
		$userS = $rs1['id'];
		@session_start();
		$_SESSION['userS'] = $userS;
		header("Location:default.php");
	}
	if($txtusername!="" and $txtpass!="" and $rs1==""){
		header("Location:parola.php?sayfa=bilgiyanlis");
	}
	if($userS==""){
		$adminbilgileri = $Conn -> prepare("SELECT * FROM ayarlar where id=?");
		$adminbilgileri -> execute(array(1));
		$adminbilgileri = $adminbilgileri->fetch();
		if($adminbilgileri){
			$ayarlar_bayi_firma_adi = $adminbilgileri["bayi_firma_adi"];
			$ayarlar_bayi_web_sitesi = $adminbilgileri["bayi_web_sitesi"];
			$ayarlar_bayi_web_sitesi_sade = $adminbilgileri["bayi_web_sitesi_sade"];
			$ayarlar_bayi_telefon = $adminbilgileri["bayi_telefon"];
			$ayarlar_bayi_ticari_sicil_no = $adminbilgileri["bayi_ticari_sicil_no"];
			$ayarlar_bayi_vergi_no = $adminbilgileri["bayi_vergi_no"];
			$ayarlar_bayi_vergi_dairesi = $adminbilgileri["bayi_vergi_dairesi"];
			$ayarlar_bayi_logo = $adminbilgileri['bayi_logo'];
			$ayarlar_bayi_giris_ekrani_foto = $adminbilgileri['bayi_giris_ekrani_foto'];
		}
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$ayarlar_bayi_firma_adi?></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,700|Roboto:400,700" rel="stylesheet"> 
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style-pass.css" rel="stylesheet">	
	<style type="text/css">
		body{background-image:url(/foto/<?=$ayarlar_bayi_giris_ekrani_foto?>);background-position:100% 100%;background-size:100% 100%;background-repeat:no-repeat;height:100vh;font-family: 'Open Sans', sans-serif;}
	</style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<div class="body-gridtile"></div>
<?php
@session_start();
		$_SESSION['userS'] = $userS;
echo $userS;
		?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-4 col-md-4 text-center logo-content">
				<div class="logo">
					<!--<img src="assets/img/logo.png" alt="Kocaeli Bilişim" class="img-responsive" />-->
					<img src="/foto/<?=$ayarlar_bayi_logo?>" alt="<?=$ayarlar_bayi_firma_adi?>" class="img-responsive" />
					<img src="assets/img/line.png" alt="Kocaeli Bilişim" class="img-responsive text-center" />
					<h1>Yönetim Paneli</h1>
				</div>
			</div>
			
			<div class="col-md-offset-3 col-md-6 text-center content">
				<div class="row">
					<div class="col-md-12 info-alert">
						<?php
						if(!empty($_GET["sayfa"])){	
							$sayfa = $_GET["sayfa"];
							if($sayfa=="bilgiyanlis"){
								
							
						?>

						<div class="alert alert-danger alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong><i class="fa fa-exclamation-triangle"></i>&nbsp; Üzgünüz!</strong> Girdiğiniz Kullanıcı Adı/Şifre Yanlış.
						</div>

						<?php
							}elseif($sayfa=="pasifuye"){
						?>
						
						<div class="alert alert-danger alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong><i class="fa fa-exclamation-triangle"></i>&nbsp; Üzgünüz!</strong> Üyeliğiniz askıya alınmıştır.
						</div>
						
						<?php
							}
						}
						?>
					</div>
					<div class="col-md-12 content-sub">
						<div class="content-header">
							<h2>HOŞGELDİNİZ</h2>
						</div>
						<div class="content-box">							
							<form class="form-horizontal" id="form1" name="form1" method="post" action="default.php">
								<div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></span>
								  <input type="text" class="form-control" name="txtusername" placeholder="Kullanıcı Adınız">
								</div>
								<div class="input-group">
								  <span class="input-group-addon"><i class="fa fa-lock fa-2x" aria-hidden="true"></i></span>
								  <input type="password" class="form-control" name="txtpass" id="inputPassword3" placeholder="Şifreniz">
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i>GİRİŞ YAP</button>
									</div>
								</div>
							</form>								
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


	
	
	

</body>
</html>
<?php
exit();
}else{
	require_once "sqlkoruma.php";
	require_once PATH."/datapath.php";
	$sayfadetay = $Conn -> prepare("SELECT * FROM kullanicilar where id=?");
	$sayfadetay -> execute(array($userS));
	$sayfadetay = $sayfadetay->fetch();
	if($sayfadetay){
		$userS_Adi = $sayfadetay["hesap_adi"];
		$sayfa_goruntuleme = $sayfadetay["sayfa_goruntuleme"];
		$sayfa_bayi_goruntuleme = $sayfadetay["bayi"];
		$sayfa_yonetim = $sayfadetay["yonetim"];
	}
	$adminbilgileri = $Conn -> prepare("SELECT * FROM ayarlar where id=?");
	$adminbilgileri -> execute(array(1));
	$adminbilgileri = $adminbilgileri->fetch();
	if($adminbilgileri){
		$ayarlar_bayi_firma_adi = $adminbilgileri["bayi_firma_adi"];
		$ayarlar_bayi_web_sitesi = $adminbilgileri["bayi_web_sitesi"];
		$ayarlar_bayi_web_sitesi_sade = $adminbilgileri["bayi_web_sitesi_sade"];
		$ayarlar_bayi_telefon = $adminbilgileri["bayi_telefon"];
		$ayarlar_bayi_ticari_sicil_no = $adminbilgileri["bayi_ticari_sicil_no"];
		$ayarlar_bayi_vergi_no = $adminbilgileri["bayi_vergi_no"];
		$ayarlar_bayi_vergi_dairesi = $adminbilgileri["bayi_vergi_dairesi"];
		$ayarlar_bayi_logo = $adminbilgileri['bayi_logo'];
		$genel_site_Bilgisi_web_sitesi = $adminbilgileri["web_sitesi"];
		$ayarlar_admin_goruntuleme = $adminbilgileri["admin_goruntuleme"];
	}
		$dilayarlari = $Conn -> prepare("SELECT * FROM dil_ayarlari where id=?");
	$dilayarlari -> execute(array(1));
	$dilayarlari = $dilayarlari->fetch();
	if($dilayarlari){
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

	$request_url = $_SERVER["PHP_SELF"];
}

?>
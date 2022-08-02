<?php require_once "parola.php"; ?>
<?php
$sayfakategorino = "fibercozum";
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kocaeli Bilişim Yazılım ve Tasarım Hizmetleri</title>
	<?php require_once "style.php"; ?>
  </head>
<body>			
<?php require_once "topmenu.php"; ?>
<?php require_once "solmenu.php"; ?>

<div class="main">
	<section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 main-content">
				<div class="row">
					<div class="col-md-12">
						<h3 class="main-content-header"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Mail Ayarları</h3>				
						<hr class="main-content-header-hr" />
<?php
	if(!empty($_GET["bilgiislem"])){
		$islem = $_GET["bilgiislem"];
		if($islem == "ok"){ 
			echo '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-check" aria-hidden="true"></i> İşlem başarılı bir şekilde gerçekleşti !</strong></h5></div><div class="clearfix"></div>';
			
		}elseif($islem == "eksikbilgi"){
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> İşleminiz başarısız oldu !</strong></h5></div><div class="clearfix"></div>';
		}
	}
?>

<?php	
	$sayfadetay = $Conn -> prepare("SELECT * FROM ayarlar where id=?");
	$sayfadetay -> execute(array(1));
	$sayfadetay = $sayfadetay->fetch();
	if($sayfadetay){
			$mail_sunucu_adresi = $sayfadetay["mail_sunucu_adresi"];
			$mail_isim = $sayfadetay["mail_isim"];
			$mail_adresi = $sayfadetay["mail_adresi"];
			$mail_sifresi = $sayfadetay["mail_sifresi"];
			$mail_secure = $sayfadetay["mail_secure"];
			$mail_port = $sayfadetay["mail_port"];
			$bilgi_mail_adresi = $sayfadetay["bilgi_mail_adresi"];

?>							
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<form class="form-horizontal" action="fibercozum_mail_ayarlari.php?islem=edit" method="post">
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-4 text-right">Mail Sunucu Adresi</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" placeholder="Mail Sunucu Adresi" name="sunucuadresi" value="<?=$mail_sunucu_adresi?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Mail İsmi <small>(E-Posta İletisinde Görülecek İsim)</small></label>
												<div class="col-sm-4">
													<input type="text" class="form-control" placeholder="Mail İsmi" name="mailismi" value="<?=$mail_isim?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Mail Adresi <small>(Gönderici Adresi)</small></label>
												<div class="col-sm-4">
													<input type="text" class="form-control" placeholder="Mail Adresi" name="mailadresi" value="<?=$mail_adresi?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Bilgi Adresi <small>(Gönderilen Bilgi Adresi)</small></label>
												<div class="col-sm-4">
													<input type="text" class="form-control" placeholder="Mail Adresi" name="mailbilgi" value="<?=$bilgi_mail_adresi?>">
												</div>
												<div class="col-sm-4">
													<small>Bilgi maillerinin gönderileceği adres.</small>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Mail Şifresi </label>
												<div class="col-sm-4">
													<input type="text" class="form-control" placeholder="Mail Şifresi" name="mailsifresi" value="<?=$mail_sifresi?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Mail Güvenlik <small>(Gönderilen Adres)</small></label>
												<div class="col-sm-4">
													<select class="form-control" name="mailguvenlik">
														<option value="tls" <?php if($mail_secure=='tls'){ echo "selected"; } ?>>Normal bağlantı (TLS)</option>
														<option value="ssl" <?php if($mail_secure=='ssl'){ echo "selected"; } ?>>Güvenli bağlantı (SSL)</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Mail Port </label>
												<div class="col-sm-4">
													<select class="form-control" name="mailport">
														<option value="587" <?php if($mail_port=='587'){ echo "selected"; } ?>>Normal bağlantı (587)</option>
														<option value="465" <?php if($mail_port=='465'){ echo "selected"; } ?>>Güvenli bağlantı (465)</option>
													</select>
												</div>
											</div>
										
											
										</div>
										<div class="clearfix"></div>
										<hr class="main-content-header-hr" />
										<div class="col-md-12">
											<div class="form-group">
												<div class="col-md-12 text-center">
													<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i> BİLGİLERİ GÜNCELLE</button>
												</div>
											</div>
										</div>
									</form>	
								</div>
							</div>
						</div>
						
						<hr class="main-content-header-hr" />
<?php

		}
?>					
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
</div>

<div class="clearfix"></div>
<?php
	if(!empty($_GET["islem"])){
		$islem = $_GET["islem"];
		require_once "fonksiyon.php";
		require_once PATH."/datapath.php";
		if($islem == "edit"){
			$sunucuadresi = (trim(htmlspecialchars(strip_tags($_POST["sunucuadresi"]))));
			$mailismi = (trim(htmlspecialchars(strip_tags($_POST["mailismi"]))));
			$mailadresi = (trim(htmlspecialchars(strip_tags($_POST["mailadresi"]))));
			$mailsifresi = (trim((strip_tags($_POST["mailsifresi"]))));
			$mailbilgi = (trim((strip_tags($_POST["mailbilgi"]))));
			$mailguvenlik = (trim((strip_tags($_POST["mailguvenlik"]))));
			$mailport = (trim((strip_tags($_POST["mailport"]))));
			
			if($mailismi){
				$guncelle = $Conn -> prepare("update ayarlar set mail_sunucu_adresi=?, mail_isim=?, mail_adresi=?, mail_sifresi=?, mail_secure=?, mail_port=?, bilgi_mail_adresi=? where id=?");
				$guncelle -> execute(array($sunucuadresi,$mailismi,$mailadresi,$mailsifresi,$mailguvenlik,$mailport,$mailbilgi,1));
				
				
				header("Location:fibercozum_mail_ayarlari.php?bilgiislem=ok");

			}else{
				header("Location:fibercozum_mail_ayarlari.php?bilgiislem=eksikbilgi");
			}
		}
	}
?>


<?php require_once "altmenu.php";?>
<?php require_once "script.php";?>
		
  </body>
</html>
<?php
if(!isset($Conn)){
	$Conn=Null;
}
?>
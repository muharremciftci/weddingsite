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
						<h3 class="main-content-header"><i class="fa fa-cog" aria-hidden="true"></i> Kullanıcı Ad ve Şifre Ayarları</h3>				
						<hr class="main-content-header-hr" />
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-info" role="alert">
									<p><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; Yönetici panelinize giriş için gerekli Kullanıcı Adınızı ve Şifrenizi değiştirebilirsiniz. </p>
								</div>
							</div>
							<div class="col-md-12">
								<div class="alert alert-info" role="alert">
									<p><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; Bu kısımdan Yönetici giriş bilgileri değiştirebilirsiniz. </p>
								</div>
							</div>
							<div class="col-md-12">
								<div class="alert alert-info" role="alert">
									<p><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp; Yeni şifrenizi belirleyebilmek için eski şifrenizi girmeniz gerekmektedir. </p>
								</div>
							</div>
						</div>
<?php
	if(!empty($_GET["bilgiislem"])){
		$islem = $_GET["bilgiislem"];
		if($islem == "ok"){
			echo '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-check" aria-hidden="true"></i> İşlem başarılı bir şekilde gerçekleşti !</strong></h5></div><div class="clearfix"></div>';
			
		}elseif($islem == "karakteraz"){
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> İşleminiz başarısız oldu ! Kullanıcı Adı ve şifreniz en az 8 karakter içermelidir.</strong></h5></div><div class="clearfix"></div>';
		}elseif($islem == "yanlissifre"){
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> İşleminiz başarısız oldu ! Şifrenizi yanlış girdiniz.</strong></h5></div><div class="clearfix"></div>';
		}elseif($islem == "sifreuyusmuyor"){
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> İşleminiz başarısız oldu ! Tekrar edilen şifreler uyuşmuyor.</strong></h5></div><div class="clearfix"></div>';
		}
		
	}
?>


<?php	
	$sayfadetay = $Conn -> prepare("select * from kullanicilar where id=?");
	$sayfadetay -> execute(array($userS));
	$sayfadetay = $sayfadetay->fetch();
		if($sayfadetay){	
			$kullanici_adi = $sayfadetay["kullanici_adi"];

?>							
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<form class="form-horizontal" action="fibercozum_kullanici_bilgileri.php?islem=edit" method="post">
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-3 text-right">Kullanıcı Adı</label>												
												<div class="col-sm-6">
													<input type="text" class="form-control" placeholder="Kullanıcı Adı" name="kullaniciadi" value="<?=$kullanici_adi?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 text-right">Eski Şifreniz</label>
												<div class="col-sm-6">
													<input type="password" class="form-control" placeholder="Eski Şifreniz" name="eskisifre">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 text-right">Yeni Şifreniz</label>
												<div class="col-sm-6">
													<input type="password" class="form-control" placeholder="Yeni Şifreniz" name="yenisifre1">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 text-right">Yeni Şifreniz (Tekrar)</label>
												<div class="col-sm-6">
													<input type="password" class="form-control" placeholder="Yeni Şifreniz (Tekrar)" name="yenisifre2">
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

				$kullaniciadi = @(trim(htmlspecialchars(strip_tags($_POST["kullaniciadi"]))));
				$eskisifre = @(trim(htmlspecialchars(strip_tags($_POST["eskisifre"]))));
				$yenisifre1 = @(trim(htmlspecialchars(strip_tags($_POST["yenisifre1"]))));
				$yenisifre2 = @(trim(htmlspecialchars(strip_tags($_POST["yenisifre2"]))));
					
				$kullaniciadisayi = strlen($kullaniciadi);
				$eskisifresayi = strlen($eskisifre);
				if($kullaniciadisayi<8){
					header("Location:fibercozum_kullanici_bilgileri.php?bilgiislem=karakteraz");
					exit();
				}

				@session_start();
				$userSx = @$_SESSION["userS"];
				require_once PATH."/datapath.php";
				
				$rs1 = $Conn -> prepare("SELECT * FROM kullanicilar where id=?");
				$rs1 -> execute(array($userS));
				$rs1 = $rs1->fetch();
				if($rs1){
					$userSsifre = $rs1['sifre'];
				}
			
				$eskisifre = md5($eskisifre);
				if($userSsifre<>$eskisifre){
					header("Location:fibercozum_kullanici_bilgileri.php?bilgiislem=yanlissifre");
					exit();
				}
				
				$yenisifre1sayi = strlen($yenisifre1);
				$yenisifre2sayi = strlen($yenisifre2);
				if($yenisifre1sayi<8){
					header("Location:fibercozum_kullanici_bilgileri.php?bilgiislem=karakteraz");
					exit();
				}
				
				if($yenisifre1!=$yenisifre2){
					header("Location:fibercozum_kullanici_bilgileri.php?bilgiislem=sifreuyusmuyor");
					exit();
				}
				
				$yenisifre2 = md5($yenisifre2);
					$guncelle = $Conn -> prepare("update kullanicilar set kullanici_adi=?, sifre=? where id=?");
					$guncelle -> execute(array($kullaniciadi,$yenisifre2,$userS));
					header("Location:fibercozum_kullanici_bilgileri.php?bilgiislem=ok");
					exit();
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
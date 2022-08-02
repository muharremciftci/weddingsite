<?php require_once "parola.php"; ?>
<?php
	require_once "fonksiyon.php";
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
						<h3 class="main-content-header"><i class="fa fa-cog" aria-hidden="true"></i> Bayilik Ayarları</h3>						
<?php
	if(!empty($_GET["bilgiislem"])){
		$islem = $_GET["bilgiislem"];
		if($islem == "ok"){
			echo '<hr class="main-content-header-hr" />';
			echo '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-check" aria-hidden="true"></i> İşlem başarılı bir şekilde gerçekleşti !</strong></h5></div>';
			
		}elseif($islem == "eksikbilgi"){
			echo '<hr class="main-content-header-hr" />';
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Logo boş bırakılamaz !</strong></h5></div>';
		}elseif($islem == "eksikbilgi2"){
			echo '<hr class="main-content-header-hr" />';
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Bir hata oluştu. Lütfen tekrar deneyiniz. </strong></h5></div>';
		}
	}
?>

						<hr class="main-content-header-hr" />
<?php	
$sayfadetay = $Conn->prepare("select * from ayarlar where id=?");
		$sayfadetay->execute(array(1));
		$count = $sayfadetay->rowCount();
		while($row = $sayfadetay->fetch(PDO::FETCH_ASSOC)){			
			$bayi_firma_adi = $row["bayi_firma_adi"];
			$bayi_web_sitesi = $row["bayi_web_sitesi"];
			$bayi_web_sitesi_sade = $row["bayi_web_sitesi_sade"];
			$bayi_telefon = $row["bayi_telefon"];
			$bayi_ticari_sicil_no = $row["bayi_ticari_sicil_no"];
			$bayi_vergi_no = $row["bayi_vergi_no"];
			$bayi_vergi_dairesi = $row["bayi_vergi_dairesi"];
			if(!empty($row['bayi_logo'])){ $bayi_logo = $row['bayi_logo']; }else{ $bayi_logo="resimyok.jpg"; }
			if(!empty($row['bayi_giris_ekrani_foto'])){ $bayi_giris_ekrani_foto = $row['bayi_giris_ekrani_foto']; }else{ $bayi_giris_ekrani_foto="resimyok.jpg"; }
?>						
						<div class="row">
							<div class="col-md-12 ">
								<div class="row">
									<form class="form-horizontal" action="fibercozum_bayilik_ayarlari.php?islem=edit" method="post" enctype="multipart/form-data">
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-sm-4 text-right">Firma Adı</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" placeholder="Firma Adı" name="firmaadi" value="<?=$bayi_firma_adi?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Web Sitesi Adresi <small>(http:// Yazılmalı)</small></label>
												<div class="col-sm-8">
													<input type="text" class="form-control" placeholder="http://www.fiberticaret.com" name="websitesi" value="<?=$bayi_web_sitesi?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Web Sitesi Adresi <small>(http:// Yazılmamalı)</small></label>
												<div class="col-sm-8">
													<input type="text" class="form-control" placeholder="www.fiberticaret.com" name="websitesisade" value="<?=$bayi_web_sitesi_sade?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Telefon Numarası</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" placeholder="Telefon Numarası" name="telefon" value="<?=$bayi_telefon?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Ticari Sicil No</label>
												<div class="col-sm-8">
													<input type="text" class="form-control numberFormat11" placeholder="Ticari Sicil No" name="sicilno" value="<?=$bayi_ticari_sicil_no?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Vergi No</label>
												<div class="col-sm-8">
													<input type="text" class="form-control numberFormat11" placeholder="Vergi No" name="vergino" value="<?=$bayi_vergi_no?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-4 text-right">Vergi Dairesi</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" placeholder="Vergi Dairesi" name="vergidairesi" value="<?=$bayi_vergi_dairesi?>">
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="col-sm-4 text-right">Mevcut Resim</label>
												<div class="col-sm-4">
													<img src="/foto/<?=$bayi_logo?>" class="banner2-img" />
													<input type="hidden"  name="mevcutresim" value="<?=$bayi_logo?>" />
												</div>
												<div class="col-sm-4">
													<a href="fibercozum_bayilik_ayarlari.php?islem=resimsil" class="btn btn-danger">Mevcut Resmi Sil</a>
												</div>
											</div>
										
											<div class="form-group">
												<label class="col-sm-4 text-right">Resim Ekle</label>
												<div class="col-sm-8">
													<input type="file" name="image" value="<?=$bayi_logo?>" />
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<div class="col-md-6 text-center">
													<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> AYARLARI GÜNCELLE</button>
												</div>
											</div>
										</div>
									</form>
									<form class="form-horizontal" action="fibercozum_bayilik_ayarlari.php?islem=editfavicon" method="post" enctype="multipart/form-data">
										<div class="clearfix"></div>
										<hr class="main-content-header-hr" />
										<h3 class="main-content-header"><i class="fa fa-cog" aria-hidden="true"></i> Panel Giriş Görseli</h3>
										<hr class="main-content-header-hr" />
										<div class="col-md-12">
											<div class="alert alert-warning" role="alert">Panel giriş görseli en az 1920*1200 boyutlarında olmalıdır !</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-2 text-right">Mevcut Görsel</label>
												<div class="col-sm-4">
													<?php if($bayi_giris_ekrani_foto){ ?><img src="/foto/<?=$bayi_giris_ekrani_foto?>" class="banner2-img" style="width:96px;height:60px" /><?php }else{ echo "Yüklü resim bulunmamaktadır."; } ?>
													<input type="hidden"  name="mevcutfavicon" value="<?=$bayi_giris_ekrani_foto?>" />
												</div>
												<div class="col-sm-4">
													<a href="fibercozum_bayilik_ayarlari.php?islem=faviconsil" class="btn btn-danger">Mevcut Resmi Sil</a>
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 text-right">Resim Ekle</label>
												<div class="col-sm-8">
													<input type="file" name="image" value="<?=$bayi_giris_ekrani_foto?>" />
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<hr class="main-content-header-hr" />
										</div>
									
									
										<hr class="main-content-header-hr" />
										<div class="col-md-12">
											<div class="form-group">
												<div class="col-md-6 text-center">
													<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> AYARLARI GÜNCELLE</button>
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
				$firmaadi = (trim(htmlspecialchars(strip_tags($_POST["firmaadi"]))));
				$websitesi = (trim(htmlspecialchars(strip_tags($_POST["websitesi"]))));
				$websitesisade = (trim(htmlspecialchars(strip_tags($_POST["websitesisade"]))));
				$telefon = (trim(htmlspecialchars(strip_tags($_POST["telefon"]))));
				$sicilno = (trim(htmlspecialchars(strip_tags($_POST["sicilno"]))));
				$vergino = (trim(htmlspecialchars(strip_tags($_POST["vergino"]))));
				$vergidairesi = (trim(htmlspecialchars(strip_tags($_POST["vergidairesi"]))));
				$mevcutresim = (trim(htmlspecialchars(strip_tags($_POST["mevcutresim"]))));
				
				
	require 'class.upload.php';

	   $image = new Upload( $_FILES[ 'image' ] );
		if ( $image->uploaded ) {
			// resmi yeniden adlandıralım
			$rasgeleisim = substr(md5(uniqid(rand())), 0, 12);

			
			// yeniden farklı boyutta kayıt et (200x100)
			$image->file_new_name_body = $rasgeleisim;
			
			
			
			
			$resimtype = $_FILES['image']['type'];
			if($resimtype=="image/png"){
				$image->image_convert = 'png';
			}else{
				$image->image_convert = 'jpg';
			}
			
			
			
			
			
			$image->image_resize = true;
			//$image->image_ratio_crop = false;
			$image->image_x = 400;
		   /* $image->image_y = image_y;*/
			$image->image_ratio_y = true;

			// sadece resim formatları yüklensin
			$image->allowed = array ( 'image/*' );
			
			$image->Process( '../foto/' );
			
			
			
			
			if ( $image->processed ) {
				print 'resim yükleme işlemi başarılı!<hr />';
				print '<img src="' . $image->file_dst_path . $image->file_dst_name . '" alt="" />';
			} else {
				print 'Bir sorun oluştu: ' . $image->error;
			}
			
			$kucuk_yeniisim = $image->file_dst_name;
			
		}else{
			$kucuk_yeniisim = $mevcutresim;
		}




				if($kucuk_yeniisim){					
					$guncelle = $Conn -> prepare("update ayarlar set bayi_firma_adi=?, bayi_web_sitesi=?, bayi_web_sitesi_sade=?, bayi_telefon=?, bayi_ticari_sicil_no=?, bayi_vergi_no=?, bayi_vergi_dairesi=?, bayi_logo=? where id=?");
					$guncelle -> execute(array($firmaadi,$websitesi,$websitesisade,$telefon,$sicilno,$vergino,$vergidairesi,$kucuk_yeniisim,1));
					header("Location:fibercozum_bayilik_ayarlari.php?bilgiislem=ok");
				}else{
					header("Location:fibercozum_bayilik_ayarlari.php?bilgiislem=eksikbilgi");
				}
		}
	}
?>



<?php
	if(!empty($_GET["islem"])){
		$islem = $_GET["islem"];
		require_once "fonksiyon.php";
		require_once PATH."/datapath.php";
		if($islem == "editfavicon"){

				$mevcutfavicon = (trim(htmlspecialchars(strip_tags($_POST["mevcutfavicon"]))));
				
	require 'class.upload.php';

	   $image = new Upload( $_FILES[ 'image' ] );
		if ( $image->uploaded ) {
			// resmi yeniden adlandıralım
			$rasgeleisim = substr(md5(uniqid(rand())), 0, 12);

			
			// yeniden farklı boyutta kayıt et (200x100)
			$image->file_new_name_body = $rasgeleisim;
			
			
			
			
			$resimtype = $_FILES['image']['type'];
			if($resimtype=="image/png"){
				$image->image_convert = 'png';
			}else{
				$image->image_convert = 'jpg';
			}
			
			
			
			$image->image_resize = true;
			//$image->image_ratio_crop = false;
			$image->image_x = 1920;
		   /* $image->image_y = image_y;*/
			$image->image_ratio_y = true;

			// sadece resim formatları yüklensin
			$image->allowed = array ( 'image/*' );
			
			$image->Process( '../foto/' );
			
			
			
			
			if ( $image->processed ) {
				print 'resim yükleme işlemi başarılı!<hr />';
				print '<img src="' . $image->file_dst_path . $image->file_dst_name . '" alt="" />';
			} else {
				print 'Bir sorun oluştu: ' . $image->error;
			}
			
			$kucuk_yeniisim = $image->file_dst_name;
			
		}else{
			$kucuk_yeniisim = $mevcutfavicon;
		}




			if($kucuk_yeniisim){
				$guncelle = $Conn -> prepare("update ayarlar set bayi_giris_ekrani_foto=? where id=?");
				$guncelle -> execute(array($kucuk_yeniisim,1));					
				header("Location:fibercozum_bayilik_ayarlari.php?bilgiislem=ok");
			}else{
				header("Location:fibercozum_bayilik_ayarlari.php?bilgiislem=eksikbilgi2");
			}
		}
	}
?>
















<?php
	if(!empty($_GET["islem"])){
		$islem = $_GET["islem"];
		if($islem == "resimsil"){
				require_once PATH."/datapath.php";
				require_once "fonksiyon.php";
				$guncelle = $Conn -> prepare("update ayarlar set bayi_logo=? where id=?");
				$guncelle -> execute(array("",1));							
				header("Location:fibercozum_bayilik_ayarlari.php?bilgiislem=ok");
		}
	}
?>

<?php
	if(!empty($_GET["islem"])){
		$islem = $_GET["islem"];
		if($islem == "faviconsil"){
				require_once PATH."/datapath.php";
				require_once "fonksiyon.php";
				$guncelle = $Conn -> prepare("update ayarlar set bayi_giris_ekrani_foto=? where id=?");
				$guncelle -> execute(array("",1));		
				header("Location:fibercozum_bayilik_ayarlari.php?bilgiislem=ok");
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
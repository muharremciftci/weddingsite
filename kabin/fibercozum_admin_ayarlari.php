<?php require_once "parola.php"; ?>
<?php
if(($userS_Adi=="SuperAdmin") && ($sayfa_yonetim==1) && ($sayfa_bayi_goruntuleme==1)) {
	require_once "fonksiyon.php";
	$sayfakategorino = "ayarlar";
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
						<h3 class="main-content-header"><i class="fa fa-cog" aria-hidden="true"></i> SuperAdmin Ayarları</h3>						
<?php
	if(!empty($_GET["bilgiislem"])){
		$islem = $_GET["bilgiislem"];
		if($islem == "ok"){
			echo '<hr class="main-content-header-hr" />';
			echo '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-check" aria-hidden="true"></i> İşlem başarılı bir şekilde gerçekleşti !</strong></h5></div>';
			
		}elseif($islem == "eksikbilgi"){
			echo '<hr class="main-content-header-hr" />';
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Hatalı kodlama !</strong></h5></div>';
		}
	}
?>

						<hr class="main-content-header-hr" />
<?php	
$sayfadetay = $Conn -> prepare("select * from ayarlar where id=?");
	$sayfadetay -> execute(array(1));
	$sayfadetay = $sayfadetay->fetch();
		if($sayfadetay){	
			$sayfa_goruntuleme = $sayfadetay["admin_goruntuleme"];
?>						
						<div class="row order-edit-box sistem_kullanici">
							<div class="col-md-12">
								<form class="form-horizontal" action="fibercozum_admin_ayarlari.php?islem=edit2" method="post">
									<h4><strong>Görüntüleme Ayarları</strong></h4>
									<hr />
									<div class="col-md-12">
											<div class="table-responsive">
												<table class="table table-striped table-hover">
													<thead>
														<tr>
															<th>#</th>
															<th class="text-center">Yetkiler <br /><label><input type="checkbox" name="all" id="checkAll4" value=""></label></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><strong>Sayfalar</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="001" <?php if(strstr($sayfa_goruntuleme, "001")) { echo "checked"; } ?>></td>
														</tr>
														<tr>
															<td><strong>Kategoriler ve Ürünler</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="002" <?php if(strstr($sayfa_goruntuleme, "002")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Haberler</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="003" <?php if(strstr($sayfa_goruntuleme, "003")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Blog</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="004" <?php if(strstr($sayfa_goruntuleme, "004")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Referanslar</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="005" <?php if(strstr($sayfa_goruntuleme, "005")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Fotoğraf Galerisi</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="006" <?php if(strstr($sayfa_goruntuleme, "006")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Video Galeri</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="007" <?php if(strstr($sayfa_goruntuleme, "007")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Mail Ayarları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="008" <?php if(strstr($sayfa_goruntuleme, "008")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Slider</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="009" <?php if(strstr($sayfa_goruntuleme, "009")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Sıkça Sorulan Sorular</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="010" <?php if(strstr($sayfa_goruntuleme, "010")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Icon Tasarımı</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="011" <?php if(strstr($sayfa_goruntuleme, "011")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>İletişim Mesajları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="012" <?php if(strstr($sayfa_goruntuleme, "012")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>İnsan Kaynakları Mesajları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="013" <?php if(strstr($sayfa_goruntuleme, "013")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Talep Formu Mesajları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="014" <?php if(strstr($sayfa_goruntuleme, "014")) { echo "checked"; } ?>></td>
														</tr>													
														
														<tr>
															<td><strong>Site Ayarları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="015" <?php if(strstr($sayfa_goruntuleme, "015")) { echo "checked"; } ?>></td>
														</tr>														
														
														<tr>
															<td><strong>Kullanıcı Adı ve Şifre Ayarları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="016" <?php if(strstr($sayfa_goruntuleme, "016")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Kullanıcı Hesapları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="017" <?php if(strstr($sayfa_goruntuleme, "017")) { echo "checked"; } ?>></td>
														</tr>

														<tr>
															<td><strong>Başlık Ayarları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="019" <?php if(strstr($sayfa_goruntuleme, "019")) { echo "checked"; } ?>></td>
														</tr>
														
														<tr>
															<td><strong>Bayilik Ayarları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="018" <?php if(strstr($sayfa_goruntuleme, "018")) { echo "checked"; } ?>></td>
														</tr>
												
													</tbody>
												</table>
											</div>
										</div>
									<div class="col-md-12">
										<div class="form-group">
											<div class="col-md-12 text-center">
												<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> BİLGİLERİ GÜNCELLE</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							
							<div class="clearfix"></div>
							<div class="col-md-12"><hr /></div>
							<div class="clearfix"></div>
							<div class="col-md-12">
				<?php
				
				$dilayarlari = $Conn -> prepare("select * from dil_ayarlari where id=?");
				$dilayarlari -> execute(array(1));
				$dilayarlari = $dilayarlari->fetch();
					if($dilayarlari){
							$dil_secenegi = $dilayarlari["dil_secenegi"];	
							
							$dil_1_durum = $dilayarlari["dil_1_durum"];	
							$dil_1_adi = $dilayarlari["dil_1_adi"];	
							$dil_1_on_eki = $dilayarlari["dil_1_on_eki"];	
							
							$dil_2_durum = $dilayarlari["dil_2_durum"];	
							$dil_2_adi = $dilayarlari["dil_2_adi"];	
							$dil_2_on_eki = $dilayarlari["dil_2_on_eki"];
							
							$dil_3_durum = $dilayarlari["dil_3_durum"];	
							$dil_3_adi = $dilayarlari["dil_3_adi"];	
							$dil_3_on_eki = $dilayarlari["dil_3_on_eki"];
							
							$dil_4_durum = $dilayarlari["dil_4_durum"];	
							$dil_4_adi = $dilayarlari["dil_4_adi"];	
							$dil_4_on_eki = $dilayarlari["dil_4_on_eki"];
							
							$dil_5_durum = $dilayarlari["dil_5_durum"];	
							$dil_5_adi = $dilayarlari["dil_5_adi"];	
							$dil_5_on_eki = $dilayarlari["dil_5_on_eki"];
				?>
				
				
								<form class="form-horizontal" action="fibercozum_admin_ayarlari.php?islem=edit3" method="post">
									<h4><strong>Dil Ayarları</strong></h4>
									<hr />
									<div class="col-md-8">
										<div class="form-group">
											<label class="col-sm-3 text-right">Dil Seçeneği</label>
											<div class="col-sm-1">
												<div class="checkbox product-basic-checkbox">
													<label>
														<input type="checkbox" name="dil_secenegi" value="1" <?php if($dil_secenegi==1) { echo "checked"; }?>> 
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</div>
											<div class="col-sm-8">
												<p>Dil seçeneğini aktif etmek için seçmelisiniz</p>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 text-right">Dil 1</label>
											<div class="col-sm-1">
												<div class="checkbox product-basic-checkbox">
													<label>
														<input type="checkbox" name="dil_1_check" value="1" <?php if($dil_1_durum==1) { echo "checked"; }?>> 
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" placeholder="Dil Adı" name="dil_1_adi" value="<?=$dil_1_adi?>">
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" placeholder="Dil Ön Eki" name="dil_1_eki" value="<?=$dil_1_on_eki?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 text-right">Dil 2</label>
											<div class="col-sm-1">
												<div class="checkbox product-basic-checkbox">
													<label>
														<input type="checkbox" name="dil_2_check" value="1" <?php if($dil_2_durum==1) { echo "checked"; }?>> 
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" placeholder="Dil Adı" name="dil_2_adi" value="<?=$dil_2_adi?>">
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" placeholder="Dil Ön Eki" name="dil_2_eki" value="<?=$dil_2_on_eki?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 text-right">Dil 3</label>
											<div class="col-sm-1">
												<div class="checkbox product-basic-checkbox">
													<label>
														<input type="checkbox" name="dil_3_check" value="1" <?php if($dil_3_durum==1) { echo "checked"; }?>> 
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" placeholder="Dil Adı" name="dil_3_adi" value="<?=$dil_3_adi?>">
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" placeholder="Dil Ön Eki" name="dil_3_eki" value="<?=$dil_3_on_eki?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 text-right">Dil 4</label>
											<div class="col-sm-1">
												<div class="checkbox product-basic-checkbox">
													<label>
														<input type="checkbox" name="dil_4_check" value="1" <?php if($dil_4_durum==1) { echo "checked"; }?>> 
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" placeholder="Dil Adı" name="dil_4_adi" value="<?=$dil_4_adi?>">
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" placeholder="Dil Ön Eki" name="dil_4_eki" value="<?=$dil_4_on_eki?>">
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 text-right">Dil 5</label>
											<div class="col-sm-1">
												<div class="checkbox product-basic-checkbox">
													<label>
														<input type="checkbox" name="dil_5_check" value="1" <?php if($dil_5_durum==1) { echo "checked"; }?>> 
														<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
													</label>
												</div>
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" placeholder="Dil Adı" name="dil_5_adi" value="<?=$dil_5_adi?>">
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" placeholder="Dil Ön Eki" name="dil_5_eki" value="<?=$dil_5_on_eki?>">
											</div>
										</div>										
									</div>
									<div class="col-md-4">
										<ol>
											<li>Eklemek istediğiniz dil için checkbox'ı seçin</li>
											<li>Eklenecek dilin adını girin; Örn; İngilizce, Fransızca vb.</li>
											<li>Eklenecek dil için bir tablo ön eki girin. Örn; en, fr vb.</li>
											<li>Eğer kaydederken checkbox seçili olmazsa, önceden kaydedilmiş tablolar silinecektir.</li>
										</ol>
									</div>									
									<div class="col-md-12">
										<div class="form-group">
											<div class="col-md-12 text-center">
												<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> BİLGİLERİ GÜNCELLE</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							
							
						</div>
						
						<hr class="main-content-header-hr" />
<?php

					}
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
		if($islem == "edit2"){
			$sayfa_goruntuleme = @$_POST["sayfa_goruntuleme"];			
			$sayfa_goruntuleme = @implode(',',$sayfa_goruntuleme);
			if($sayfa_goruntuleme==NULL){
				$sayfa_goruntuleme="";
			}
			$guncelle = $Conn -> prepare("update ayarlar set admin_goruntuleme=? where id=?");
			$guncelle -> execute(array($sayfa_goruntuleme,1));					
			header("Location:fibercozum_admin_ayarlari.php?bilgiislem=ok");
		}
		if($islem == "edit3"){
			$dil_secenegi = (trim(htmlspecialchars(strip_tags($_POST["dil_secenegi"]))));
			if ($dil_secenegi=="1"){ $dil_secenegi=1; }else{ $dil_secenegi=0; }	
			
			$dil_1_check = (trim(htmlspecialchars(strip_tags(@$_POST["dil_1_check"]))));
			if ($dil_1_check=="1"){ $dil_1_check=1; }else{ $dil_1_check=0; }	
			$dil_1_adi = (trim(htmlspecialchars(strip_tags($_POST["dil_1_adi"]))));
			$dil_1_eki = (trim(htmlspecialchars(strip_tags($_POST["dil_1_eki"]))));	

			$dil_2_check = (trim(htmlspecialchars(strip_tags(@$_POST["dil_2_check"]))));
			if ($dil_2_check=="1"){ $dil_2_check=1; }else{ $dil_2_check=0; }	
			$dil_2_adi = (trim(htmlspecialchars(strip_tags($_POST["dil_2_adi"]))));
			$dil_2_eki = (trim(htmlspecialchars(strip_tags($_POST["dil_2_eki"]))));
			
			$dil_3_check = (trim(htmlspecialchars(strip_tags(@$_POST["dil_3_check"]))));
			if ($dil_3_check=="1"){ $dil_3_check=1; }else{ $dil_3_check=0; }	
			$dil_3_adi = (trim(htmlspecialchars(strip_tags($_POST["dil_3_adi"]))));
			$dil_3_eki = (trim(htmlspecialchars(strip_tags($_POST["dil_3_eki"]))));
			
			$dil_4_check = (trim(htmlspecialchars(strip_tags(@$_POST["dil_4_check"]))));
			if ($dil_4_check=="1"){ $dil_4_check=1; }else{ $dil_4_check=0; }	
			$dil_4_adi = (trim(htmlspecialchars(strip_tags($_POST["dil_4_adi"]))));
			$dil_4_eki = (trim(htmlspecialchars(strip_tags($_POST["dil_4_eki"]))));
			
			$dil_5_check = (trim(htmlspecialchars(strip_tags(@$_POST["dil_5_check"]))));
			if ($dil_5_check=="1"){ $dil_5_check=1; }else{ $dil_5_check=0; }	
			$dil_5_adi = (trim(htmlspecialchars(strip_tags($_POST["dil_5_adi"]))));
			$dil_5_eki = (trim(htmlspecialchars(strip_tags($_POST["dil_5_eki"]))));


			$guncelle = $Conn -> prepare("update dil_ayarlari set dil_secenegi=?, dil_1_durum=?, dil_1_adi=?, dil_1_on_eki=?, dil_2_durum=?,dil_2_adi=?, dil_2_on_eki=?, dil_3_durum=?, dil_3_adi=?, dil_3_on_eki=?, dil_4_durum=?, dil_4_adi=?, dil_4_on_eki=?, dil_5_durum=?, dil_5_adi=?, dil_5_on_eki=? where id=?");
			$guncelle -> execute(array($dil_secenegi,$dil_1_check,$dil_1_adi,$dil_1_eki,$dil_2_check,$dil_2_adi,$dil_2_eki,$dil_3_check,$dil_3_adi,$dil_3_eki,$dil_4_check,$dil_4_adi,$dil_4_eki,$dil_5_check,$dil_5_adi,$dil_5_eki,1));
			
			
			if ($dil_1_check==1){
				if($dil_1_adi!="" && $dil_1_eki!=""){
					$dil_1_eki = $dil_1_eki."_";
					$guncelle1 = $Conn -> query("alter table ayarlar add ".$dil_1_eki."title VARCHAR(255) DEFAULT '', add ".$dil_1_eki."ust_slogan VARCHAR(255) DEFAULT '' ");
					$guncelle2 = $Conn -> query("alter table blog add ".$dil_1_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_1_eki."kisa_aciklama LONGTEXT DEFAULT '', add ".$dil_1_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_1_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle3 = $Conn -> query("alter table galeri add ".$dil_1_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_1_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle4 = $Conn -> query("alter table icon_tasarimi add ".$dil_1_eki."icon_adi VARCHAR(255) DEFAULT '', add ".$dil_1_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle5 = $Conn -> query("alter table kategoriler add ".$dil_1_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_1_eki."kisa_aciklama LONGTEXT DEFAULT '', add ".$dil_1_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_1_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle6 = $Conn -> query("alter table referanslar add ".$dil_1_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_1_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle7 = $Conn -> query("alter table sayfalar add ".$dil_1_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_1_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_1_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle8 = $Conn -> query("alter table slider add ".$dil_1_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_1_eki."slogan1 VARCHAR(255) DEFAULT '', add ".$dil_1_eki."slogan2 VARCHAR(255) DEFAULT '', add ".$dil_1_eki."slogan3 VARCHAR(255) DEFAULT '', add ".$dil_1_eki."slogan4 VARCHAR(255) DEFAULT '', add ".$dil_1_eki."slogan5 VARCHAR(255) DEFAULT '' ");
					$guncelle9 = $Conn -> query("alter table sorular add ".$dil_1_eki."soru VARCHAR(255) DEFAULT '', add ".$dil_1_eki."cevap LONGTEXT DEFAULT '' ");
					$guncelle10 = $Conn -> query("alter table urunler add ".$dil_1_eki."urun_adi VARCHAR(255) DEFAULT '', add ".$dil_1_eki."kisa_aciklama VARCHAR(255) DEFAULT '', add ".$dil_1_eki."urun_aciklama LONGTEXT DEFAULT '', add ".$dil_1_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle11 = $Conn -> query("alter table video_galeri add ".$dil_1_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_1_eki."iframe LONGTEXT DEFAULT '' ");
					$guncelle12 = $Conn -> query("alter table ozellikler add ".$dil_1_eki."baslik VARCHAR(255) DEFAULT '' ");
					$guncelle13 = $Conn -> query("alter table baslik_dil_ayarlari add ".$dil_1_eki."baslik VARCHAR(255) DEFAULT '' ");
				}
			}else{
				if($dil_1_adi!="" && $dil_1_eki!=""){
					$dil_1_eki = $dil_1_eki."_";
					$sil1 = $Conn -> query("alter table ayarlar DROP COLUMN ".$dil_1_eki."title, DROP COLUMN ".$dil_1_eki."ust_slogan ");					
					$sil2 = $Conn -> query("alter table blog DROP COLUMN ".$dil_1_eki."baslik, DROP COLUMN ".$dil_1_eki."kisa_aciklama, DROP COLUMN ".$dil_1_eki."aciklama, DROP COLUMN ".$dil_1_eki."seo_title ");
					$sil3 = $Conn -> query("alter table galeri DROP COLUMN ".$dil_1_eki."baslik, DROP COLUMN ".$dil_1_eki."aciklama ");
					$sil4 = $Conn -> query("alter table icon_tasarimi DROP COLUMN ".$dil_1_eki."icon_adi, DROP COLUMN ".$dil_1_eki."aciklama ");
					$sil5 = $Conn -> query("alter table kategoriler DROP COLUMN ".$dil_1_eki."baslik, DROP COLUMN ".$dil_1_eki."kisa_aciklama, DROP COLUMN ".$dil_1_eki."aciklama, DROP COLUMN ".$dil_1_eki."seo_title ");
					$sil6 = $Conn -> query("alter table referanslar DROP COLUMN ".$dil_1_eki."baslik, DROP COLUMN ".$dil_1_eki."aciklama ");
					$sil7 = $Conn -> query("alter table sayfalar DROP COLUMN ".$dil_1_eki."baslik, DROP COLUMN ".$dil_1_eki."aciklama, DROP COLUMN ".$dil_1_eki."seo_title ");
					$sil8 = $Conn -> query("alter table slider DROP COLUMN ".$dil_1_eki."baslik, DROP COLUMN ".$dil_1_eki."slogan1, DROP COLUMN ".$dil_1_eki."slogan2, DROP COLUMN ".$dil_1_eki."slogan3, DROP COLUMN ".$dil_1_eki."slogan4, DROP COLUMN ".$dil_1_eki."slogan5 ");
					$sil9 = $Conn -> query("alter table sorular DROP COLUMN ".$dil_1_eki."soru, DROP COLUMN ".$dil_1_eki."cevap ");
					$sil10 = $Conn -> query("alter table urunler DROP COLUMN ".$dil_1_eki."urun_adi, DROP COLUMN ".$dil_1_eki."kisa_aciklama, DROP COLUMN ".$dil_1_eki."urun_aciklama, DROP COLUMN ".$dil_1_eki."seo_title ");
					$sil11 = $Conn -> query("alter table video_galeri DROP COLUMN ".$dil_1_eki."baslik, DROP COLUMN ".$dil_1_eki."iframe ");
					$sil12 = $Conn -> query("alter table ozellikler DROP COLUMN ".$dil_1_eki."baslik");
				}
			}
			
			if ($dil_2_check==1){
				if($dil_2_adi!="" && $dil_2_eki!=""){
					$dil_2_eki = $dil_2_eki."_";
					$guncelle1 = $Conn -> query("alter table ayarlar add ".$dil_2_eki."title VARCHAR(255) DEFAULT '', add ".$dil_2_eki."ust_slogan VARCHAR(255) DEFAULT '' ");
					$guncelle2 = $Conn -> query("alter table blog add ".$dil_2_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_2_eki."kisa_aciklama LONGTEXT DEFAULT '', add ".$dil_2_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_2_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle3 = $Conn -> query("alter table galeri add ".$dil_2_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_2_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle4 = $Conn -> query("alter table icon_tasarimi add ".$dil_2_eki."icon_adi VARCHAR(255) DEFAULT '', add ".$dil_2_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle5 = $Conn -> query("alter table kategoriler add ".$dil_2_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_2_eki."kisa_aciklama LONGTEXT DEFAULT '', add ".$dil_2_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_2_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle6 = $Conn -> query("alter table referanslar add ".$dil_2_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_2_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle7 = $Conn -> query("alter table sayfalar add ".$dil_2_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_2_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_2_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle8 = $Conn -> query("alter table slider add ".$dil_2_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_2_eki."slogan1 VARCHAR(255) DEFAULT '', add ".$dil_2_eki."slogan2 VARCHAR(255) DEFAULT '', add ".$dil_2_eki."slogan3 VARCHAR(255) DEFAULT '', add ".$dil_2_eki."slogan4 VARCHAR(255) DEFAULT '', add ".$dil_2_eki."slogan5 VARCHAR(255) DEFAULT '' ");
					$guncelle9 = $Conn -> query("alter table sorular add ".$dil_2_eki."soru VARCHAR(255) DEFAULT '', add ".$dil_2_eki."cevap LONGTEXT DEFAULT '' ");
					$guncelle10 = $Conn -> query("alter table urunler add ".$dil_2_eki."urun_adi VARCHAR(255) DEFAULT '', add ".$dil_2_eki."kisa_aciklama VARCHAR(255) DEFAULT '', add ".$dil_2_eki."urun_aciklama LONGTEXT DEFAULT '', add ".$dil_2_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle11 = $Conn -> query("alter table video_galeri add ".$dil_2_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_2_eki."iframe LONGTEXT DEFAULT '' ");
					$guncelle12 = $Conn -> query("alter table ozellikler add ".$dil_2_eki."baslik VARCHAR(255) DEFAULT '' ");
					$guncelle13 = $Conn -> query("alter table baslik_dil_ayarlari add ".$dil_2_eki."baslik VARCHAR(255) DEFAULT '' ");
				}
			}else{
				if($dil_2_eki!="" && $dil_2_eki!=""){
					$dil_2_eki = $dil_2_eki."_";
					$sil1 = $Conn -> query("alter table ayarlar DROP COLUMN ".$dil_2_eki."title, DROP COLUMN ".$dil_2_eki."ust_slogan ");					
					$sil2 = $Conn -> query("alter table blog DROP COLUMN ".$dil_2_eki."baslik, DROP COLUMN ".$dil_2_eki."kisa_aciklama, DROP COLUMN ".$dil_2_eki."aciklama, DROP COLUMN ".$dil_2_eki."seo_title ");
					$sil3 = $Conn -> query("alter table galeri DROP COLUMN ".$dil_2_eki."baslik, DROP COLUMN ".$dil_2_eki."aciklama ");
					$sil4 = $Conn -> query("alter table icon_tasarimi DROP COLUMN ".$dil_2_eki."icon_adi, DROP COLUMN ".$dil_2_eki."aciklama ");
					$sil5 = $Conn -> query("alter table kategoriler DROP COLUMN ".$dil_2_eki."baslik, DROP COLUMN ".$dil_2_eki."kisa_aciklama, DROP COLUMN ".$dil_2_eki."aciklama, DROP COLUMN ".$dil_2_eki."seo_title ");
					$sil6 = $Conn -> query("alter table referanslar DROP COLUMN ".$dil_2_eki."baslik, DROP COLUMN ".$dil_2_eki."aciklama ");
					$sil7 = $Conn -> query("alter table sayfalar DROP COLUMN ".$dil_2_eki."baslik, DROP COLUMN ".$dil_2_eki."aciklama, DROP COLUMN ".$dil_2_eki."seo_title ");
					$sil8 = $Conn -> query("alter table slider DROP COLUMN ".$dil_2_eki."baslik, DROP COLUMN ".$dil_2_eki."slogan1, DROP COLUMN ".$dil_2_eki."slogan2, DROP COLUMN ".$dil_2_eki."slogan3, DROP COLUMN ".$dil_2_eki."slogan4, DROP COLUMN ".$dil_2_eki."slogan5 ");
					$sil9 = $Conn -> query("alter table sorular DROP COLUMN ".$dil_2_eki."soru, DROP COLUMN ".$dil_2_eki."cevap ");
					$sil10 = $Conn -> query("alter table urunler DROP COLUMN ".$dil_2_eki."urun_adi, DROP COLUMN ".$dil_2_eki."kisa_aciklama, DROP COLUMN ".$dil_2_eki."urun_aciklama, DROP COLUMN ".$dil_2_eki."seo_title ");
					$sil11 = $Conn -> query("alter table video_galeri DROP COLUMN ".$dil_2_eki."baslik, DROP COLUMN ".$dil_2_eki."iframe ");
					$sil12 = $Conn -> query("alter table ozellikler DROP COLUMN ".$dil_2_eki."baslik");
				}
			}
			
			if ($dil_3_check==1){
				if($dil_3_adi!="" && $dil_3_eki!=""){
					$dil_3_eki = $dil_3_eki."_";
					$guncelle1 = $Conn -> query("alter table ayarlar add ".$dil_3_eki."title VARCHAR(255) DEFAULT '', add ".$dil_3_eki."ust_slogan VARCHAR(255) DEFAULT '' ");
					$guncelle2 = $Conn -> query("alter table blog add ".$dil_3_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_3_eki."kisa_aciklama LONGTEXT DEFAULT '', add ".$dil_3_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_3_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle3 = $Conn -> query("alter table galeri add ".$dil_3_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_3_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle4 = $Conn -> query("alter table icon_tasarimi add ".$dil_3_eki."icon_adi VARCHAR(255) DEFAULT '', add ".$dil_3_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle5 = $Conn -> query("alter table kategoriler add ".$dil_3_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_3_eki."kisa_aciklama LONGTEXT DEFAULT '', add ".$dil_3_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_3_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle6 = $Conn -> query("alter table referanslar add ".$dil_3_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_3_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle7 = $Conn -> query("alter table sayfalar add ".$dil_3_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_3_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_3_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle8 = $Conn -> query("alter table slider add ".$dil_3_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_3_eki."slogan1 VARCHAR(255) DEFAULT '', add ".$dil_3_eki."slogan2 VARCHAR(255) DEFAULT '', add ".$dil_3_eki."slogan3 VARCHAR(255) DEFAULT '', add ".$dil_3_eki."slogan4 VARCHAR(255) DEFAULT '', add ".$dil_3_eki."slogan5 VARCHAR(255) DEFAULT '' ");
					$guncelle9 = $Conn -> query("alter table sorular add ".$dil_3_eki."soru VARCHAR(255) DEFAULT '', add ".$dil_3_eki."cevap LONGTEXT DEFAULT '' ");
					$guncelle10 = $Conn -> query("alter table urunler add ".$dil_3_eki."urun_adi VARCHAR(255) DEFAULT '', add ".$dil_3_eki."kisa_aciklama VARCHAR(255) DEFAULT '', add ".$dil_3_eki."urun_aciklama LONGTEXT DEFAULT '', add ".$dil_3_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle11 = $Conn -> query("alter table video_galeri add ".$dil_3_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_3_eki."iframe LONGTEXT DEFAULT '' ");
					$guncelle12 = $Conn -> query("alter table ozellikler add ".$dil_3_eki."baslik VARCHAR(255) DEFAULT '' ");
					$guncelle13 = $Conn -> query("alter table baslik_dil_ayarlari add ".$dil_3_eki."baslik VARCHAR(255) DEFAULT '' ");
				}
			}else{
				if($dil_3_eki!="" && $dil_3_eki!=""){
					$dil_3_eki = $dil_3_eki."_";
					$sil1 = $Conn -> query("alter table ayarlar DROP COLUMN ".$dil_3_eki."title, DROP COLUMN ".$dil_3_eki."ust_slogan ");					
					$sil2 = $Conn -> query("alter table blog DROP COLUMN ".$dil_3_eki."baslik, DROP COLUMN ".$dil_3_eki."kisa_aciklama, DROP COLUMN ".$dil_3_eki."aciklama, DROP COLUMN ".$dil_3_eki."seo_title ");
					$sil3 = $Conn -> query("alter table galeri DROP COLUMN ".$dil_3_eki."baslik, DROP COLUMN ".$dil_3_eki."aciklama ");
					$sil4 = $Conn -> query("alter table icon_tasarimi DROP COLUMN ".$dil_3_eki."icon_adi, DROP COLUMN ".$dil_3_eki."aciklama ");
					$sil5 = $Conn -> query("alter table kategoriler DROP COLUMN ".$dil_3_eki."baslik, DROP COLUMN ".$dil_3_eki."kisa_aciklama, DROP COLUMN ".$dil_3_eki."aciklama, DROP COLUMN ".$dil_3_eki."seo_title ");
					$sil6 = $Conn -> query("alter table referanslar DROP COLUMN ".$dil_3_eki."baslik, DROP COLUMN ".$dil_3_eki."aciklama ");
					$sil7 = $Conn -> query("alter table sayfalar DROP COLUMN ".$dil_3_eki."baslik, DROP COLUMN ".$dil_3_eki."aciklama, DROP COLUMN ".$dil_3_eki."seo_title ");
					$sil8 = $Conn -> query("alter table slider DROP COLUMN ".$dil_3_eki."baslik, DROP COLUMN ".$dil_3_eki."slogan1, DROP COLUMN ".$dil_3_eki."slogan2, DROP COLUMN ".$dil_3_eki."slogan3, DROP COLUMN ".$dil_3_eki."slogan4, DROP COLUMN ".$dil_3_eki."slogan5 ");
					$sil9 = $Conn -> query("alter table sorular DROP COLUMN ".$dil_3_eki."soru, DROP COLUMN ".$dil_3_eki."cevap ");
					$sil10 = $Conn -> query("alter table urunler DROP COLUMN ".$dil_3_eki."urun_adi, DROP COLUMN ".$dil_3_eki."kisa_aciklama, DROP COLUMN ".$dil_3_eki."urun_aciklama, DROP COLUMN ".$dil_3_eki."seo_title ");
					$sil11 = $Conn -> query("alter table video_galeri DROP COLUMN ".$dil_3_eki."baslik, DROP COLUMN ".$dil_3_eki."iframe ");
					$sil12 = $Conn -> query("alter table ozellikler DROP COLUMN ".$dil_3_eki."baslik");
				}
			}
			
			if ($dil_4_check==1){
				if($dil_4_adi!="" && $dil_4_eki!=""){
					$dil_4_eki = $dil_4_eki."_";
					$guncelle1 = $Conn -> query("alter table ayarlar add ".$dil_4_eki."title VARCHAR(255) DEFAULT '', add ".$dil_4_eki."ust_slogan VARCHAR(255) DEFAULT '' ");
					$guncelle2 = $Conn -> query("alter table blog add ".$dil_4_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_4_eki."kisa_aciklama LONGTEXT DEFAULT '', add ".$dil_4_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_4_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle3 = $Conn -> query("alter table galeri add ".$dil_4_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_4_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle4 = $Conn -> query("alter table icon_tasarimi add ".$dil_4_eki."icon_adi VARCHAR(255) DEFAULT '', add ".$dil_4_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle5 = $Conn -> query("alter table kategoriler add ".$dil_4_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_4_eki."kisa_aciklama LONGTEXT DEFAULT '', add ".$dil_4_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_4_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle6 = $Conn -> query("alter table referanslar add ".$dil_4_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_4_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle7 = $Conn -> query("alter table sayfalar add ".$dil_4_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_4_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_4_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle8 = $Conn -> query("alter table slider add ".$dil_4_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_4_eki."slogan1 VARCHAR(255) DEFAULT '', add ".$dil_4_eki."slogan2 VARCHAR(255) DEFAULT '', add ".$dil_4_eki."slogan3 VARCHAR(255) DEFAULT '', add ".$dil_4_eki."slogan4 VARCHAR(255) DEFAULT '', add ".$dil_4_eki."slogan5 VARCHAR(255) DEFAULT '' ");
					$guncelle9 = $Conn -> query("alter table sorular add ".$dil_4_eki."soru VARCHAR(255) DEFAULT '', add ".$dil_4_eki."cevap LONGTEXT DEFAULT '' ");
					$guncelle10 = $Conn -> query("alter table urunler add ".$dil_4_eki."urun_adi VARCHAR(255) DEFAULT '', add ".$dil_4_eki."kisa_aciklama VARCHAR(255) DEFAULT '', add ".$dil_4_eki."urun_aciklama LONGTEXT DEFAULT '', add ".$dil_4_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle11 = $Conn -> query("alter table video_galeri add ".$dil_4_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_4_eki."iframe LONGTEXT DEFAULT '' ");
					$guncelle12 = $Conn -> query("alter table ozellikler add ".$dil_4_eki."baslik VARCHAR(255) DEFAULT '' ");
					$guncelle13 = $Conn -> query("alter table baslik_dil_ayarlari add ".$dil_4_eki."baslik VARCHAR(255) DEFAULT '' ");
				}
			}else{
				if($dil_4_eki!="" && $dil_4_eki!=""){
					$dil_4_eki = $dil_4_eki."_";
					$sil1 = $Conn -> query("alter table ayarlar DROP COLUMN ".$dil_4_eki."title, DROP COLUMN ".$dil_4_eki."ust_slogan ");					
					$sil2 = $Conn -> query("alter table blog DROP COLUMN ".$dil_4_eki."baslik, DROP COLUMN ".$dil_4_eki."kisa_aciklama, DROP COLUMN ".$dil_4_eki."aciklama, DROP COLUMN ".$dil_4_eki."seo_title ");
					$sil3 = $Conn -> query("alter table galeri DROP COLUMN ".$dil_4_eki."baslik, DROP COLUMN ".$dil_4_eki."aciklama ");
					$sil4 = $Conn -> query("alter table icon_tasarimi DROP COLUMN ".$dil_4_eki."icon_adi, DROP COLUMN ".$dil_4_eki."aciklama ");
					$sil5 = $Conn -> query("alter table kategoriler DROP COLUMN ".$dil_4_eki."baslik, DROP COLUMN ".$dil_4_eki."kisa_aciklama, DROP COLUMN ".$dil_4_eki."aciklama, DROP COLUMN ".$dil_4_eki."seo_title ");
					$sil6 = $Conn -> query("alter table referanslar DROP COLUMN ".$dil_4_eki."baslik, DROP COLUMN ".$dil_4_eki."aciklama ");
					$sil7 = $Conn -> query("alter table sayfalar DROP COLUMN ".$dil_4_eki."baslik, DROP COLUMN ".$dil_4_eki."aciklama, DROP COLUMN ".$dil_4_eki."seo_title ");
					$sil8 = $Conn -> query("alter table slider DROP COLUMN ".$dil_4_eki."baslik, DROP COLUMN ".$dil_4_eki."slogan1, DROP COLUMN ".$dil_4_eki."slogan2, DROP COLUMN ".$dil_4_eki."slogan3, DROP COLUMN ".$dil_4_eki."slogan4, DROP COLUMN ".$dil_4_eki."slogan5 ");
					$sil9 = $Conn -> query("alter table sorular DROP COLUMN ".$dil_4_eki."soru, DROP COLUMN ".$dil_4_eki."cevap ");
					$sil10 = $Conn -> query("alter table urunler DROP COLUMN ".$dil_4_eki."urun_adi, DROP COLUMN ".$dil_4_eki."kisa_aciklama, DROP COLUMN ".$dil_4_eki."urun_aciklama, DROP COLUMN ".$dil_4_eki."seo_title ");
					$sil11 = $Conn -> query("alter table video_galeri DROP COLUMN ".$dil_4_eki."baslik, DROP COLUMN ".$dil_4_eki."iframe ");
					$sil12 = $Conn -> query("alter table ozellikler DROP COLUMN ".$dil_4_eki."baslik");
				}
			}
			
			if ($dil_5_check==1){
				if($dil_5_adi!="" && $dil_5_eki!=""){
					$dil_5_eki = $dil_5_eki."_";
					$guncelle1 = $Conn -> query("alter table ayarlar add ".$dil_5_eki."title VARCHAR(255) DEFAULT '', add ".$dil_5_eki."ust_slogan VARCHAR(255) DEFAULT '' ");
					$guncelle2 = $Conn -> query("alter table blog add ".$dil_5_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_5_eki."kisa_aciklama LONGTEXT DEFAULT '', add ".$dil_5_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_5_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle3 = $Conn -> query("alter table galeri add ".$dil_5_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_5_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle4 = $Conn -> query("alter table icon_tasarimi add ".$dil_5_eki."icon_adi VARCHAR(255) DEFAULT '', add ".$dil_5_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle5 = $Conn -> query("alter table kategoriler add ".$dil_5_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_5_eki."kisa_aciklama LONGTEXT DEFAULT '', add ".$dil_5_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_5_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle6 = $Conn -> query("alter table referanslar add ".$dil_5_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_5_eki."aciklama LONGTEXT DEFAULT '' ");
					$guncelle7 = $Conn -> query("alter table sayfalar add ".$dil_5_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_5_eki."aciklama LONGTEXT DEFAULT '', add ".$dil_5_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle8 = $Conn -> query("alter table slider add ".$dil_5_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_5_eki."slogan1 VARCHAR(255) DEFAULT '', add ".$dil_5_eki."slogan2 VARCHAR(255) DEFAULT '', add ".$dil_5_eki."slogan3 VARCHAR(255) DEFAULT '', add ".$dil_5_eki."slogan4 VARCHAR(255) DEFAULT '', add ".$dil_5_eki."slogan5 VARCHAR(255) DEFAULT '' ");
					$guncelle9 = $Conn -> query("alter table sorular add ".$dil_5_eki."soru VARCHAR(255) DEFAULT '', add ".$dil_5_eki."cevap LONGTEXT DEFAULT '' ");
					$guncelle10 = $Conn -> query("alter table urunler add ".$dil_5_eki."urun_adi VARCHAR(255) DEFAULT '', add ".$dil_5_eki."kisa_aciklama VARCHAR(255) DEFAULT '', add ".$dil_5_eki."urun_aciklama LONGTEXT DEFAULT '', add ".$dil_5_eki."seo_title VARCHAR(255) DEFAULT '' ");
					$guncelle11 = $Conn -> query("alter table video_galeri add ".$dil_5_eki."baslik VARCHAR(255) DEFAULT '', add ".$dil_5_eki."iframe LONGTEXT DEFAULT '' ");
					$guncelle12 = $Conn -> query("alter table ozellikler add ".$dil_5_eki."baslik VARCHAR(255) DEFAULT '' ");
					$guncelle13 = $Conn -> query("alter table baslik_dil_ayarlari add ".$dil_5_eki."baslik VARCHAR(255) DEFAULT '' ");
				}
			}else{
				if($dil_5_eki!="" && $dil_5_eki!=""){
					$dil_5_eki = $dil_5_eki."_";
					$sil1 = $Conn -> query("alter table ayarlar DROP COLUMN ".$dil_5_eki."title, DROP COLUMN ".$dil_5_eki."ust_slogan ");					
					$sil2 = $Conn -> query("alter table blog DROP COLUMN ".$dil_5_eki."baslik, DROP COLUMN ".$dil_5_eki."kisa_aciklama, DROP COLUMN ".$dil_5_eki."aciklama, DROP COLUMN ".$dil_5_eki."seo_title ");
					$sil3 = $Conn -> query("alter table galeri DROP COLUMN ".$dil_5_eki."baslik, DROP COLUMN ".$dil_5_eki."aciklama ");
					$sil4 = $Conn -> query("alter table icon_tasarimi DROP COLUMN ".$dil_5_eki."icon_adi, DROP COLUMN ".$dil_5_eki."aciklama ");
					$sil5 = $Conn -> query("alter table kategoriler DROP COLUMN ".$dil_5_eki."baslik, DROP COLUMN ".$dil_5_eki."kisa_aciklama, DROP COLUMN ".$dil_5_eki."aciklama, DROP COLUMN ".$dil_5_eki."seo_title ");
					$sil6 = $Conn -> query("alter table referanslar DROP COLUMN ".$dil_5_eki."baslik, DROP COLUMN ".$dil_5_eki."aciklama ");
					$sil7 = $Conn -> query("alter table sayfalar DROP COLUMN ".$dil_5_eki."baslik, DROP COLUMN ".$dil_5_eki."aciklama, DROP COLUMN ".$dil_5_eki."seo_title ");
					$sil8 = $Conn -> query("alter table slider DROP COLUMN ".$dil_5_eki."baslik, DROP COLUMN ".$dil_5_eki."slogan1, DROP COLUMN ".$dil_5_eki."slogan2, DROP COLUMN ".$dil_5_eki."slogan3, DROP COLUMN ".$dil_5_eki."slogan4, DROP COLUMN ".$dil_5_eki."slogan5 ");
					$sil9 = $Conn -> query("alter table sorular DROP COLUMN ".$dil_5_eki."soru, DROP COLUMN ".$dil_5_eki."cevap ");
					$sil10 = $Conn -> query("alter table urunler DROP COLUMN ".$dil_5_eki."urun_adi, DROP COLUMN ".$dil_5_eki."kisa_aciklama, DROP COLUMN ".$dil_5_eki."urun_aciklama, DROP COLUMN ".$dil_5_eki."seo_title ");
					$sil11 = $Conn -> query("alter table video_galeri DROP COLUMN ".$dil_5_eki."baslik, DROP COLUMN ".$dil_5_eki."iframe ");
					$sil12 = $Conn -> query("alter table ozellikler DROP COLUMN ".$dil_5_eki."baslik");
				}
			}
	
			header("Location:fibercozum_admin_ayarlari.php?bilgiislem=ok");
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
}else{
	header("Location:yetkiyok.php");
}
?>
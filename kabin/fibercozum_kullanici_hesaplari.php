<?php require_once "parola.php"; ?>
<?php
$sayfa = @intval(($_GET["s"]));
	if(!$sayfa) $sayfa = 1;
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
						<h3 class="main-content-header"><i class="fa fa-user-plus" aria-hidden="true"></i> Kullanıcı Hesapları</h3>				
						<hr class="main-content-header-hr" />
						<a href="fibercozum_kullanici_hesaplari.php?islem=ekle" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true" title="Sil"></i> Yeni Kullanıcı Hesabı Ekle</a>
						<hr class="main-content-header-hr" />
<?php
	if(!empty($_GET["bilgiislem"])){
		$islem = $_GET["bilgiislem"];
		if($islem == "ok"){
			echo '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-check" aria-hidden="true"></i> İşlem başarılı bir şekilde gerçekleşti !</strong></h5></div><div class="clearfix"></div>';
		}elseif($islem == "karakteraz"){
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> İşleminiz başarısız oldu ! Kullanıcı Adı ve şifreniz en az 8 karakter içermelidir.</strong></h5></div><div class="clearfix"></div>';
		}elseif($islem == "sifreuyusmuyor"){
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> İşleminiz başarısız oldu ! Tekrar edilen şifreler uyuşmuyor.</strong></h5></div><div class="clearfix"></div>';
		}elseif($islem == "eksikbilgi"){
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> İşleminiz başarısız oldu !</strong></h5></div><div class="clearfix"></div>';
		}elseif($islem == "aynikullanici"){
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> İşleminiz başarısız oldu ! Aynı isimde kullanıcı mevcuttur.</strong></h5></div><div class="clearfix"></div>';
		}
		
	}
?>
<?php	
	if(!empty($_GET["islem"]) && !empty($_GET["kullaniciid"])){
		$islem = $_GET["islem"];
		$kullaniciid = ($_GET["kullaniciid"]);
		if($islem == "duzenle"){
			$sayfadetay = $Conn -> prepare("select * from kullanicilar where id=?");
			$sayfadetay -> execute(array($kullaniciid));
			$sayfadetay = $sayfadetay->fetch();
				if($sayfadetay){			
					$hesap_id = $sayfadetay["id"];
					$hesap_adi = $sayfadetay["hesap_adi"];
					$kullanici_adi = $sayfadetay["kullanici_adi"];
					$sayfa_goruntuleme = $sayfadetay["sayfa_goruntuleme"];
					$durum = $sayfadetay["durum"];
?>							
						<div class="row order-edit-box sistem_kullanici">
							<div class="col-md-12">
								<h4><strong><i class="fa fa-user-plus" aria-hidden="true"></i> Yeni Kullanıcı Hesabı Ekle</strong></h4>
								<hr class="main-content-header-hr" />
								<p>* Kullanıcı hesabı şifresi ve giriş kullanıcı adı belirleyebilir, kullanıcı hesabının yetkilerini belirleyebilirsiniz.</p>
								<div class="row">
										<h5 class="edit-product-header"><strong><i class="fa fa-user-secret" aria-hidden="true"></i> Güvenlik Ayarları</strong></h5>
										<hr class="main-content-header-hr" />
									<form class="form-horizontal" action="fibercozum_kullanici_hesaplari.php?s=<?=$sayfa?>&islem=edit&hesapid=<?=$hesap_id?>" method="post">
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-3 text-right">Kullanıcı Hesabı Adı</label>
												<div class="col-sm-5">
													<input type="text" class="form-control" placeholder="Kullanıcı Hesabı Adı" name="hesapadi" value="<?=$hesap_adi?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 text-right">Hesap Giriş Kullanıcı Adı</label>
												<div class="col-sm-5">
													<input type="text" class="form-control" placeholder="Hesap Giriş Kullanıcı Adı" name="kullaniciadi" value="<?=$kullanici_adi?>">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 text-right">Hesap Şifresi</label>
												<div class="col-sm-3">
													<input type="password" class="form-control" name="sifre1" value="******" readonly>
												</div>
												<div class="col-sm-3">
													<button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#sifremodal<?=$hesap_id?>"><i class="fa fa-lock" data-toggle="tooltip" data-placement="top" aria-hidden="true" title="ŞİFREYİ DEĞİŞTİR"></i> ŞİFREYİ DEĞİŞTİR</button>	
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 text-right">Durum</label>
												<div class="col-sm-1">
													<div class="checkbox product-basic-checkbox">
														<label>
															<input type="checkbox" name="durum" value="1" <?php if($durum==1) { echo "checked"; }?>> 
															<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
														</label>
													</div>
												</div>
												<div class="col-md-6">
													<small>(Hesabı Aktif / Pasif Yapabilirsiniz)</small>
												</div>
											</div>
										</div>
										<hr class="main-content-header-hr" />
										<h5 class="edit-product-header"><strong><i class="fa fa-rocket" aria-hidden="true"></i> Kullanıcı Grubu Yetkileri</strong></h5>
										<hr class="main-content-header-hr" />
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

													</tbody>
												</table>
											</div>
										</div>
										<div class="clearfix"></div>
										<hr class="main-content-header-hr" />
										<div class="col-md-12">
											<div class="form-group">
												<div class="col-md-12 text-center">
													<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i> DEĞİŞİKLİKLERİ KAYDET</button>
												</div>
											</div>
										</div>
									</form>	
								</div>
							</div>
						</div>
						<!-- Modal Start -->
						<div class="modal fade" id="sifremodal<?=$hesap_id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header brand-primary">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title"><i class="fa fa-lock"></i> <strong><?=$hesap_adi?></strong> Hesabının Şifresini Değiştir</h4>
									</div>
									<form class="form-horizontal" action="fibercozum_kullanici_hesaplari.php?s=<?=$sayfa?>&islem=editsifre&hesapid=<?=$hesap_id?>" method="post">
										<div class="modal-body">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label class="col-sm-4 text-right">Hesap Şifresi</label>
														<div class="col-sm-6">
															<input type="password" class="form-control" placeholder="Hesap Şifresi" name="sifre1">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Hesap Şifresi Tekrar</label>
														<div class="col-sm-6">
															<input type="password" class="form-control" placeholder="Hesap Şifresini Tekrar Giriniz" name="sifre2">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">													
											<button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
											<button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> HESABIN ŞİFRESİNİ DEĞİŞTİR</button>
										</div>
									</form>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<!-- Modal End-->
						
						<hr class="main-content-header-hr" />
<?php
				}
		}
	}
?>					

<?php	
	if(!empty($_GET["islem"])){
		$islem = $_GET["islem"];
		if($islem == "ekle"){

?>							
						<div class="row order-edit-box sistem_kullanici">
							<div class="col-md-12">
								<h4><strong><i class="fa fa-user-plus" aria-hidden="true"></i> Yeni Kullanıcı Hesabı Ekle</strong></h4>
								<hr class="main-content-header-hr" />
								<p>* Kullanıcı hesabı şifresi ve giriş kullanıcı adı belirleyebilir, kullanıcı hesabının yetkilerini belirleyebilirsiniz.</p>
								<div class="row">
										<h5 class="edit-product-header"><strong><i class="fa fa-user-secret" aria-hidden="true"></i> Güvenlik Ayarları</strong></h5>
										<hr class="main-content-header-hr" />
									<form class="form-horizontal" action="fibercozum_kullanici_hesaplari.php?s=<?=$sayfa?>&islem=add" method="post">
										<div class="col-md-12">
											<div class="form-group">
												<label class="col-sm-3 text-right">Kullanıcı Hesabı Adı</label>
												<div class="col-sm-5">
													<input type="text" class="form-control" placeholder="Kullanıcı Hesabı Adı" name="hesapadi">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 text-right">Hesap Giriş Kullanıcı Adı</label>
												<div class="col-sm-5">
													<input type="text" class="form-control" placeholder="Hesap Giriş Kullanıcı Adı" name="kullaniciadi">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 text-right">Hesap Şifresi</label>
												<div class="col-sm-5">
													<input type="password" class="form-control" placeholder="Hesap Şifresi" name="sifre1">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 text-right">Hesap Şifresi Tekrar</label>
												<div class="col-sm-5">
													<input type="password" class="form-control" placeholder="Hesap Şifresini Tekrar Giriniz" name="sifre2">
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-3 text-right">Durum</label>
												<div class="col-sm-1">
													<div class="checkbox product-basic-checkbox">
														<label>
															<input type="checkbox" name="durum" checked> 
															<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
														</label>
													</div>
												</div>
												<div class="col-md-6">
													<small>(Hesabı Aktif / Pasif Yapabilirsiniz)</small>
												</div>
											</div>
										</div>
										<hr class="main-content-header-hr" />
										<h5 class="edit-product-header"><strong><i class="fa fa-rocket" aria-hidden="true"></i> Kullanıcı Grubu Yetkileri</strong></h5>
										<hr class="main-content-header-hr" />
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
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="001"></td>
														</tr>
														<tr>
															<td><strong>Kategoriler ve Ürünler</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="002"></td>
														</tr>
														
														<tr>
															<td><strong>Haberler</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="003"></td>
														</tr>
														
														<tr>
															<td><strong>Blog</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="004"></td>
														</tr>
														
														<tr>
															<td><strong>Referanslar</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="005"></td>
														</tr>
														
														<tr>
															<td><strong>Fotoğraf Galerisi</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="006"></td>
														</tr>
														
														<tr>
															<td><strong>Video Galeri</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="007"></td>
														</tr>
														
														<tr>
															<td><strong>Mail Ayarları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="008"></td>
														</tr>
														
														<tr>
															<td><strong>Slider</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="009"></td>
														</tr>
														
														<tr>
															<td><strong>Sıkça Sorulan Sorular</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="010"></td>
														</tr>
														
														<tr>
															<td><strong>Icon Tasarımı</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="011"></td>
														</tr>
														
														<tr>
															<td><strong>İletişim Mesajları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="012"></td>
														</tr>
														
														<tr>
															<td><strong>İnsan Kaynakları Mesajları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="013"></td>
														</tr>
														
														<tr>
															<td><strong>Talep Formu Mesajları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="014"></td>
														</tr>													
														
														<tr>
															<td><strong>Site Ayarları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="015"></td>
														</tr>														
														
														<tr>
															<td><strong>Kullanıcı Adı ve Şifre Ayarları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="016"></td>
														</tr>
														
														<tr>
															<td><strong>Kullanıcı Hesapları</strong></td>
															<td class="text-center spot4"><input type="checkbox" name="sayfa_goruntuleme[]" value="017"></td>
														</tr>

												
													</tbody>
												</table>
											</div>
										</div>
										<div class="clearfix"></div>
										<hr class="main-content-header-hr" />
										<div class="col-md-12">
											<div class="form-group">
												<div class="col-md-12 text-center">
													<button type="submit" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i> HESABI KAYDET</button>
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
	}
?>					
						<div class="table-responsive">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Kullanıcı Hesapları</th>
										<th>Kullanıcı Adı</th>
										<th>Hesap Durumu</th>
										<th>İşlemler</th>
									</tr>
								</thead>
								<tbody>
<?php
$Say = $Conn->query("select * from kullanicilar where (yonetim=0 and bayi=0)");
$toplam = $Say->rowCount();
$limit		= 30;
$sayfa_sayisi = ceil($toplam/$limit);
			if($sayfa>$sayfa_sayisi) $sayfa = 1;
$goster		= $sayfa * $limit - $limit;

$t = 1;
			$sorgu = $Conn->query("select * from kullanicilar where (yonetim=0 and bayi=0) order by id desc limit $goster, $limit");
			$count = $sorgu->rowCount();
			while($row = $sorgu->fetch(PDO::FETCH_ASSOC)){
				$kullanici_id = $row["id"];
				$hesap_adi = $row["hesap_adi"];
				$kullanici_adi = $row["kullanici_adi"];
				$durum = $row["durum"];
?>	
									<tr>
										<td><?=$t?></td>
										<td><?=$hesap_adi?></td>
										<td><?=$kullanici_adi?></td>
										<td><?php if($durum==1){ echo "<p class='text-success'>Aktif</p>"; }elseif($durum==0){ echo "<p class='text-danger'>Pasif</p>"; } ?></td>
										<td>
											<a href="fibercozum_kullanici_hesaplari.php?s=<?=$sayfa?>&islem=duzenle&kullaniciid=<?=$kullanici_id?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Düzenle"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
											<button type="button" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#grupsilmodal<?=$kullanici_id?>"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" aria-hidden="true" title="Sil"></i></button>
											<!-- Modal Start -->
											<div class="modal fade" id="grupsilmodal<?=$kullanici_id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header brand-primary">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															<h3 class="modal-title"><i class="fa fa-trash"></i> Kullanıcı Hesabı Silme</h3>
														</div>
															<div class="modal-body">
																<div class="row">
																	<div class="col-md-12">
																		<h4><strong><?=$kullanici_adi?></strong> adlı kullanıcı hesabını silmek istediğinize emin misiniz?</h4>
																	</div>
																</div>
															</div>
															<div class="modal-footer">													
																<button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
																<a href="fibercozum_kullanici_hesaplari.php?s=<?=$sayfa?>&islem=sil&kullaniciid=<?=$kullanici_id?>" class="btn btn-danger">Hesabı Sil</a>
															</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											<!-- Modal End-->
										</td>
									</tr>
<?php
$t++;
			}

?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-md-12 text-center">	
<?php
if($toplam!=0){
$gorunen	= 3;
$onceki = $sayfa - 1;
$sonraki = $sayfa +1;
?>	
								<nav aria-label="Page navigation">
									<ul class="pagination pagination-lg">
										<li <?php if($sayfa==1){ ?> class="disabled"<?php } ?>>
											<a href="fibercozum_kullanici_hesaplari.php?s=1" aria-label="First">
												<i class="fa fa-angle-double-left" aria-hidden="true"></i>
											</a>
										</li>
										<li <?php if($sayfa==1){ ?> class="disabled"<?php } ?>>
											<a href="fibercozum_kullanici_hesaplari.php?s=<?=$onceki?>" aria-label="Previous">
												<i class="fa fa-angle-left" aria-hidden="true"></i>
											</a>
										</li>
<?php
for($i= $sayfa - $gorunen; $i < $sayfa+$gorunen + 1;$i++){
	if($i > 0 and $i <= $sayfa_sayisi){
		if($i == $sayfa){
?>
										<li class="active"><a href="fibercozum_kullanici_hesaplari.php"><?=$i?></a></li>
	<?php
			}else{
	?>
										<li><a href="fibercozum_kullanici_hesaplari.php?s=<?=$i?>"><?=$i?></a></li>
<?php   }
	}
}

?>
										<li <?php if($sayfa == $sayfa_sayisi){ ?> class="disabled"<?php } ?>>
											<a href="fibercozum_kullanici_hesaplari.php?s=<?=$sonraki?>" aria-label="Next">
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</a>
										</li>
										<li <?php if($sayfa == $sayfa_sayisi){ ?> class="disabled"<?php } ?>>
											<a href="fibercozum_kullanici_hesaplari.php?s=<?=$sayfa_sayisi?>" aria-label="Last">
												<i class="fa fa-angle-double-right" aria-hidden="true"></i>
											</a>
										</li>
									</ul>
								</nav>
<?php } ?>
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
		if($islem == "add"){
			$hesapadi = (trim(htmlspecialchars(strip_tags($_POST["hesapadi"]))));
			$kullaniciadi = (trim(htmlspecialchars(strip_tags($_POST["kullaniciadi"]))));
			$sifre1 = (trim(htmlspecialchars(strip_tags($_POST["sifre1"]))));
			$sifre2 = (trim(htmlspecialchars(strip_tags($_POST["sifre2"]))));
			$durum = (trim(htmlspecialchars(strip_tags($_POST["durum"]))));
			if ($durum=="on"){ $durum=1; }else{ $durum=0; }
			
			$sayfa_goruntuleme = @$_POST["sayfa_goruntuleme"];			
			$sayfa_goruntuleme = @implode(',',$sayfa_goruntuleme);
			
			if($sayfa_goruntuleme==NULL){
				$sayfa_goruntuleme="";
			}
			
			$rs6 = $Conn -> prepare("SELECT * FROM kullanicilar where kullanici_adi=?");
			$rs6 -> execute(array($kullaniciadi));
			$rs6 = $rs6->fetch();
			if($rs6){
				header("Location:fibercozum_kullanici_hesaplari.php?bilgiislem=aynikullanici");
				exit();
			}
			
			$kullaniciadisayi = strlen($kullaniciadi);
			if($kullaniciadisayi<8){
				header("Location:fibercozum_kullanici_hesaplari.php?islem=ekle&bilgiislem=karakteraz");
				exit();
			}
			$sifre1sayi = strlen($sifre1);
			$sifre2sayi = strlen($sifre2);
			if($sifre1sayi<8){
				header("Location:fibercozum_kullanici_hesaplari.php?islem=ekle&bilgiislem=karakteraz");
				exit();
			}
			
			if($sifre1sayi!=$sifre2sayi){
				header("Location:fibercozum_kullanici_hesaplari.php?islem=ekle&bilgiislem=sifreuyusmuyor");
				exit();
			}
			
			if($hesapadi && $kullaniciadi && $sifre2){
				$sifre2 = md5($sifre2);
				
				$kayit = $Conn -> prepare("insert into kullanicilar set hesap_adi=?, kullanici_adi=?, sifre=?, sayfa_goruntuleme=?, durum=?, yonetim=?,bayi=?");
				$kayit -> execute(array($hesapadi,$kullaniciadi,$sifre2,$sayfa_goruntuleme,$durum,0,0));

				header("Location:fibercozum_kullanici_hesaplari.php?bilgiislem=ok");
			}else{
				header("Location:fibercozum_kullanici_hesaplari.php?bilgiislem=eksikbilgi");
			}
		}
	}
?>

<?php
	if(!empty($_GET["islem"]) && !empty($_GET["hesapid"])){
		$islem = $_GET["islem"];
		$hesapid = ($_GET["hesapid"]);
		require_once "fonksiyon.php";
		require_once PATH."/datapath.php";
		if($islem == "edit" && $hesapid!=1){
			$hesapadi = (trim(htmlspecialchars(strip_tags($_POST["hesapadi"]))));
			$kullaniciadi = (trim(htmlspecialchars(strip_tags($_POST["kullaniciadi"]))));
			$durum = (trim(htmlspecialchars(strip_tags($_POST["durum"]))));
			if ($durum=="1"){ $durum=1; }else{ $durum=0; }
			
			$sayfa_goruntuleme = $_POST["sayfa_goruntuleme"];
			$sayfa_goruntuleme = implode(',',$sayfa_goruntuleme);
			
			if($sayfa_goruntuleme==NULL){
				$sayfa_goruntuleme="";
			}

			$kullaniciadisayi = strlen($kullaniciadi);
			if($kullaniciadisayi<8){
				header("Location:fibercozum_kullanici_hesaplari.php?islem=ekle&bilgiislem=karakteraz");
				exit();
			}
			
			if($hesapadi && $kullaniciadi){
				$guncelle = $Conn -> prepare("update kullanicilar set hesap_adi=?, kullanici_adi=?, sayfa_goruntuleme=?, durum=? where id=?");
				$guncelle -> execute(array($hesapadi,$kullaniciadi,$sayfa_goruntuleme,$durum,$hesapid));
				header("Location:fibercozum_kullanici_hesaplari.php?s=".$sayfa."&islem=duzenle&kullaniciid=".$hesapid."&bilgiislem=ok");
			}else{
				header("Location:fibercozum_kullanici_hesaplari.php?s=".$sayfa."&islem=duzenle&kullaniciid=".$hesapid."&bilgiislem=eksikbilgi");
			}
		}
	}
?>

<?php
	if(!empty($_GET["islem"]) && !empty($_GET["hesapid"])){
		$islem = $_GET["islem"];
		$hesapid = ($_GET["hesapid"]);
		require_once "fonksiyon.php";
		require_once PATH."/datapath.php";
		if($islem == "editsifre" && $hesapid!=1){
			$sifre1 = trim(htmlspecialchars(strip_tags($_POST["sifre1"])));
			$sifre2 = trim(htmlspecialchars(strip_tags($_POST["sifre2"])));		
			$sifre1sayi = strlen($sifre1);
			$sifre2sayi = strlen($sifre2);
			if($sifre1sayi<8){
				header("Location:fibercozum_kullanici_hesaplari.php?s=".$sayfa."&islem=duzenle&kullaniciid=".$hesapid."&bilgiislem=karakteraz");
				exit();
			}
			
			if($sifre1sayi!=$sifre2sayi){
				header("Location:fibercozum_kullanici_hesaplari.php?s=".$sayfa."&islem=duzenle&kullaniciid=".$hesapid."&bilgiislem=sifreuyusmuyor");
				exit();
			}

			if($sifre2){
				$sifre2 = md5($sifre2);
				$guncelle = $Conn -> prepare("update kullanicilar set sifre=? where id=?");
				$guncelle -> execute(array($sifre2,$hesapid));					
				header("Location:fibercozum_kullanici_hesaplari.php?s=".$sayfa."&islem=duzenle&kullaniciid=".$hesapid."&bilgiislem=ok");
			}else{
				header("Location:fibercozum_kullanici_hesaplari.php?s=".$sayfa."&islem=duzenle&kullaniciid=".$hesapid."&bilgiislem=eksikbilgi");
			}
		}
	}
?>

<?php
	if(!empty($_GET["islem"]) && !empty($_GET["kullaniciid"])){
		$islem = $_GET["islem"];
		$kullaniciid = ($_GET["kullaniciid"]);
		if($islem == "sil" && $kullaniciid!=1){
			require_once PATH."/datapath.php";
			require_once "fonksiyon.php";
			$temizle = $Conn -> prepare("DELETE FROM kullanicilar WHERE id=?");
			$temizle -> execute(array($kullaniciid));
			header("Location:fibercozum_kullanici_hesaplari.php?s=".$sayfa."&bilgiislem=ok");
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
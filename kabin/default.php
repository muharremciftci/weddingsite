<?php require_once "parola.php"; ?>
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
						<div class="alert alert-success" role="alert"><h4>Hoşgeldiniz, <?=@$userS_Adi?></h4><p>Yönetim panelinden web sitenizde yer alan resimleri ve yazıları güncelleyebilirsiniz. İlgili alanlara yeni yazılar ve resimler ekleyebilirsiniz.</p></div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-info" role="alert">
									<h4>İletişim Bilgileri</h4>
									<p>Yönetim paneli ile ilgili soru/sorunlarınız için lütfen bize ulaşın.</p>
									<hr />
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
									<dl class="dl-horizontal">
										<dt>Firma Adımız :</dt>
										<dd><?=$bayi_firma_adi?></dd>
										<dt>Web Sitemiz :</dt>
										<dd><a href="<?=$bayi_web_sitesi?>" target="_blank"><?=$bayi_web_sitesi_sade?></a></dd>
										<dt>Telefon :</dt>
										<dd><?=$bayi_telefon?></dd>
										<dt>Ticari Sicil No :</dt>
										<dd><?=$bayi_ticari_sicil_no?></dd>
										<dt>Vergi No :</dt>
										<dd><?=$bayi_vergi_no?></dd>
										<dt>Vergi Dairesi :</dt>
										<dd><?=$bayi_vergi_dairesi?></dd>
									</dl>
		<?php
				}
		?>	
								</div>
							</div>
							<?php
							if(strstr($sayfa_goruntuleme, "012") && strstr($ayarlar_admin_goruntuleme, "012")) {
								$SayIletisimMesajlari = $Conn->query("select * from iletisim where kategori=1");
								$ToplamIletisimMesajlari = $SayIletisimMesajlari->rowCount();
						?>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="panel panel-primary login-page-box">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>İletişim Mesajları</h3>
									</div>
									<div class="panel-body" data-match-height="items-a">
										<h4>Toplam <strong><?=$ToplamIletisimMesajlari?></strong> adet iletişim mesajınız bulunmaktadır.</h4>
									</div>
									<div class="panel-footer text-right" data-match-height="items-b"><a href="fibercozum_iletisim_mesajlari.php">Tüm Mesajlar <i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
								</div>
							</div>
						<?php } ?>
						
						<?php
							if(strstr($sayfa_goruntuleme, "013") && strstr($ayarlar_admin_goruntuleme, "013")) {
								$SayIkMesajlari = $Conn->query("select * from iletisim where kategori=2");
								$ToplamIKMesajlari = $SayIkMesajlari->rowCount();
						?>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="panel panel-primary login-page-box">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>İnsan Kaynakları Mesajları</h3>
									</div>
									<div class="panel-body" data-match-height="items-a">
										<h4>Toplam <strong><?=$ToplamIKMesajlari?></strong> adet insan kaynakları mesajınız bulunmaktadır.</h4>
									</div>
									<div class="panel-footer text-right" data-match-height="items-b"><a href="fibercozum_insan_kaynaklari_mesajlari.php">Tüm Mesajlar <i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
								</div>
							</div>
						<?php } ?>
						
						<?php
							if(strstr($sayfa_goruntuleme, "014") && strstr($ayarlar_admin_goruntuleme, "014")) {
								$SayIkMesajlari = $Conn->query("select * from iletisim where kategori=2");
								$ToplamIKMesajlari = $SayIkMesajlari->rowCount();
						?>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="panel panel-primary login-page-box">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="fa fa-file-text-o" aria-hidden="true"></i>Talep Formu Mesajları</h3>
									</div>
									<div class="panel-body" data-match-height="items-a">
										<h4>Toplam <strong><?=$ToplamIKMesajlari?></strong> adet talep mesajınız bulunmaktadır.</h4>
									</div>
									<div class="panel-footer text-right" data-match-height="items-b"><a href="fibercozum_talep_formu_mesajlari.php">Tüm Mesajlar <i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i><i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
								</div>
							</div>
						<?php } ?>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="panel panel-primary login-page-box">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="fa fa-copyright" aria-hidden="true"></i>Versiyon Bilgileri</h3>
									</div>
									<div class="panel-body">
									<?php	
										require_once PATH."/datapath.php";
										$surumdetay = $Conn -> prepare("SELECT * FROM ayarlar where id=?");
										$surumdetay -> execute(array(1));
										$surumdetay = $surumdetay->fetch();
										if($surumdetay){	
												$surum_web_sitesi_sade = $surumdetay["web_sitesi_sade"];
										}
									?>
										<div class="table-responsive">
											<table class="table table-hover">
												<thead>
													<tr>
														<th>Bilgiler</th>
														<th>#</th>
													</tr>
												</thead>
												<tbody>
													<?php require_once "fonksiyon.php"; ?>
													<tr>
														<td>Güncel Sürüm</td>
														<td><strong>Fiber 7.0</strong></td>
													</tr>
													<tr>
														<td>Domain</td>
														<td><strong><?=$surum_web_sitesi_sade?></strong></td>
													</tr>
													<tr>
														<td>Server IP Adresi</td>
														<td><strong><?=$_SERVER['SERVER_ADDR']?></strong></td>
													</tr>
													<tr>
														<td>Yazılım Dili</td>
														<td><strong>PHP</strong></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<?php if($bayi_web_sitesi_sade=="www.fibercozum.com"){ ?>
							<div class="col-md-8">
								<div class="row">
									<div class="col-md-6">
										<img src="/foto/fiberticaret_210x297.jpg" class="img-thumbnail img-responsive" />
									</div>
									<div class="col-md-6">
										<img src="/foto/fiberhesap_210x297.jpg" class="img-thumbnail img-responsive" />
									</div>
								</div>
							</div>
							<?php } ?>
							
						</div>
					
					</div>
					
					
					
				
				
				
					

				</div>

			</div>
		</div>
	</div>
	</section>
</div>

<div class="clearfix"></div>

<?php require_once "altmenu.php";?>
<?php require_once "script.php";?>
		
  </body>
</html>
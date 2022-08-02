<?php require_once "parola.php"; ?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiber Çözüm Yazılım Teknolojileri</title>
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
						<h3 class="main-content-header"><i class="fa fa-file-text-o" aria-hidden="true"></i> Site Ayarları</h3>				
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
	$sayfadetay = $Conn->prepare("select * from ayarlar where id=?");
	$sayfadetay->execute(array(1));
	$count = $sayfadetay->rowCount();
	while($row = $sayfadetay->fetch(PDO::FETCH_ASSOC)){
			$firma_resmi_adi = $row["firma_resmi_adi"];
			$firma_adi = $row["firma_adi"];
			$kullanici_ad = $row["ad"];
			$kullanici_soyad = $row["soyad"];
			$web_sitesi = $row["web_sitesi"];
			$web_sitesi_sade = $row["web_sitesi_sade"];
			$adres = $row["adres"];
			$telefon = $row["telefon"];
			$telefon2 = $row["telefon2"];
			$faks = $row["faks"];
			$eposta = $row["eposta"];
			$ticari_sicil_no = $row["ticari_sicil_no"];
			$vergi_no = $row["vergi_no"];
			$vergi_dairesi = $row["vergi_dairesi"];
			$firma_maps = $row["maps"];		
			$site_title = $row["title"];
			$site_description = $row["description"];
			$site_keywords = $row["keywords"];
			$site_analytics = $row["google_analytics"];
			$yandex_metrica = $row["yandex_metrica"];
			$google_web_master = $row["google_web_master"];
			$yandex_web_master = $row["yandex_web_master"];
			$bing_web_master = $row["bing_web_master"];			
			$facebook = $row["facebook"];
			$twitter = $row["twitter"];
			$youtube = $row["youtube"];
			$instagram = $row["instagram"];
			$linkedin = $row["linkedin"];
			$whatsapp = $row["whatsapp"];
			$whatsapp_buton_gosterim = $row["whatsapp_buton_gosterim"];
			$whatsapp_buton_gosterim_konum = $row["whatsapp_buton_gosterim_konum"];
			$ust_slogan = $row["ust_slogan"];
			$favicon = $row["favicon"];
			if($ayarlar_dil_1_durum==1){
				$site_title1 = $row[$ayarlar_dil_1_on_eki."_title"];
				$ust_slogan1 = $row[$ayarlar_dil_1_on_eki."_ust_slogan"];
			}
			if($ayarlar_dil_2_durum==1){
				$site_title2 = $row[$ayarlar_dil_2_on_eki."_title"];
				$ust_slogan2 = $row[$ayarlar_dil_2_on_eki."_ust_slogan"];
			}
			if($ayarlar_dil_3_durum==1){
				$site_title3 = $row[$ayarlar_dil_3_on_eki."_title"];
				$ust_slogan3 = $row[$ayarlar_dil_3_on_eki."_ust_slogan"];
			}
			if($ayarlar_dil_4_durum==1){
				$site_title4 = $row[$ayarlar_dil_4_on_eki."_title"];
				$ust_slogan4 = $row[$ayarlar_dil_4_on_eki."_ust_slogan"];
			}
			if($ayarlar_dil_5_durum==1){
				$site_title5 = $row[$ayarlar_dil_5_on_eki."_title"];
				$ust_slogan5 = $row[$ayarlar_dil_5_on_eki."_ust_slogan"];
			}
			if(!empty($row['modalbanner'])){ $modalfoto = $row['modalbanner']; }else{ $row="resimyok.jpg"; }
			
?>							
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<form class="form-horizontal" action="fibercozum_site_ayarlari.php?islem=edit" method="post" enctype="multipart/form-data">
										<ul class="nav nav-tabs member-tab" role="tablist">
											<li role="presentation" class="active"><a href="#siteayarlari" aria-controls="siteayarlari" role="tab" data-toggle="tab">Site Ayarları</a></li>
											<li role="presentation" id="urunfotografbuton"><a href="#seoayarlari" aria-controls="seoayarlari" role="tab" data-toggle="tab">SEO Ayarları</a></li>
											<li role="presentation"><a href="#sosyalmedyaayarlari" aria-controls="sosyalmedyaayarlari" role="tab" data-toggle="tab">Sosyal Medya Ayarları</a></li>
											<li class="pull-right"><button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> KAYDET</button></li>
										</ul>
										<div class="tab-content" id="member-detail-panel">
											<div role="tabpanel" class="tab-pane active" id="siteayarlari">
												<h5 class="edit-product-header"><strong><i class="fa fa-file-text-o" aria-hidden="true"></i> Site Ayarları</strong></h5>
												<hr class="main-content-header-hr" />
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-sm-4 text-right">Firma Resmi Adı</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Firma Resmi Adı" name="firmaresmiadi" value="<?=$firma_resmi_adi?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Firma Adı</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Firma Adı" name="firmaadi" value="<?=$firma_adi?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Kullanıcı Ad</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Kullanıcı Ad" name="ad" value="<?=$kullanici_ad?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Kullanıcı Soyad</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Kullanıcı Soyad" name="soyad" value="<?=$kullanici_soyad?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Web Sitesi Adresi <small>(http:// Yazılmalı)</small></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="http://www.fiberticaret.com" name="websitesi" value="<?=$web_sitesi?>">
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-4 text-right">Web Sitesi Adresi <small>(http:// Yazılmamalı)</small></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="www.fiberticaret.com" name="websitesisade" value="<?=$web_sitesi_sade?>">
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-4 text-right">Telefon Numarası</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Telefon Numarası" name="telefon" value="<?=$telefon?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Telefon Numarası 2</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Telefon Numarası 2" name="telefon2" value="<?=$telefon2?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Faks Numarası</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Faks Numarası" name="faks" value="<?=$faks?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">E-Posta Adresi</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="E-Posta Adresi" name="eposta" value="<?=$eposta?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Üst Slogan</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Üst Slogan" name="ust_slogan" value="<?=$ust_slogan?>">
														</div>
													</div>
												<?php if($ayarlar_dil_1_durum==1){ ?>
													<div class="form-group">
														<label class="col-sm-4 text-right">Üst Slogan <small>(<?=$ayarlar_dil_1_adi?>)</small></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Üst Slogan" name="ust_slogan_<?=$ayarlar_dil_1_on_eki?>" value="<?=$ust_slogan1?>">
														</div>
													</div>
												<?php } ?>
												<?php if($ayarlar_dil_2_durum==1){ ?>
													<div class="form-group">
														<label class="col-sm-4 text-right">Üst Slogan <small>(<?=$ayarlar_dil_2_adi?>)</small></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Üst Slogan" name="ust_slogan_<?=$ayarlar_dil_2_on_eki?>" value="<?=$ust_slogan2?>">
														</div>
													</div>
												<?php } ?>
												<?php if($ayarlar_dil_3_durum==1){ ?>
													<div class="form-group">
														<label class="col-sm-4 text-right">Üst Slogan <small>(<?=$ayarlar_dil_3_adi?>)</small></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Üst Slogan" name="ust_slogan_<?=$ayarlar_dil_3_on_eki?>" value="<?=$ust_slogan3?>">
														</div>
													</div>
												<?php } ?>
												<?php if($ayarlar_dil_4_durum==1){ ?>
													<div class="form-group">
														<label class="col-sm-4 text-right">Üst Slogan <small>(<?=$ayarlar_dil_4_adi?>)</small></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Üst Slogan" name="ust_slogan_<?=$ayarlar_dil_4_on_eki?>" value="<?=$ust_slogan4?>">
														</div>
													</div>
												<?php } ?>
												<?php if($ayarlar_dil_5_durum==1){ ?>
													<div class="form-group">
														<label class="col-sm-4 text-right">Üst Slogan <small>(<?=$ayarlar_dil_5_adi?>)</small></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Üst Slogan" name="ust_slogan_<?=$ayarlar_dil_5_on_eki?>" value="<?=$ust_slogan5?>">
														</div>
													</div>
												<?php } ?>
												
												</div>
												<div class="col-md-6">	
													<div class="form-group">
														<label class="col-sm-4 text-right">Firma Adresi</label>
														<div class="col-sm-8">
															<textarea class="form-control" rows="4" style="resize:none;" name="adres" placeholder="Firma Adresi"><?=$adres?></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Ticari Sicil No</label>
														<div class="col-sm-8">
															<input type="text" class="form-control numberFormat11" placeholder="Ticari Sicil No" name="sicilno" value="<?=$ticari_sicil_no?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Vergi No</label>
														<div class="col-sm-8">
															<input type="text" class="form-control numberFormat11" placeholder="Vergi No" name="vergino" value="<?=$vergi_no?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Vergi Dairesi</label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Vergi Dairesi" name="vergidairesi" value="<?=$vergi_dairesi?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Firma Harita Kodu<br/><small>( Google Maps Embed Kodu )</small></label>
														<div class="col-sm-8">
															<textarea class="form-control" rows="5" style="resize:none;" name="maps" placeholder="Firma Harita Kodu"><?=$firma_maps?></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Modal Banner Resmi</label>
														<div class="col-sm-4">
															<img src="/foto/<?=$modalfoto?>" class="category-image" />
															<input type="hidden"  name="mevcutresim" value="<?=$modalfoto?>" />
														</div>
														<div class="col-sm-4">
															<a href="fibercozum_site_ayarlari.php?islem=modalbannersil" class="btn btn-danger">Mevcut Resmi Sil</a>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Modal Banner Resmi</label>
														<div class="col-sm-8">
															<input type="file" name="image" value="<?=$modalfoto?>" />
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Mevcut Favicon</label>
														<div class="col-sm-4">
															<?php if($favicon){ ?><img src="/foto/<?=$favicon?>" class="banner2-img" style="width:32px;height:32px" /><?php }else{ echo "Yüklü icon bulunmamaktadır."; } ?>
															<input type="hidden"  name="mevcutfavicon" value="<?=$favicon?>" />
														</div>
														<div class="col-sm-4">
															<a href="fibercozum_site_ayarlari.php?islem=faviconsil" class="btn btn-danger">Mevcut Faviconu Sil</a>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-4 text-right">Favicon Ekle</label>
														<div class="col-sm-8">
															<input type="file" name="image2" value="<?=$favicon?>" />
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
											<div role="tabpanel" class="tab-pane" id="seoayarlari">	
												<h5 class="edit-product-header"><strong><i class="fa fa-file-text-o" aria-hidden="true"></i> SEO Ayarları</strong></h5>
												<hr class="main-content-header-hr" />
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-sm-3 text-right">Title</label>												
														<div class="col-sm-6">
															<input type="text" class="form-control" placeholder="Web Sitesi Title" name="title" value="<?=$site_title?>">
														</div>
													</div>												
												<?php if($ayarlar_dil_1_durum==1){ ?>
													<div class="form-group">
														<label class="col-sm-3 text-right">Title <small>(<?=$ayarlar_dil_1_adi?>)</small></label>
														<div class="col-sm-5">
															<input type="text" class="form-control" placeholder="Web Sitesi Title" name="title_<?=$ayarlar_dil_1_on_eki?>" value="<?=$site_title1?>">
														</div>
													</div>
												<?php } ?>
												<?php if($ayarlar_dil_2_durum==1){ ?>
													<div class="form-group">
														<label class="col-sm-3 text-right">Title <small>(<?=$ayarlar_dil_2_adi?>)</small></label>
														<div class="col-sm-5">
															<input type="text" class="form-control" placeholder="Web Sitesi Title" name="title_<?=$ayarlar_dil_2_on_eki?>" value="<?=$site_title2?>">
														</div>
													</div>
												<?php } ?>
												<?php if($ayarlar_dil_3_durum==1){ ?>
													<div class="form-group">
														<label class="col-sm-3 text-right">Title <small>(<?=$ayarlar_dil_3_adi?>)</small></label>
														<div class="col-sm-5">
															<input type="text" class="form-control" placeholder="Web Sitesi Title" name="title_<?=$ayarlar_dil_3_on_eki?>" value="<?=$site_title3?>">
														</div>
													</div>
												<?php } ?>
												<?php if($ayarlar_dil_4_durum==1){ ?>
													<div class="form-group">
														<label class="col-sm-3 text-right">Title <small>(<?=$ayarlar_dil_4_adi?>)</small></label>
														<div class="col-sm-5">
															<input type="text" class="form-control" placeholder="Web Sitesi Title" name="title_<?=$ayarlar_dil_4_on_eki?>" value="<?=$site_title4?>">
														</div>
													</div>
												<?php } ?>
												<?php if($ayarlar_dil_5_durum==1){ ?>
													<div class="form-group">
														<label class="col-sm-3 text-right">Title <small>(<?=$ayarlar_dil_5_adi?>)</small></label>
														<div class="col-sm-5">
															<input type="text" class="form-control" placeholder="Web Sitesi Title" name="title_<?=$ayarlar_dil_5_on_eki?>" value="<?=$site_title5?>">
														</div>
													</div>
												<?php } ?>
													<div class="form-group">
														<label class="col-sm-3 text-right">Description</label>
														<div class="col-sm-6">
															<textarea class="form-control" rows="3" style="resize:none;" name="description" placeholder="Web Sitesi Description"><?=$site_description?></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 text-right">Keywords</label>
														<div class="col-sm-6">
															<textarea class="form-control" rows="3" style="resize:none;" name="keywords" placeholder="Web Sitesi Keywords"><?=$site_keywords?></textarea>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-sm-3 text-right">Google Analytics</label>
														<div class="col-sm-6">
															<textarea class="form-control" rows="4" style="resize:none;" name="analytics" placeholder="Google Analytics Kodu"><?=$site_analytics?></textarea>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 text-right">Yandex Metrica</label>
														<div class="col-sm-6">
															<textarea class="form-control" rows="4" style="resize:none;" name="yandexmetrica" placeholder="Yandex Metrica Kodu"><?=$yandex_metrica?></textarea>
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-3 text-right">Sitemap</label>
														<div class="col-sm-6">
															<input type="text" class="form-control" value="<?=$web_sitesi.'/sitemap.xml'?>" readonly>
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-3 text-right">Google Web Master</label>
														<div class="col-sm-6">
															<textarea class="form-control" rows="2" style="resize:none;" name="google" placeholder="Google Web Master Kodu"><?=$google_web_master?></textarea>
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-3 text-right">Yandex Web Master</label>
														<div class="col-sm-6">
															<textarea class="form-control" rows="2" style="resize:none;" name="yandex" placeholder="Yandex Web Master"><?=$yandex_web_master?></textarea>
														</div>
													</div>
													
													<div class="form-group">
														<label class="col-sm-3 text-right">Bing Web Master</label>
														<div class="col-sm-6">
															<textarea class="form-control" rows="2" style="resize:none;" name="bing" placeholder="Bing Web Master"><?=$bing_web_master?></textarea>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="sosyalmedyaayarlari">	
												<h5 class="edit-product-header"><strong><i class="fa fa-file-text-o" aria-hidden="true"></i> Sosyal Medya Ayarları</strong></h5>
												<hr class="main-content-header-hr" />
												<div class="col-md-6">
													<div class="form-group">
														<label class="col-sm-3 text-right">Facebook</label>
														<label class="col-sm-1 text-right"><i class="fa fa-facebook-official soc-facebook fa-2x pull-left"></i></label>		
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Facebook Adresi" name="facebook" value="<?=$facebook?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 text-right">Twitter</label>
														<label class="col-sm-1 text-right"><i class="fa fa-twitter-square soc-twitter fa-2x pull-left"></i></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Twitter Adresi" name="twitter" value="<?=$twitter?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 text-right">Instagram</label>
														<label class="col-sm-1 text-right"><i class="fa fa-instagram soc-instagram fa-2x pull-left"></i></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Instagram Adresi" name="instagram" value="<?=$instagram?>">
														</div>
													</div>	
													<div class="form-group">
														<label class="col-sm-3 text-right">Youtube</label>
														<label class="col-sm-1 text-right"><i class="fa fa-youtube-square soc-youtube fa-2x pull-left"></i></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Youtube Adresi" name="youtube" value="<?=$youtube?>">
														</div>
													</div>
												</div>
												<div class="col-md-6">
													
													<div class="form-group">
														<label class="col-sm-3 text-right">Linkedin</label>
														<label class="col-sm-1 text-right"><i class="fa fa-linkedin-square soc-linkedin fa-2x pull-left"></i></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Linkedin Adresi" name="linkedin" value="<?=$linkedin?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 text-right">Whatsapp</label>
														<label class="col-sm-1 text-right"><i class="fa fa-whatsapp soc-whatsapp fa-2x pull-left"></i></label>
														<div class="col-sm-8">
															<input type="text" class="form-control" placeholder="Whatsapp Numarası" name="whatsapp" value="<?=$whatsapp?>">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 text-right">Whatsapp Mesaj Butonu</label>
														<label class="col-sm-1 text-right"><i class="fa fa-whatsapp soc-whatsapp fa-2x pull-left"></i></label>
														<div class="col-sm-1">
															<div class="checkbox product-basic-checkbox">
																<label>
																	<input type="checkbox" name="whatsapp_buton_gosterim" value="1" <?php if($whatsapp_buton_gosterim==1) { echo "checked"; }?>> 
																	<span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
																</label>
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 text-right">Whatsapp mesaj Butonu Konumu</label>	
														<label class="col-sm-1 text-right"><i class="fa fa-whatsapp soc-whatsapp fa-2x pull-left"></i></label>														
														<div class="col-sm-4">
															<select class="form-control" name="whatsapp_buton_gosterim_konum">
																<option value="0" <?php if($whatsapp_buton_gosterim_konum==0){ echo "selected"; } ?>>Sol Alt</option>
																<option value="1" <?php if($whatsapp_buton_gosterim_konum==1){ echo "selected"; } ?>>Sağ Alt</option>
															</select>
														</div>
													</div>
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
			$firmaresmiadi = (trim(htmlspecialchars(strip_tags($_POST["firmaresmiadi"]))));
			$firmaadi = (trim(htmlspecialchars(strip_tags($_POST["firmaadi"]))));
			$ad = (trim(htmlspecialchars(strip_tags($_POST["ad"]))));
			$soyad = (trim(htmlspecialchars(strip_tags($_POST["soyad"]))));
			$websitesi = (trim(htmlspecialchars(strip_tags($_POST["websitesi"]))));
			$websitesisade = (trim(htmlspecialchars(strip_tags($_POST["websitesisade"]))));
			$adres = (trim(htmlspecialchars(strip_tags($_POST["adres"]))));
			$telefon = (trim(htmlspecialchars(strip_tags($_POST["telefon"]))));
			$telefon2 = (trim(htmlspecialchars(strip_tags($_POST["telefon2"]))));
			$faks = (trim(htmlspecialchars(strip_tags($_POST["faks"]))));
			$eposta = (trim(htmlspecialchars(strip_tags($_POST["eposta"]))));
			$sicilno = (trim(htmlspecialchars(strip_tags($_POST["sicilno"]))));
			$vergino = (trim(htmlspecialchars(strip_tags($_POST["vergino"]))));
			$vergidairesi = (trim(htmlspecialchars(strip_tags($_POST["vergidairesi"]))));
			$maps = ($_POST["maps"]);
			
			$title = trim(htmlspecialchars(strip_tags($_POST["title"])));
			$description = trim(htmlspecialchars(strip_tags($_POST["description"])));
			$keywords = trim(htmlspecialchars(strip_tags($_POST["keywords"])));
			$analytics = $_POST["analytics"];
			$yandexmetrica = $_POST["yandexmetrica"];
			$google = $_POST["google"];
			$yandex = $_POST["yandex"];
			$bing = $_POST["bing"];
			
			$facebook = trim(htmlspecialchars(strip_tags($_POST["facebook"])));
			$twitter = trim(htmlspecialchars(strip_tags($_POST["twitter"])));
			$instagram = trim(htmlspecialchars(strip_tags($_POST["instagram"])));
			$youtube = trim(htmlspecialchars(strip_tags($_POST["youtube"])));
			$linkedin = trim(htmlspecialchars(strip_tags($_POST["linkedin"])));
			$whatsapp = trim(htmlspecialchars(strip_tags($_POST["whatsapp"])));
			$whatsapp_buton_gosterim_konum = trim(htmlspecialchars(strip_tags($_POST["whatsapp_buton_gosterim_konum"])));			
			$whatsapp_buton_gosterim = trim(htmlspecialchars(strip_tags($_POST["whatsapp_buton_gosterim"])));
			if ($whatsapp_buton_gosterim=="1"){ $whatsapp_buton_gosterim=1; }else{ $whatsapp_buton_gosterim=0; }

			$ust_slogan = (trim(htmlspecialchars(strip_tags($_POST["ust_slogan"]))));
			
			$mevcutresim = (trim(htmlspecialchars(strip_tags($_POST["mevcutresim"]))));		
			require_once 'class.upload.php';
			$image = new Upload( $_FILES[ 'image' ] );
			if ( $image->uploaded ) {
				$rasgeleisim = substr(md5(uniqid(rand())), 0, 12);
				$image->file_new_name_body = $rasgeleisim;
				$resimtype = $_FILES['image']['type'];
				if($resimtype=="image/png"){
					$image->image_convert = 'png';
				}else{
					$image->image_convert = 'jpg';
				}				
				$image->image_resize = true;
				$image->image_x = 960;
				$image->image_ratio_y = true;
				$image->allowed = array ( 'image/*' );		
				$image->Process( '../foto/' );			
				$kucuk_yeniisim = $image->file_dst_name;
			}else{
				$kucuk_yeniisim = $mevcutresim;
			}
			
			$mevcutfavicon = (trim(htmlspecialchars(strip_tags($_POST["mevcutfavicon"]))));		
			require_once 'class.upload.php';
			$image2 = new Upload( $_FILES[ 'image2' ] );
			if ( $image2->uploaded ) {
				$rasgeleisim = substr(md5(uniqid(rand())), 0, 12);
				$image2->file_new_name_body = $rasgeleisim;
				$resimtype = $_FILES['image2']['type'];
				if($resimtype=="image/png"){
					$image2->image_convert = 'png';
				}else{
					$image2->image_convert = 'jpg';
				}				
				$image2->image_resize = true;
				$image2->image_x = 960;
				$image2->image_ratio_y = true;
				$image2->allowed = array ( 'image/*' );		
				$image2->Process( '../foto/' );			
				$kucuk_yeniisim2 = $image2->file_dst_name;
			}else{
				$kucuk_yeniisim2 = $mevcutfavicon;
			}
			
			if($firmaadi){
				$guncelle = $Conn -> prepare("update ayarlar set firma_resmi_adi=?, firma_adi=?, ad=?, soyad=?, web_sitesi=?, web_sitesi_sade=?, adres=?, telefon=?, telefon2=?, faks=?, eposta=?, ticari_sicil_no=?, vergi_no=?, vergi_dairesi=?, maps=?, title=?, description=?, keywords=?, google_analytics=?, yandex_metrica=?, google_web_master=?, yandex_web_master=?, bing_web_master=?, facebook=?, twitter=?, instagram=?, youtube=?, linkedin=?, whatsapp=?, whatsapp_buton_gosterim=?, whatsapp_buton_gosterim_konum=?, ust_slogan=?, modalbanner=?, favicon=? where id=?");
				$guncelle -> execute(array($firmaresmiadi,$firmaadi,$ad,$soyad,$websitesi,$websitesisade,$adres,$telefon,$telefon2,$faks,$eposta,$sicilno,$vergino,$vergidairesi,$maps,$title,$description,$keywords,$analytics,$yandexmetrica,$google,$yandex,$bing,$facebook,$twitter,$instagram,$youtube,$linkedin,$whatsapp,$whatsapp_buton_gosterim,$whatsapp_buton_gosterim_konum,$ust_slogan,$kucuk_yeniisim,$kucuk_yeniisim2,1));
				if($ayarlar_dil_1_durum==1){
					$title = (trim(htmlspecialchars(strip_tags($_POST["title_".$ayarlar_dil_1_on_eki]))));
					$ust_slogan = (trim(htmlspecialchars(strip_tags($_POST["ust_slogan_".$ayarlar_dil_1_on_eki]))));					
					$update = $Conn -> prepare("update ayarlar set ".$ayarlar_dil_1_on_eki."_title=?, ".$ayarlar_dil_1_on_eki."_ust_slogan=? where id=?");
					$update -> execute(array($title,$ust_slogan,1));
				}
				if($ayarlar_dil_2_durum==1){
					$title = (trim(htmlspecialchars(strip_tags($_POST["title_".$ayarlar_dil_2_on_eki]))));
					$ust_slogan = (trim(htmlspecialchars(strip_tags($_POST["ust_slogan_".$ayarlar_dil_2_on_eki]))));					
					$update = $Conn -> prepare("update ayarlar set ".$ayarlar_dil_2_on_eki."_title=?, ".$ayarlar_dil_2_on_eki."_ust_slogan=? where id=?");
					$update -> execute(array($title,$ust_slogan,1));
				}
				if($ayarlar_dil_3_durum==1){
					$title = (trim(htmlspecialchars(strip_tags($_POST["title_".$ayarlar_dil_3_on_eki]))));
					$ust_slogan = (trim(htmlspecialchars(strip_tags($_POST["ust_slogan_".$ayarlar_dil_3_on_eki]))));					
					$update = $Conn -> prepare("update ayarlar set ".$ayarlar_dil_3_on_eki."_title=?, ".$ayarlar_dil_3_on_eki."_ust_slogan=? where id=?");
					$update -> execute(array($title,$ust_slogan,1));
				}
				if($ayarlar_dil_4_durum==1){
					$title = (trim(htmlspecialchars(strip_tags($_POST["title_".$ayarlar_dil_4_on_eki]))));
					$ust_slogan = (trim(htmlspecialchars(strip_tags($_POST["ust_slogan_".$ayarlar_dil_4_on_eki]))));					
					$update = $Conn -> prepare("update ayarlar set ".$ayarlar_dil_4_on_eki."_title=?, ".$ayarlar_dil_4_on_eki."_ust_slogan=? where id=?");
					$update -> execute(array($title,$ust_slogan,1));
				}
				if($ayarlar_dil_5_durum==1){
					$title = (trim(htmlspecialchars(strip_tags($_POST["title_".$ayarlar_dil_5_on_eki]))));
					$ust_slogan = (trim(htmlspecialchars(strip_tags($_POST["ust_slogan_".$ayarlar_dil_5_on_eki]))));					
					$update = $Conn -> prepare("update ayarlar set ".$ayarlar_dil_5_on_eki."_title=?, ".$ayarlar_dil_5_on_eki."_ust_slogan=? where id=?");
					$update -> execute(array($title,$ust_slogan,1));
				}
				header("Location:fibercozum_site_ayarlari.php?bilgiislem=ok");
			}else{
				header("Location:fibercozum_site_ayarlari.php?bilgiislem=eksikbilgi");
			}
		}
	}
?>
<?php
	if(!empty($_GET["islem"])){
		$islem = $_GET["islem"];
		if($islem == "modalbannersil"){
			require_once PATH."/datapath.php";
			require_once "fonksiyon.php";
			$silme = $Conn -> prepare("update ayarlar set modalbanner=? where id=?");
			$silme -> execute(array("",1));			
			header("Location:fibercozum_site_ayarlari.php?bilgiislem=ok");
		}
	}
?>
<?php
	if(!empty($_GET["islem"])){
		$islem = $_GET["islem"];
		if($islem == "faviconsil"){
			require_once PATH."/datapath.php";
			require_once "fonksiyon.php";
			$silme = $Conn -> prepare("update ayarlar set favicon=? where id=?");
			$silme -> execute(array("",1));	
			header("Location:fibercozum_site_ayarlari.php?bilgiislem=ok");
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
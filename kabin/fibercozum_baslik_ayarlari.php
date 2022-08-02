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
						<h3 class="main-content-header"><i class="fa fa-paint-brush" aria-hidden="true"></i> Dil Başlık Yönetimi</h3>

						
<?php
	if(!empty($_GET["bilgiislem"])){
		$islem = $_GET["bilgiislem"];
		if($islem == "ok"){
			echo '<hr class="main-content-header-hr" />';
			echo '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-check" aria-hidden="true"></i> İşlem başarılı bir şekilde gerçekleşti !</strong></h5></div>';
			
		}elseif($islem == "eksikbilgi"){
			echo '<hr class="main-content-header-hr" />';
			echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Resim Adı boş bırakılamaz !</strong></h5></div>';
		}
	}
?>

						<hr class="main-content-header-hr" />

		
						
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Başlık</th>
										<th>Başlık Default Değeri</th>
									<?php if($ayarlar_dil_1_durum==1){ ?>
										<th><?=$ayarlar_dil_1_adi?></th>
									<?php } ?>
									<?php if($ayarlar_dil_2_durum==1){ ?>
										<th><?=$ayarlar_dil_2_adi?></th>
									<?php } ?>
									<?php if($ayarlar_dil_3_durum==1){ ?>
										<th><?=$ayarlar_dil_3_adi?></th>
									<?php } ?>
									<?php if($ayarlar_dil_4_durum==1){ ?>
										<th><?=$ayarlar_dil_4_adi?></th>
									<?php } ?>
									<?php if($ayarlar_dil_5_durum==1){ ?>
										<th><?=$ayarlar_dil_5_adi?></th>
									<?php } ?>
									</tr>
								</thead>
								<tbody>
<?php
			$sorgu = $Conn->prepare("select * from baslik_dil_ayarlari order by id desc");
			$sorgu->execute(array());
			$count = $sorgu->rowCount();
			while($row = $sorgu->fetch(PDO::FETCH_ASSOC)){
				$baslik_id = $row["id"];
				$baslik = $row["baslik"];
				$default_deger = $row["default_deger"];
				if($ayarlar_dil_1_durum==1){
					$baslik1 = $row[$ayarlar_dil_1_on_eki."_baslik"];
				}
				if($ayarlar_dil_2_durum==1){
					$baslik2 = $row[$ayarlar_dil_2_on_eki."_baslik"];
				}
				if($ayarlar_dil_3_durum==1){
					$baslik3 = $row[$ayarlar_dil_3_on_eki."_baslik"];
				}
				if($ayarlar_dil_4_durum==1){
					$baslik4 = $row[$ayarlar_dil_4_on_eki."_baslik"];
				}
				if($ayarlar_dil_5_durum==1){
					$baslik5 = $row[$ayarlar_dil_5_on_eki."_baslik"];
				}
?>
									<tr>
										<td><textarea class="form-control baslikayari" rows="4" cols="150" name="baslik" data-id="<?=$baslik_id?>" data-language="tr" placeholder="<?=$default_deger?>"><?=$baslik?></textarea></td>								
										<td><?=$default_deger?></td>
									<?php if($ayarlar_dil_1_durum==1){ ?>
										<td><textarea class="form-control baslikayari" rows="4" cols="150" name="<?=$ayarlar_dil_1_on_eki?>_baslik" data-id="<?=$baslik_id?>" data-language="<?=$ayarlar_dil_1_on_eki?>" placeholder="<?=$default_deger?>"><?=$baslik1?></textarea></td>
									<?php } ?>
									<?php if($ayarlar_dil_2_durum==1){ ?>
										<td><textarea class="form-control baslikayari" rows="4" cols="150" name="<?=$ayarlar_dil_2_on_eki?>_baslik" data-id="<?=$baslik_id?>" data-language="<?=$ayarlar_dil_2_on_eki?>" placeholder="<?=$default_deger?>"><?=$baslik2?></textarea></td>
									<?php } ?>
									<?php if($ayarlar_dil_3_durum==1){ ?>
										<td><textarea class="form-control baslikayari" rows="4" cols="150" name="<?=$ayarlar_dil_3_on_eki?>_baslik" data-id="<?=$baslik_id?>" data-language="<?=$ayarlar_dil_3_on_eki?>" placeholder="<?=$default_deger?>"><?=$baslik3?></textarea></td>
									<?php } ?>
									<?php if($ayarlar_dil_4_durum==1){ ?>
										<td><textarea class="form-control baslikayari" rows="4" cols="150" name="<?=$ayarlar_dil_4_on_eki?>_baslik" data-id="<?=$baslik_id?>" data-language="<?=$ayarlar_dil_4_on_eki?>" placeholder="<?=$default_deger?>"><?=$baslik4?></textarea></td>
									<?php } ?>
									<?php if($ayarlar_dil_5_durum==1){ ?>
										<td><textarea class="form-control baslikayari" rows="4" cols="150" name="<?=$ayarlar_dil_5_on_eki?>_baslik" data-id="<?=$baslik_id?>" data-language="<?=$ayarlar_dil_5_on_eki?>" placeholder="<?=$default_deger?>"><?=$baslik5?></textarea></td>
									<?php } ?>
									</tr>
<?php		} ?>
								</tbody>
							</table>
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
<?php require_once "editor_script.php"; ?>
		
  </body>
</html>
<?php
if(!isset($Conn)){
	$Conn=Null;
}
?>
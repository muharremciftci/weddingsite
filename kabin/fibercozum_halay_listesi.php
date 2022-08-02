<?php require_once "parola.php"; ?>
<?php
	require_once "fonksiyon.php";
	$sayfa		= @intval(($_GET["s"]));
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
						<h3 class="main-content-header"><i class="fa fa-file-text-o" aria-hidden="true"></i> Halay Listesi</h3>
						<hr class="main-content-header-hr" />
<?php
	if(!empty($_GET["bilgiislem"])){
		$islem = $_GET["bilgiislem"];
		if($islem == "ok"){
			echo '<div class="alert alert-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5><strong><i class="fa fa-check" aria-hidden="true"></i> İşlem başarılı bir şekilde gerçekleşti !</strong></h5></div>';
			
		}
	}
?>
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></th>
										<th>Ikon</th>
										<th>Ad / Soyad</th>
										<th>Mesaj Tarihi</th>
										<th>İşlemler</th>
									</tr>
								</thead>
								<tbody>
<?php
$Say = $Conn->query("select * from halay");
$toplam = $Say->rowCount();

$limit		= 50;
$sayfa_sayisi = ceil($toplam/$limit);
			if($sayfa>$sayfa_sayisi) $sayfa = 1;
$goster		= $sayfa * $limit - $limit;

			$sorgu = $Conn->query("select * from halay order by id desc limit $goster, $limit");
			$count = $sorgu->rowCount();
			while($row = $sorgu->fetch(PDO::FETCH_ASSOC)){
				$yorum_id = $row["id"];
				$ad = $row["ad"];
				$soyad = $row["soyad"];
				$ikon = $row["ikon"];
				$mesaj_tarihi = $row["tarih"];
				$mesaj_ip = $row["ip"];
?>	
									<tr>
										<td><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$yorum_id?>" aria-expanded="true" aria-controls="collapse<?=$yorum_id?>" data-placement="top" title="Düzenle"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a></td>
										<td>
										<?php if($ikon==0){ ?>
											<img src="/foto/woman.png" style="width:20px;height:60px" />
										<?php }else{ ?>
											<img src="/foto/man.png" style="width:20px;height:60px" />
										<?php } ?>
										</td>
										<td><?=$ad." ".$soyad?></td>
										<td><?=$mesaj_tarihi?></td>
										<td>
											<a href="" class="btn btn-danger btn-sm"  data-toggle="modal" data-target="#yorumsilmodal<?=$yorum_id?>"><i class="fa fa-trash" data-toggle="tooltip" data-placement="top" aria-hidden="true" title="Sil"></i></a>
											<!-- Modal Start -->
											<div class="modal fade" id="yorumsilmodal<?=$yorum_id?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header brand-primary">
															<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
															<h3 class="modal-title"><i class="fa fa-trash"></i> Halay Kişi Silme</h3>
														</div>
															<div class="modal-body">
																<div class="row">
																	<div class="col-md-12">
																		<h4>"<strong><?=$ad." ".$soyad?> </strong>" isimli kişinin mesajını silmek istediğinize emin misiniz?</h4>
																	</div>
																</div>
															</div>
															<div class="modal-footer">													
																<button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
																<a href="fibercozum_halay_listesi.php?s=<?=$sayfa?>&islem=sil&yorumid=<?=$yorum_id?>" class="btn btn-danger">Mesajı Sil</a>
															</div>
													</div><!-- /.modal-content -->
												</div><!-- /.modal-dialog -->
											</div><!-- /.modal -->
											<!-- Modal End-->
										</td>
									</tr>
									<tr id="collapse<?=$yorum_id?>" class="panel-collapse collapse ">
										<td colspan="6">
											<div class="row">
												<div class="col-md-5">
													<dl class="dl-horizontal">
														<dt>Ad/Soyad :</dt>
														<dd><?=$ad." ".$soyad?></dd>
														<dt>Mesaj Tarihi :</dt>
														<dd><?=$mesaj_tarihi?></dd>
														<dt>Mesaj IP:</dt>
														<dd><?=$mesaj_ip?></dd>
													</dl>
												</div>
												<div class="col-md-7">
													<p><?=$mesaj?></p>
												</div>
											</div>
										</td>
									</tr>

<?php		} ?>
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
											<a href="fibercozum_halay_listesi.php?s=1" aria-label="First">
												<i class="fa fa-angle-double-left" aria-hidden="true"></i>
											</a>
										</li>
										<li <?php if($sayfa==1){ ?> class="disabled"<?php } ?>>
											<a href="fibercozum_halay_listesi.php?s=<?=$onceki?>" aria-label="Previous">
												<i class="fa fa-angle-left" aria-hidden="true"></i>
											</a>
										</li>
<?php
for($i= $sayfa - $gorunen; $i < $sayfa+$gorunen + 1;$i++){
	if($i > 0 and $i <= $sayfa_sayisi){
		if($i == $sayfa){
?>
										<li class="active"><a href="fibercozum_halay_listesi.php"><?=$i?></a></li>
	<?php
			}else{
	?>
										<li><a href="fibercozum_halay_listesi.php?s=<?=$i?>"><?=$i?></a></li>
									
<?php   }
	}
}

?>
										<li <?php if($sayfa == $sayfa_sayisi){ ?> class="disabled"<?php } ?>>
											<a href="fibercozum_halay_listesi.php?s=<?=$sonraki?>" aria-label="Next">
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</a>
										</li>
										<li <?php if($sayfa == $sayfa_sayisi){ ?> class="disabled"<?php } ?>>
											<a href="fibercozum_halay_listesi.php?s=<?=$sayfa_sayisi?>" aria-label="Last">
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
	if(!empty($_GET["islem"]) && !empty($_GET["yorumid"])){
		$islem = $_GET["islem"];
		$yorumid = ($_GET["yorumid"]);
		if($islem == "sil"){
			require_once PATH."/datapath.php";
			require_once "fonksiyon.php";
			$update = $Conn -> prepare("delete from halay where id=?");
			$update -> execute(array($yorumid));
			header("Location:fibercozum_halay_listesi.php?s=".$sayfa."&bilgiislem=ok");
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
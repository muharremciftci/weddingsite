						<section id="oturmayamigeldik" class="fw-main-row "  >
							<div class="fw-container-fluid">
								<div class="fw-row">
									<div class="fw-col-xs-12">
										<section class="halay" id="halay">
											<div class="container" style="padding: 10px 16px 48px;">
												<h2>Oturmaya mı Geldik ????</h2>
												<p>Halaya katılmak için ne duruyorsunuz= :)</p>        
												<div class="row">
													<div class="col-md-2">
														<div class="kids-content">
															<img src="/foto/kids.png" alt="Çocuklar" class="img-center halay-icon-kids" />
														</div>
													</div>
													<div class="col-md-8 halay-content">
														
														<?php
define('PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once PATH."datapath.php";
?>													
														<div class="halay_wrapper">
<?php




	$rs1 = $Conn->prepare("select * from halay where durum=? order by id desc");
	$rs1->execute(array(1));
	$count = $rs1->rowCount();
	while($row = $rs1->fetch(PDO::FETCH_ASSOC)){
		$halay_id = $row["id"];
		$halay_ad = $row["ad"];
		$halay_soyad = $row["soyad"];
		$halay_ikon = $row["ikon"];
		if($halay_ikon==0){
?>
		<div><img src="/foto/woman.png"><p class="text-capitalize"><?=$halay_ad?> <span class="text-capitalize"><?=mb_substr($halay_soyad, 0, 1, 'UTF-8')."."?></span></p></div>
<?php
		}else{
?>
		<div><img src="/foto/man.png"><p class="text-capitalize"><?=$halay_ad?> <span class="text-capitalize"><?=mb_substr($halay_soyad, 0, 1, 'UTF-8')."."?></span></p></div>
<?php
		}
	}
?>

														</div>
													
													
													</div>
													<div class="col-md-2">
														<div class="kids-content">
															<img src="/foto/kids.png" alt="Çocuklar" class="img-center halay-icon-kids" />
														</div>
													</div>
													<div class="clearfix"></div>
													<div class="">
													
													
													<div class="paper ">
														<form action="post_halay.php" class="form-horizontal" method="post" id="halay-form">
															<div class="wrap-forms">

																<div class="fw-row">
																	<div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
																		<div class="field-text">
																			<input type="text" name="ad" placeholder="Adınız" id="id-1">
																		</div>
																	</div>
																	<div class="fw-col-xs-12 fw-col-sm-6 form-builder-item">
																		<div class="field-text">
																			<input type="text" name="soyad" placeholder="Soyadınız">
																		</div>
																	</div>
																</div>
																<div class="fw-row">
																	<div class="col-xs-3 fw-col-xs-3 fw-col-sm-3 form-builder-item">
																		<div class="field-text">
																			<h4>Ikon Seçimi</h4>
																		</div>
																	</div>
																	<div class="col-xs-6 fw-col-xs-9 fw-col-sm-9 form-builder-item">
																		<div class="field-text ikon-secimi">
																			<div class="col-xs-6 col-md-6">
																				<label class="col-md-12">
																					<div class="row">
																						<div class="col-md-6">
																							<input type="radio" name="ikon" id="inlineRadio1" value="0" checked>
																						</div>
																						<div class="col-md-6">
																							<img src="/foto/woman.png" alt="Kadın" class="ikon-img" />
																						</div>
																					</div>
																				</label>
																			</div>
																			<div class="col-xs-6 col-md-6">
																				<label class="col-md-12">
																					<div class="row">
																						<div class="col-md-6">
																							<input type="radio" name="ikon" id="inlineRadio2" value="1">
																						</div>
																						<div class="col-md-6">
																							<img src="/foto/man.png" alt="Erkek" class="ikon-img" />
																						</div>
																					</div>
																				</label>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="fw-row"></div>
															</div>
															<div>
																<button type="submit" class="btn btn-default">HALAYA KATIL</button>
																<button type="button" class="btn btn-default btn-pistten-al">ÇOCUKLARI PİSTTEN ALALIM</button>
																<div id="halay-sonuc"></div>
															</div>
														</form>
													</div>
													
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</section>
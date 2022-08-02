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
		<div><img src="/foto/woman.png"><p class="text-capitalize"><?=$halay_ad?> <span class="text-capitalize"><?=$halay_soyad[0]."."?></span></p></div>
<?php
		}else{
?>
		<div><img src="/foto/man.png"><p class="text-capitalize"><?=$halay_ad?> <span class="text-capitalize"><?=$halay_soyad[0]."."?></span></p></div>
<?php
		}
	}
?>

														</div>
														

	
<script type='text/javascript' src='/assets/js/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='/assets/js/jquery-migrate.min.js?ver=1.4.1'></script>

<script type='text/javascript' src='/assets/js/owl.carousel.min.js?ver=1.0.7'></script>
<script type='text/javascript' src='/assets/js/bootstrap.min.js?ver=3.3.5'></script>



	<script type="text/javascript">
		(function($){
			"use strict"; // Start of use strict

			$(".halay_wrapper").owlCarousel({
				navigation : true, 
				responsive: true, 
				responsiveRefreshRate : 200, 
				slideSpeed : 200, 
				paginationSpeed : 200,
				rewindSpeed : 500,	
				stopOnHover : true, 
				autoHeight : true, 
				items:10, 
				mouseDrag:false, 
				autoPlay : 500,
				touchDrag:false,
			});
			
       })(jQuery);
    </script>
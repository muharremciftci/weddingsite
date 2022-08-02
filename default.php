<?php
ob_start();
require_once "member.php";
require_once PATH."/fonksiyonlar.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?=$genel_ayarlar[5]?>">
    <meta name="keywords" content="<?=$genel_ayarlar[6]?>">
    <title><?=$genel_ayarlar[4]?></title>
	<?php require_once PATH."/style.php"; ?>
</head>
<body class="home page page-id-6 page-template page-template-template-one-page page-template-template-one-page-php">
	<?php require_once PATH."/topmenu.php"; ?>
	<div class="page">
		<?php require_once PATH."/slider.php"; ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="entry-content">
					<div class="fw-page-builder-content">
					
						<?php require_once PATH."/ortamenu1.php"; ?>
						<?php require_once PATH."/ortamenu2.php"; ?>
						
						<?php require_once PATH."/ortamenu8.php"; ?>
						<?php require_once PATH."/ortamenu9.php"; ?>
						
						<?php require_once PATH."/ortamenu6.php"; ?>
						<?php require_once PATH."/ortamenu7.php"; ?>
						
					</div>
				</div>
			</main>
		</div>
		<?php require_once PATH."/altmenu.php"; ?>
	</div>
<?php require_once PATH."/script.php"; ?>
</body>
</html>

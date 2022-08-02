<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="default.php">Giriş Sayfası<i class="fa fa-home pull-right" aria-hidden="true"></i></a></li>
			<?php if(strstr($sayfa_goruntuleme, "008") && strstr($ayarlar_admin_goruntuleme, "008")) { ?>
				<li <?php if(@$request_url=="/kabin/fibercozum_mail_ayarlari.php"){ echo "class='active'"; } ?>><a href="fibercozum_mail_ayarlari.php">Mail Ayarları<i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(strstr($sayfa_goruntuleme, "012") && strstr($ayarlar_admin_goruntuleme, "012")) { ?>
				<li <?php if(@$request_url=="/kabin/fibercozum_halay_listesi.php"){ echo "class='active'"; } ?>><a href="fibercozum_halay_listesi.php">Halay Listesi<i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(strstr($sayfa_goruntuleme, "012") && strstr($ayarlar_admin_goruntuleme, "012")) { ?>
				<li <?php if(@$request_url=="/kabin/fibercozum_iletisim_mesajlari.php"){ echo "class='active'"; } ?>><a href="fibercozum_iletisim_mesajlari.php">İletişim Mesajları<i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(strstr($sayfa_goruntuleme, "015") && strstr($ayarlar_admin_goruntuleme, "015")) { ?>
				<li <?php if(@$request_url=="/kabin/fibercozum_site_ayarlari.php"){ echo "class='active'"; } ?>><a href="fibercozum_site_ayarlari.php">Site Ayarları<i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(strstr($sayfa_goruntuleme, "016") && strstr($ayarlar_admin_goruntuleme, "016")) { ?>
				<li <?php if(@$request_url=="/kabin/fibercozum_kullanici_bilgileri.php"){ echo "class='active'"; } ?>><a href="fibercozum_kullanici_bilgileri.php">Kullanıcı Adı ve Şifre Ayarları<i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(strstr($sayfa_goruntuleme, "017") && strstr($ayarlar_admin_goruntuleme, "017")) { ?>
				<li <?php if(@$request_url=="/kabin/fibercozum_kullanici_hesaplari.php"){ echo "class='active'"; } ?>><a href="fibercozum_kullanici_hesaplari.php">Kullanıcı Hesapları<i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(strstr($sayfa_goruntuleme, "019") && strstr($ayarlar_admin_goruntuleme, "019")) { ?>
				<li <?php if(@$request_url=="/kabin/fibercozum_baslik_ayarlari.php"){ echo "class='active'"; } ?>><a href="fibercozum_baslik_ayarlari.php">Başlık Ayarları<i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if(($sayfa_bayi_goruntuleme==1) && strstr($ayarlar_admin_goruntuleme, "018")) { ?>
				<li <?php if(@$request_url=="/kabin/fibercozum_bayilik_ayarlari.php"){ echo "class='active'"; } ?>><a href="fibercozum_bayilik_ayarlari.php">Bayilik Ayarları<i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></li>
			<?php } ?>
			<?php if($sayfa_yonetim==1) { ?>
				<li <?php if(@$request_url=="/kabin/fibercozum_admin_ayarlari.php"){ echo "class='active'"; } ?>><a href="fibercozum_admin_ayarlari.php">Admin Ayarları<i class="fa fa-pencil-square-o pull-right" aria-hidden="true"></i></a></li>
			<?php } ?>
			</ul>
		</div>
	</div>
</nav>
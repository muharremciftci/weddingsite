<?php
define('PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once PATH."/member.php";
	$ad = @trim(htmlspecialchars(strip_tags($_POST["ad"])));
	$soyad = @trim(htmlspecialchars(strip_tags($_POST["soyad"])));
	$mesaj = @trim(htmlspecialchars(strip_tags($_POST["mesaj"])));

	$tarih = date('d.m.Y H:i:s');
	$ip = $_SERVER['REMOTE_ADDR'];

	if($ad){
		require_once "datapath.php";
		$kayit = $Conn -> prepare("insert into iletisim set ad=?, soyad=?, mesaj=?, tarih=?, ip=?, kategori=?");
		$kayit -> execute(array($ad,$soyad,$mesaj,$tarih,$ip,1));
		
		$mailadresi = $Conn -> prepare("SELECT * FROM ayarlar where id=?");
		$mailadresi -> execute(array(1));
		$mailadresi = $mailadresi->fetch();
		if($mailadresi){	
			$mail_sunucu_adresi = $mailadresi["mail_sunucu_adresi"];
			$mail_isim = $mailadresi["mail_isim"];
			$mail_adresi = $mailadresi["mail_adresi"];
			$mail_sifresi = $mailadresi["mail_sifresi"];
			$mailsecure = $mailadresi["mail_secure"];
			$mailport = $mailadresi["mail_port"];
			$bilgi_mail_adresi = $mailadresi["bilgi_mail_adresi"];	
		}

		$mail_icerik = "<p>Merhaba Yeni Evliler,</p><p>Hatıra defterine bir mesaj bırakıldı.</p><p>--------------------------------</p><p>Ad/Soyad : $ad $soyad</p><p>Mesaj : $mesaj</p><p>--------------------------------</p><br/><p><strong>Daha detaylı bilgi için lütfen Yönetim Panelinizden İletişim Mesajları bölümüne giriniz.</strong></p>";
		
		require("class.phpmailer.php");
		
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
		$mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
		$mail->SMTPSecure = $mailsecure; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
		$mail->Host = $mail_sunucu_adresi; // Mail sunucusunun adresi (IP de olabilir)
		$mail->Port = $mailport; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
		$mail->IsHTML(true);
		$mail->SetLanguage("tr", "phpmailer/language");
		$mail->CharSet  ="utf-8";
		$mail->Username = $mail_adresi; // Gönderici adresiniz (e-posta adresiniz)
		$mail->Password = $mail_sifresi; // Mail adresimizin sifresi
		$mail->SetFrom($mail_adresi, $mail_isim); // Mail atıldığında gorulecek isim ve email
		$mail->AddAddress($bilgi_mail_adresi); // Mailin gönderileceği alıcı adres
		$mail->Subject = "Yeni bir İletişim Mesajı"; // Email konu başlığı
		$mail->Body = $mail_icerik; // Mailin içeriği
		$mail->Send();
		
		echo '<div class="alert alert-success alert-login" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5 class="text-center"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> '.$ayarlar_baslik[19].'</strong></h5></div>';
	}else{
		echo '<div class="alert alert-danger alert-login" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h5 class="text-center"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> '.$ayarlar_baslik[20].'</strong></h5></div>';
	}

?>
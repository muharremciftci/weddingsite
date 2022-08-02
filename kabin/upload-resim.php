<?php 
define('PATH',$_SERVER['DOCUMENT_ROOT'].'/');
require_once "sqlkoruma.php";
	$boyut=1000000;//max dosya boyutu
	$tipler=array("image/png","image/jpeg","image/gif","image/pjpeg");//desteklenen dosya türleri
	@$ds = count($_FILES["file"]["name"]);//gönderilen dosya sayısı
	$uploadDir = 'foto';
	session_start();
	for($i=0;$i<$ds;$i++){
		if(!empty($_FILES["file"]["name"])){
			if(($_FILES["file"]["type"] == "image/jpeg") or ($_FILES["file"]["type"] == "image/png") or ($_FILES["file"]["type"] == "image/gif") ){
				$uzanti=substr($_FILES["file"]["name"],-4,4);//uzantıyı alma
				$tmpFile = $_FILES['file']['tmp_name'];
				$imagename = time().'-'. replace_tr($_FILES['file']['name']);
				$filename = '../'.$uploadDir.'/'.$imagename;
				move_uploaded_file($tmpFile,$filename);
				$data = explode(',', $imagename);
				$_SESSION['resimadlari'][] = $imagename;
			}
		}
	}
?>
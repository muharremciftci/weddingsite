<?php 
require_once "parola.php"; 
require_once PATH."/datapath.php";
if(!empty($_POST["baslikid"]) || !empty($_POST["basliklanguage"]) || !empty($_POST["baslikyenideger"])){
	$baslikid = $_POST["baslikid"];
	$basliklanguage = $_POST["basliklanguage"];
	if($basliklanguage=="tr"){
		$basliklanguage = "";
	}else{
		$basliklanguage = $basliklanguage."_";
	}
	$baslikyenideger = $_POST["baslikyenideger"];

	$guncelle = $Conn -> prepare("update baslik_dil_ayarlari set ".$basliklanguage."baslik=? where id=?");
	$guncelle -> execute(array($baslikyenideger, $baslikid));	
	echo $baslikyenideger;
}

?>
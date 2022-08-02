<?php
function telcevir($url)
{
 
$find = array('/[^A-Za-z0-9\-<>]/', '/[\-]+/', '/<&#91;^>]*>/');
$repl = array('', '', '');
$url = preg_replace ($find, $repl, $url);
$url = substr($url, -10);
return $url;
}


function tlFormat($para){ return @number_format($para,2,',','.');}  


function radioadres($url)
{
	$find = array('/[\-]+/', '/<&#91;^>]*>/');
	$repl = array('', '', '');
	$url = preg_replace ($find, $repl, $url);
	return $url;
}

function tirnak_replace ($par)
{
	return str_replace(
		array(
			"'", "\""
			),
		array(
			"&#39;", "&quot;"
		),
		$par
	);
}

function paracevir($paraorj)
{
 
$findpara = array(' ', '.', ',');
$replpara = array('', '', '.');
$paraorj = str_replace ($findpara, $replpara, $paraorj);
return $paraorj;
}

function UstKategoriBul ($id, $string, $string2){
	$query = mysql_query("select * from kategoriler where id='$id' order by baslik asc ");
	if(mysql_affected_rows()){
		while($row = mysql_fetch_array($query)){
			if($row["ust_kategori"]==0){
				
				return $row["id"];
			
			}
			UstKategoriBul($row["ust_kategori"], $string + 2, $string2 + 1);
		}
	}else{
		return false;
	}
}



?>
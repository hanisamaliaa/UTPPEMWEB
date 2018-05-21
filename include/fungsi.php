<?php
	define("DATA_POST",1);
	define("DATA_GET",2);
	function filterData($strData,$type=DATA_POST){ // untuk mendapatkan variable post atau get
		if($type==DATA_POST){
		 if(isset($_POST[$strData])){
		  $val=(get_magic_quotes_gpc()) ? $_POST[$strData] : addslashes($_POST[$strData]);
		  return $val;
		 }else return NULL;
		}elseif($type==DATA_GET){
		 if(isset($_GET[$strData])){
		  $val=(get_magic_quotes_gpc()) ? urldecode($_GET[$strData]) : urldecode(addslashes($_GET[$strData]));
		  return $val;
		 }else return NULL;
		}else return NULL;
	}
	function post($str){
	 return htmlspecialchars(filterData($str));
	}
	function get($str){
	 return htmlspecialchars(filterData($str,DATA_GET));
	}
	
function kodebaru($prefix,$field,$table,$length = 4){
	$qlast = mysql_query("SELECT $field FROM $table ORDER BY $field DESC");
	$default = sprintf("{$prefix}%0{$length}d",1);	
	if(mysql_num_rows($qlast) > 0){
	  $data = mysql_fetch_row($qlast);
	  $exp = explode($prefix,$data[0]);
	  if(count($exp) == 2) return sprintf("{$prefix}%0{$length}d",$exp[1]+1);	    
	  else return $default;
	}
  }
function loadAdmin($filename){
   if($_SESSION['typelog'] =="admin"){
   include $filename;
   }else echo '<h3 align="center"><font color="red">Tidak Boleh Akses Halaman Ini Selain Administrator</font></h3>';	
  }
?>
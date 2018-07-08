<?php

if(!function_exists('assets')) {
	function assets($files){
		return base_url("assets/".$files);
	}
}

if(!function_exists('getUpload')) {
	function getUpload($files){
		return base_url("upload/".$files);
	}
}

if (!function_exists('adminRoute')) {
	function adminRoute($path){
		$url = base_url('dashboard/'.$path);
		return $url;
	}
}

if (!function_exists('generateKey')) {
	function generateKey()
	{
		$times = date('His');
		$string = substr(md5($times), 0,10);
		return $string;
	}
}

?>
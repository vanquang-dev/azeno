<?php 
function utf8tourl($str) {
  $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
  $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
  $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
  $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
  $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
  $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
  $str = preg_replace("/(đ)/", 'd', $str);
  $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
  $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $str);
  $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
  $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
  $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
  $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
  $str = preg_replace("/(Đ)/", 'd', $str);
  $str = preg_replace("/:/", '', $str);
  $str = preg_replace("/- /", '', $str);
  $str = str_replace(" ", "-", str_replace("&*#39;-","",$str));
  $str = str_replace( "ß", "ss", $str);
  $str = str_replace( "%", "", $str);
  $str = str_replace( "'", "", $str); 
  $str = str_replace( "‘", "", $str); 
  $str = str_replace( "’", "", $str);
  $str = str_replace( "?", "", $str); 
  $str = str_replace( "/", "-", $str); 
  $str = preg_replace("/[^_a-zA-Z0-9 -] /", "",$str);
  $str = str_replace(array('%20', ' ','(',')'), '-', $str);
  $str = str_replace("----","-",$str);
  $str = str_replace("---","-",$str);
  $str = str_replace("--","-",$str);
  return strtolower($str);
}
?>
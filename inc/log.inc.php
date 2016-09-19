<?
$dt = time();
$page = $_SERVER['REQUEST_URI'];
if(isset($_SERVER['HTTP_REFERER'])) $ref=$_SERVER['HTTP_REFERER'];
$ref = "";
$path = "$dt|$page|$ref \n";
file_put_contents('./log/'.PATH_LOG, $path, FILE_APPEND);
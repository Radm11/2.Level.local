<HTML>
<HEAD>
<TITLE>fopen</TITLE>
</HEAD>
<BODY>
<?
// Открытие потока на чтение и получение его дескриптора
//$f = fopen("data.txt", "a+") or die("Не могу открыть файл!");
//echo fread($f, 5);
//echo fread($f, 4);
//fpassthru($f);
/*$lines = [];
while ( $line = fgets($f) ) {
    $lines[] = $line;
}
print_r($lines);*/
/*$lines = [];
while ( $line = fgetss($f, 1024, "<p><br>") ){
    $lines[] = $line;
}
print_r($lines);*/
/*$bytes = [];
while ( !feof($f) ){
    $bytes[] = fgetc($f);
}
print_r($bytes);*/
//fwrite($f, PHP_EOL."Line six");
readfile("data.txt");
// Закрытие потока
//fclose($f);
?>
</BODY>
</HTML>
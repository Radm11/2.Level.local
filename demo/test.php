<?php
/**
 * Created by PhpStorm.
 * User: DoroshchukRA
 * Date: 15.09.2016
 * Time: 11:15
 */
// Заходим в текущую директорию
//$dir = opendir(".");
/*// Читаем содержимое директории
while ( $name = readdir($dir) ) {
        if(is_dir($name))
        echo '[' . $name . ']<br>';
    else
        echo $name . '<br>';
}
// Выходим из директории
closedir($dir);*/

//$dir_content = scandir(".");
//print_r($dir_content);
//closedir($dir);
// error_reporting(1);
$link = mysqli_connect('localhost', 'root', '', 'web');
//
//mysqli_select_db($link, "test");
/*if (!$link){
    echo mysqli_connect_errno();
    echo "<br>";
    echo mysqli_connect_error();
}*/
/*$res = mysqli_query($link, "SET NAMES 'utf8'");
if (!$res)
    echo mysqli_error($link);*/
$name = mysqli_real_escape_string($link, "O'Brian");
$sql = "SELECT * FROM teachers WHERE name = '$name'";
$result = mysqli_query($link, $sql);
echo $sql;
mysqli_close($link);
/*$sql = "SELECT * FROM teachers";
//echo $sql;
$result = mysqli_query($link, $sql);
mysqli_close($link);*/
//while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
//$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
//print_r($row);


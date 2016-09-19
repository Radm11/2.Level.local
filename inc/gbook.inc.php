<?php
/* Основные настройки */
define('DB_HOST', 'localhost');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'gbook');
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die("Не могу создать соеденение");
function clear_str($data){
    global $link;
    return mysqli_real_escape_string($link, trim(strip_tags($data)));
}
/* Основные настройки */
/* Сохранение записи в БД */
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = clear_str($_POST['name']);
    $email = clear_str($_POST['email']);
    $msg = clear_str($_POST['msg']);
    $sql = "INSERT INTO msgs (name, email, msg)
                      VALUES ('$name','$email', '$msg')";
    mysqli_query($link, $sql) or die(mysqli_error($link));
    echo print_r(getallheaders());
     header('Location: '.$_SERVER['REQUEST_URI']);
     exit;
}
/* Сохранение записи в БД */
/* Удаление записи из БД */
if(isset($_GET['del'])) {
    //echo $del;
    //echo is_int($del);
    //$del = clear_str($_GET['del']);
   $del = abs((int)$_GET['del']);
    if($del){
        $sql = "DELETE FROM msgs WHERE id=$del";
        mysqli_query($link, $sql) or die(mysqli_error($link));
        //echo print_r(getallheaders());
        header('Location: '.$_SERVER['SCRIPT_NAME'].'?id=gbook');
       exit;
    }
   // echo $del;
   // echo is_int($del);
}
/* Удаление записи из БД */
?>
<h3>Оставьте запись в нашей Гостевой книге</h3>
<form method="post" action="<?=$_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />
<br />
<input type="submit" value="Отправить!" />
</form>
<?php
/* Вывод записей из БД */
$sql = "SELECT id, name, email, msg, UNIX_TIMESTAMP(datetime) as dt 
           FROM msgs
           ORDER BY id DESC LIMIT 10";
$res = mysqli_query($link, $sql) or die (mysqli_error($link));
while($row=mysqli_fetch_assoc($res)){
    $id=$row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $date = date('d-m-Y H:i:s', $row['dt']);
    $msg= $row['msg'];
    echo <<<HTML
        <hr>
        <p>
            <a href='mailto:$email'>$name</a> @ $date
            <br>$msg
        </p>
            <p align="right">
            <a href="{$_SERVER['REQUEST_URI']}&del=$id">Удалить</a>
HTML;
}
mysqli_close($link);
/* Вывод записей из БД */
?>
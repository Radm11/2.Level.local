<?php
/* Параметры базы данных */
define('DB_HOST', 'localhost');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'eshop');
define('ORDERS_LOG', 'orders.log');
//Корзина пользователя
$basket=[];
/* Количество товара в корзине пользователя*/
$count=0;
/*Соединение с БД и проверка на ошибки*/
$link=mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD); //or die(mysqli_connect_error($link));
mysqli_select_db($link, DB_NAME);
if (!$link) {
    echo mysqli_connect_errno();
    echo "<br>";
    echo mysqli_connect_error();
}
/* Создаание или чтение корзины */
basketInit();
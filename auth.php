<?
ini_set ("session.use_trans_sid", true);
session_start();
include ('root/lib/connect.php'); //подключаемся к БД
include ('root/lib/function_global.php'); //подключаем файл с глобальными функциями

if(isset($_POST['OUT'])) out(); //если передана переменная action, «разавторизируем» пользователя
?>


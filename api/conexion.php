<?php

$dbhost = "bkdss8husughxwqvm3ju-mysql.services.clever-cloud.com";
$dbuser = "usxqmrypw6rg9kbc";
$dbpass = "Psg0IARg21Vfn84MqTOg";
$dbname = "bkdss8husughxwqvm3ju";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
	die("No hay conexion:" .mysqli_connect_error());
}
?>
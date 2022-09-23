<?php

$host = 'localhost'; //local onde está armazenado o bd
$user = 'root'; //usuário de login do bd
$pwd = ''; //senha do usuário de login do bd
$db = 'pronatectgk'; //nome do banco de dados


$conexao=mysqli_connect($host, $user, $pwd) or 
die ('Não foi possível conectar ao servidor');
mysqli_select_db($conexao,$db);
?>


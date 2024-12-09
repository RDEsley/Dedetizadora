<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli -> error) {
    die("Ocorreu uma Falha ao concetar ao Banco de Dados: " .  $mysqli -> error);
}
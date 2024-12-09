<?php

$usuario = 'root';
$senha = '';
$database = 'bdbdd';
$host = 'localhost';


$conn = new mysqli($host, $usuario, $senha, $database);

if ($conn->error) {
    die("Ocorreu uma Falha ao concetar ao Banco de Dados: " .  $conn->error);
}

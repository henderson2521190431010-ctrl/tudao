<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Config\Conexao;

$conexao = new Conexao();

$pdo = $conexao->conectar();

echo "Conectado com sucesso ao banco aula6!";
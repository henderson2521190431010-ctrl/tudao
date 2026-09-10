<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Config\Conexao;

$pdo = null;

try {

    $conexao = new Conexao();

    $pdo = $conexao->conectar();

    if ($pdo !== null) {
        echo "Conectado com sucesso ao banco aula6!";
    } else {
        echo "Não foi possível conectar ao banco.";
    }

} catch (PDOException $e) {

    echo "Erro na conexão: " . $e->getMessage();

}

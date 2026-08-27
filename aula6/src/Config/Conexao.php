<?php

namespace App\Config;

use PDO;
use PDOException;

class Conexao
{
    private string $host = "localhost";
    private string $banco = "aula6";
    private string $usuario = "root";
    private string $senha = "";

    private ?PDO $conexao = null;

    public function conectar(): PDO
    {
        if ($this->conexao === null) {

            try {

                $dsn = "mysql:host={$this->host};dbname={$this->banco};charset=utf8mb4";

                $this->conexao = new PDO(
                    $dsn,
                    $this->usuario,
                    $this->senha
                );

                $this->conexao->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );

                $this->conexao->setAttribute(
                    PDO::ATTR_DEFAULT_FETCH_MODE,
                    PDO::FETCH_ASSOC
                );

            } catch (PDOException $e) {

                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }

        return $this->conexao;
    }
}
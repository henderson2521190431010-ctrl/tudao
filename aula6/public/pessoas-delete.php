<?php

require "../vendor/autoload.php";

use App\DAO\PessoaDAO;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: pessoas-list.php");
    exit;
}

$id = $_POST['id'] ?? null;

if (!$id) {
    header("Location: pessoas-list.php");
    exit;
}

$dao = new PessoaDAO();

$dao->excluir((int)$id);

header("Location: pessoas-list.php");
exit;
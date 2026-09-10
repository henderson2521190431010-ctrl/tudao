<?php

require "../vendor/autoload.php";

use App\DAO\PessoaDAO;

$dao = new PessoaDAO();

$pessoas = $dao->listar();

$content = '
<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-1">
                <i class="bi bi-people-fill me-2"></i>
                Pessoas
            </h2>

            <p class="text-muted mb-0">
                Lista de pessoas cadastradas.
            </p>
        </div>

        <a href="pessoas-create.php" class="btn btn-primary">
            <i class="bi bi-person-plus-fill me-1"></i>
            Nova Pessoa
        </a>

    </div>

    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-body p-4">

            <!-- Campo de pesquisa -->
            <div class="mb-4">
                <label for="pesquisaPessoa" class="form-label fw-semibold">
                    <i class="bi bi-search me-1"></i>
                    Pesquisar
                </label>

                <input
                    type="text"
                    id="pesquisaPessoa"
                    class="form-control"
                    placeholder="Digite o nome, CPF, telefone ou endereço..."
                    value=""
                    autocomplete="off"
                >
            </div>

            <div class="table-responsive">

                <table class="table table-hover align-middle" border="2">

                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
                        </tr>
                    </thead>

                    <tbody id="tabelaPessoas">
';

foreach ($pessoas as $pessoa) {

    $content .= '
                        <tr>

                            <td>
                                ' . htmlspecialchars($pessoa['id']) . '
                            </td>

                            <td>
                                ' . htmlspecialchars($pessoa['nome']) . '
                            </td>

                            <td>
                                ' . htmlspecialchars($pessoa['cpf']) . '
                            </td>

                            <td>
                                ' . htmlspecialchars($pessoa['telefone'] ?? '') . '
                            </td>

                            <td>
                                ' . htmlspecialchars($pessoa['endereco'] ?? '') . '
                            </td>

                        </tr>
    ';
}

if (count($pessoas) === 0) {

    $content .= '
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">
                                <i class="bi bi-info-circle me-1"></i>
                                Nenhuma pessoa cadastrada.
                            </td>
                        </tr>
    ';
}

$content .= '

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>

<script>
    const pesquisa = document.getElementById("pesquisaPessoa");
    const linhas = document.querySelectorAll("#tabelaPessoas tr");

    pesquisa.addEventListener("input", function () {

        const termo = this.value.toLowerCase().trim();

        linhas.forEach(function (linha) {

            const texto = linha.textContent.toLowerCase();

            if (texto.includes(termo)) {
                linha.style.display = "";
            } else {
                linha.style.display = "none";
            }

        });

    });
</script>
';

include "layout.php";
?>

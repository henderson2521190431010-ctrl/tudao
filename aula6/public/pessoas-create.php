 <?php

$content = '
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                <div class="bg-primary text-white p-4">
                    <div class="d-flex align-items-center">
                        <div class="bg-white bg-opacity-25 rounded-circle p-3 me-3">
                            <i class="bi bi-person-plus-fill fs-3"></i>
                        </div>

                        <div>
                            <h3 class="mb-1 fw-bold">Cadastrar Pessoa</h3>
                            <p class="mb-0 opacity-75">
                                Preencha os dados abaixo para cadastrar uma nova pessoa.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card-body p-4 p-md-5">

                    <form action="pessoa-cadastrar.php" method="POST">

                        <div class="row g-4">

                            <div class="col-12">
                                <label for="nome" class="form-label fw-semibold">
                                    <i class="bi bi-person me-1 text-primary"></i>
                                    Nome completo
                                </label>

                                <input
                                    type="text"
                                    class="form-control form-control-lg rounded-3"
                                    id="nome"
                                    name="nome"
                                    maxlength="100"
                                    placeholder="Digite o nome completo"
                                    required
                                >
                            </div>

                            <div class="col-md-6">
                                <label for="cpf" class="form-label fw-semibold">
                                    <i class="bi bi-card-text me-1 text-primary"></i>
                                    CPF
                                </label>

                                <input
                                    type="text"
                                    class="form-control form-control-lg rounded-3"
                                    id="cpf"
                                    name="cpf"
                                    maxlength="11"
                                    placeholder="Digite o CPF"
                                    required
                                >

                                <div class="form-text">
                                    Informe apenas os números.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="telefone" class="form-label fw-semibold">
                                    <i class="bi bi-telephone me-1 text-primary"></i>
                                    Telefone
                                </label>

                                <input
                                    type="text"
                                    class="form-control form-control-lg rounded-3"
                                    id="telefone"
                                    name="telefone"
                                    maxlength="15"
                                    placeholder="Digite o telefone"
                                >
                            </div>

                            <div class="col-12">
                                <label for="endereco" class="form-label fw-semibold">
                                    <i class="bi bi-geo-alt me-1 text-primary"></i>
                                    Endereço
                                </label>

                                <input
                                    type="text"
                                    class="form-control form-control-lg rounded-3"
                                    id="endereco"
                                    name="endereco"
                                    maxlength="255"
                                    placeholder="Digite o endereço completo"
                                >
                            </div>

                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-end gap-2">
                            <button
                                type="reset"
                                class="btn btn-light btn-lg px-4 rounded-3"
                            >
                                <i class="bi bi-x-circle me-1"></i>
                                Limpar
                            </button>

                            <button
                                type="submit"
                                class="btn btn-primary btn-lg px-4 rounded-3 shadow-sm"
                            >
                                <i class="bi bi-check-circle me-1"></i>
                                Cadastrar Pessoa
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
';

include "layout.php";
?>
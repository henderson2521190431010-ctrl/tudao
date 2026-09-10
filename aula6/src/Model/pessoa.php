<?php
namespace app\Model;

class pessoa
{
    private $id;
    private $nome;
    private $telefone;
    private $cpf;
    private $endereco;
    private $createdAt;
    private $updatedAt;



public function __construct(
    $nome = null,
    $telefone = null,
    $cpf = null,
    $endereco = null
) {
    $this->nome = $nome;
    $this->telefone = $telefone;
    $this->cpf = $cpf;
    $this->endereco = $endereco;
}



    // ID
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    // Nome
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    // Telefone
    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }


    // CPF
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }


    // Endereço
    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }


    // Data de criação
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }


    // Data de atualização
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}
?>

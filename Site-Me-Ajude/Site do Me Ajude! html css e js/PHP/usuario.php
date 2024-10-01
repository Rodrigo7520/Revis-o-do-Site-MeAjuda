<?php
class Usuario {
    private $nome;
    private $cpf;
    private $dataNascimento;
    private $cidade;
    private $bairro;
    private $endereco;
    private $cep;
    private $estado;
    private $telefone;
    private $email;
    private $senha;

    public function __construct($nome, $cpf, $dataNascimento, $cidade, $bairro, $endereco, $cep, $estado, $telefone, $email, $senha) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->endereco = $endereco;
        $this->cep = $cep;
        $this->estado = $estado;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha; 
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }
}
?>

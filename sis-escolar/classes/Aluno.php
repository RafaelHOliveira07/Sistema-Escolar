<?php

class Aluno
{
    public $id;
    public $nome;
    public $dataNasc;
    public $email;
    public $tel;
    public $cep;
    public $endereco;
    public $nCasa;
    public $bairro;
    public $cidade;
    public $estado;
    public $genero;
    public $turma;
    public $statusMat;

    public function inserir()
    {
        // Define a string SQL de inserção de dados na tabela "tb_alunos"
        $sql = "INSERT INTO tb_alunos (nome, dataNasc, email, tel, cep, endereco, nCasa, bairro, cidade, estado, genero, turma, statusMat) VALUES (
            '" .$this->nome. "',
            '" .$this->dataNasc. "',
            '" .$this->email. "',
            '" .$this->tel. "',
            '" .$this->cep. "',
            '" .$this->endereco. "',
            '" .$this->nCasa. "',
            '" .$this->bairro. "',
            '" .$this->cidade. "',
            '" .$this->estado. "',
            '" .$this->genero. "',
            '" .$this->turma. "',
            '" .$this->statusMat. "'
        )";

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        // Executa a string SQL na conexão, inserindo os dados na tabela "tb_alunos"
        $conexao->exec($sql);

        echo "Registro gravado com sucesso";
    }

    public function listar()
    {
        // Define a string SQL para selecionar todos os registros da tabela
        $sql = "SELECT * FROM tb_alunos";

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        // Executa a string SQL na conexão retornando um objeto de restultado
        $resultado = $conexao->query($sql);

        // Extrai todos os registros do objeto e os armazena em um array
        $lista = $resultado->fetchALL();

        // Retorna o array contendo todos os registros da tabela "tb_alunos"
        return $lista;
    }

}

?>
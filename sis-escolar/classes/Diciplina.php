<?php

class Diciplina
{
    public $id;
    public $descDiciplina;
    public $cargaHora;

    public function inserir()
    {
        // Define a string SQL de inserção de dados na tabela "tb_turmas"
        $sql = "INSERT INTO tb_diciplinas (descDiciplina, cargaHora) VALUES (
            '" .$this->descDici. "',
            '" .$this->cargaHora. "'
        )";

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        // Executa a string SQL na conexão, inserindo os dados na tabela "tb_turmas"
        $conexao->exec($sql);

        echo "Registro gravado com sucesso";
    }

    public function listar()
    {
        // Define a string SQL para selecionar todos os registros da tabela
        $sql = "SELECT * FROM tb_diciplinas";

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        // Executa a string SQL na conexão retornando um objeto de restultado
        $resultado = $conexao->query($sql);

        // Extrai todos os registros do objeto e os armazena em um array
        $lista = $resultado->fetchALL();

        // Retorna o array contendo todos os registros da tabela "tb_turmas"
        return $lista;
    }

}

?>
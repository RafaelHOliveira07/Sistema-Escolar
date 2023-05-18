<?php

class Turma
{
    public $id;
    public $descTurma;
    public $ano;

    // Define um método construtor na classe com parâmetro opcional
    public function __construct($id = false)
    {
        // Verifica se a variável $id foi definida
        if ($id){
            // Atribui o valor de $id à propriedade $id do objeto
            $this->id = $id;
            // carrega as informações correspondentes ao $id do objeto
            $this->carregar();
        }
    }

    public function inserir()
    {
        // Define a string SQL de inserção de dados na tabela "tb_turmas"
        $sql = "INSERT INTO tb_turmas (descTurma, ano) VALUES (
            '" .$this->descTurma. "',
            '" .$this->ano. "'
        )";

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        // Executa a string SQL na conexão, inserindo os dados na tabela "tb_turmas"
        $conexao->exec($sql);

        header('Location: turmas-sucesso.php');
    }

    public function listar()
    {
        // Define a string SQL para selecionar todos os registros da tabela
        $sql = "SELECT * FROM tb_turmas";

        // Cria uma nova conexão PDO com o banco de dados "sis-escolar"
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        // Executa a string SQL na conexão retornando um objeto de restultado
        $resultado = $conexao->query($sql);

        // Extrai todos os registros do objeto e os armazena em um array
        $lista = $resultado->fetchALL();

        // Retorna o array contendo todos os registros da tabela "tb_turmas"
        return $lista;
    }

    public function excluir()
    {
        // Define a string de consulta SQL para deletar um registro
        // da tabela "tb_turmas" com base ni seu ID
        $sql = "DELETE FROM tb_turmas WHERE turma_id=".$this->id;

        // Cria uma nova conexão PDO com o banco de dados localizado
        // no servidor "127.0.0.1" e autentica com o usuário "root" (sem senha)
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        // Executa a intrução SQL de exclusão utilizando o métedo
        // "exerc" do objeto de conexão PDO criado acima
        $conexao->exec($sql);
    }

    public function carregar()
    {
        // Query SQL para buscar uma turma no banco de dados pelo id
        $sql = "SELECT * FROM tb_turmas WHERE turma_id=" . $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        // Execução do query e armazenamento do resultado em uma variável
        $resultado = $conexao->query($sql);
        // Recuperação da primeira linha do resultado como um array associativo
        $linha = $resultado->fetch();

        // Atribuição dos valores dos campos recuperados do banco
        $this->descTurma = $linha['descTurma'];
        $this->ano = $linha['ano'];
    }

    public function atualizar()
    {
        // Query SQL para atualizar uma turma no banco de dados pelo id
        $sql = "UPDATE tb_turmas SET
                    descTurma = '$this->descTurma' ,
                    ano = '$this->ano' 
                WHERE turma_id = $this->id ";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
        $conexao->exec($sql);
    }

}

?>
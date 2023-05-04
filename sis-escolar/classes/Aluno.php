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

    public function excluir()
    {
        // Define a string de consulta SQL para deletar um registro
        // da tabela "tb_alunos" com base ni seu ID
        $sql = "DELETE FROM tb_alunos WHERE id=".$this->id;

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
        $sql = "SELECT * FROM tb_alunos WHERE id=" . $this->id;
        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');

        // Execução do query e armazenamento do resultado em uma variável
        $resultado = $conexao->query($sql);
        // Recuperação da primeira linha do resultado como um array associativo
        $linha = $resultado->fetch();

        // Atribuição dos valores dos campos recuperados do banco
        $this->nome = $linha['nome'];
        $this->dataNasc = $linha['dataNasc'];
        $this->email = $linha['email'];
        $this->tel = $linha['tel'];
        $this->cep = $linha['cep'];
        $this->endereco = $linha['endereco'];
        $this->nCasa = $linha['nCasa'];
        $this->bairro = $linha['bairro'];
        $this->cidade = $linha['cidade'];
        $this->estado = $linha['estado'];
        $this->genero = $linha['genero'];
        $this->turma = $linha['turma'];
        $this->statusMat = $linha['statusMat'];  
    }

    public function atualizar()
    {
        // Query SQL para atualizar uma turma no banco de dados pelo id
        $sql = "UPDATE tb_alunos SET
                    nome = '$this->nome' ,
                    dataNasc = '$this->dataNasc' ,
                    email = '$this->email' ,
                    tel = '$this->tel' ,
                    cep = '$this->cep' ,
                    endereco = '$this->endereco' ,
                    nCasa = '$this->nCasa' ,
                    bairro = '$this->bairro' ,
                    cidade = '$this->cidade' ,
                    estado = '$this->estado' ,
                    genero = '$this->genero' ,
                    turma = '$this->turma' ,
                    statusMat = '$this->statusMat'
                WHERE id = $this->id ";

        $conexao = new PDO('mysql:host=127.0.0.1;dbname=sis-escolar','root','');
        $conexao->exec($sql);
    }

}

?>
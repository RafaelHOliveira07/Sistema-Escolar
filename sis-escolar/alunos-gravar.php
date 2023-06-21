<?php

// Inclui o arquivo quer contém a definição da classe turma
require_once "classes/Aluno.php";
// Cria um novo objeto Turma
$aluno = new Aluno();

// Define as propriedades descTurma e ano do objeto Turma
// com os valores enviados pelo formulário
if (isset($_POST['statusMat'])) {
    $aluno->nome = $_POST['nome'];
    $aluno->dataNasc = $_POST['dataNasc'];
    $aluno->email = $_POST['email'];
    $aluno->cpf = $_POST['cpf'];
    $aluno->tel = $_POST['tel'];
    $aluno->cep = $_POST['cep'];
    $aluno->endereco = $_POST['endereco'];
    $aluno->nCasa = $_POST['nCasa'];
    $aluno->bairro = $_POST['bairro'];
    $aluno->cidade = $_POST['cidade'];
    $aluno->estado = $_POST['estado'];
    $aluno->genero = $_POST['genero'];
    $aluno->turma_id = $_POST['turma_id'];
    $aluno->statusMat = $_POST['statusMat'];
    if (isset($_FILES['foto']['name']) && $_FILES['foto']['error'] == 0) {

        $arquivo_tmo = $_FILES['foto']['tmp_name'];
        $nomeImagem = $_FILES['foto']['name'];
        $extensao = strrchr($nomeImagem, '.');
        $extensao = strtolower($extensao);

        if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {

            $novoNome = md5(microtime()) . $extensao;
            $destino = 'uploads/' . $novoNome;

            @move_uploaded_file($arquivo_tmo, $destino);

            $aluno->foto = $novoNome;
        }
    }

    // Chama o método inserir() no objeto Turma para inserir
    //os danos da nova turma no banco de dados
    $aluno->inserir();

} else {
    $aluno->nome = $_POST['nome'];
    $aluno->dataNasc = $_POST['dataNasc'];
    $aluno->email = $_POST['email'];
    $aluno->cpf = $_POST['cpf'];
    $aluno->tel = $_POST['tel'];
    $aluno->cep = $_POST['cep'];
    $aluno->endereco = $_POST['endereco'];
    $aluno->nCasa = $_POST['nCasa'];
    $aluno->bairro = $_POST['bairro'];
    $aluno->cidade = $_POST['cidade'];
    $aluno->estado = $_POST['estado'];
    $aluno->genero = $_POST['genero'];
    $aluno->turma_id = $_POST['turma_id'];
    if (isset($_FILES['foto']['name']) && $_FILES['foto']['error'] == 0) {

        $arquivo_tmo = $_FILES['foto']['tmp_name'];
        $nomeImagem = $_FILES['foto']['name'];
        $extensao = strrchr($nomeImagem, '.');
        $extensao = strtolower($extensao);

        if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {

            $novoNome = md5(microtime()) . $extensao;
            $destino = 'uploads/' . $novoNome;

            @move_uploaded_file($arquivo_tmo, $destino);

            $aluno->foto = $novoNome;
        }
    }

    // Chama o método inserir() no objeto Turma para inserir
    //os danos da nova turma no banco de dados
    $aluno->inserir();
}

?>
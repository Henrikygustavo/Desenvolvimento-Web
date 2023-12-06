<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conectar ao banco de dados (substitua os valores conforme necessário)
    $host = 'seu_host';
    $usuario = 'seu_usuario';
    $senha = 'sua_senha';
    $banco = 'seu_banco';

    $conexao = new mysqli($host, $usuario, $senha, $banco);

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conexao->connect_error);
    }

    // Obter os dados do formulário
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];

    // Preparar a consulta SQL para inserção
    $sql = "INSERT INTO clientes (codigo, nome, sobrenome, data_nascimento, email) VALUES ('$codigo', '$nome', '$sobrenome', '$data_nascimento', '$email')";

    // Executar a consulta
    if ($conexao->query($sql) === TRUE) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o cliente: " . $conexao->error;
    }

    // Fechar a conexão
    $conexao->close();
}
?>
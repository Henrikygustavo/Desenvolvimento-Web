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

    // Obter o valor do filtro
    $filtro = $_POST['filtro'];

    // Preparar a consulta SQL para listar os clientes filtrados
    $sql = "SELECT * FROM clientes WHERE nome LIKE '%$filtro%'";

    // Executar a consulta
    $resultado = $conexao->query($sql);

    // Exibir os resultados em uma tabela
    echo "<table border='1'>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
            </tr>";

    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>{$linha['codigo']}</td>
                <td>{$linha['nome']}</td>
                <td>{$linha['sobrenome']}</td>
                <td>{$linha['data_nascimento']}</td>
                <td>{$linha['email']}</td>
            </tr>";
    }

    echo "</table>";

    // Fechar a conexão
    $conexao->close();
}
?>

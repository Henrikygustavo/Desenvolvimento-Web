<?php
// Verificar as credenciais (por enquanto, apenas verifica se os campos não estão vazios)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        // Lógica de autenticação aqui (pode ser um banco de dados, por exemplo)
        // Por enquanto, vamos redirecionar para a página principal
        header("Location: home.php");
        exit();
    } else {
        echo "Credenciais inválidas. Por favor, preencha todos os campos.";
    }
}
?>
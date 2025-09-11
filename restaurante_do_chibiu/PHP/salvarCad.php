<?php
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];

    if ($senha !== $confirma_senha) {
        echo "As senhas não coincidem.";
    } else {
        echo "Dados recebidos com sucesso!";
        echo "<br>Nome: " . htmlspecialchars($nome);
        echo "<br>Email: " . htmlspecialchars($email);
        echo "<br>Senha: (armazenada com segurança)";
    }
}
?>
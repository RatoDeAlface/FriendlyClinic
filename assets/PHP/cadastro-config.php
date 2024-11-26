<?php
// Iniciando a sessão para armazenar mensagens
session_start();

if (isset($_POST['submit'])) {
    // Incluindo a conexão com o banco de dados
    include_once(__DIR__ . '\config.php'); // Corrigido o caminho para o config.php

    // Coletando os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmSenha = $_POST['confirm'];

    // Verificando se as senhas coincidem
    if ($senha !== $confirmSenha) {
        // Se as senhas não coincidem, armazenamos a mensagem de erro na sessão
        $_SESSION['erro_senhas'] = "As senhas não coincidem.";

        // Redireciona para a página de cadastro
        header("Location: cadastro.php"); // Caminho relativo para a página de cadastro
        exit; // Sempre usar exit após o header para parar a execução do código
    } else {
        // Caso as senhas coincidam, continue com o cadastro
        $sql = "INSERT INTO usuarios (nome_completo, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $conexao->prepare($sql); // Preparando a consulta

        // Vinculando os parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        // Executando a consulta
        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
            header("Location: login.php"); // Caminho relativo para a página inicial
            exit; // Sempre usar exit após o header para parar a execução do código
        } else {
            echo "Erro ao realizar o cadastro.";
        }
    }
}
?>

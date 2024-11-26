<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // Conecta ao banco de dados
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta SQL com placeholders
    $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";

    // Prepara a consulta
    $stmt = $conexao->prepare($sql);

    // Vincula os parâmetros
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    // Executa a consulta
    $stmt->execute();

    // Verifica se retornou algum resultado
    if ($stmt->rowCount() < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        $_SESSION['erro_login'] = "E-mail/Senha incorretos.";
        header('Location: login.php');
        
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: sistema.php');
    }

} else {
    // Caso o formulário não tenha sido preenchido corretamente
    header('Location: login.php');
}
?>

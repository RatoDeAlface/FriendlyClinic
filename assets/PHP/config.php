<?php
try {
    // Criando a conexão com PDO e configurando para lançar exceções em caso de erro
    $conexao = new PDO("mysql:host=localhost;dbname=mysql", 'root', '');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Habilita a exibição de erros

    echo "Conexão efetuada com sucesso!"; // Se a conexão for bem-sucedida

} catch (PDOException $e) {
    // Em caso de erro, será capturado pela exceção
    echo "Erro na conexão: " . $e->getMessage(); // Exibe a mensagem de erro gerada
}
?>
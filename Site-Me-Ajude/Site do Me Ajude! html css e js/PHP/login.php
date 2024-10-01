<?php
// Habilitar exibição de erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inclua o arquivo de conexão com o banco de dados
include 'db_connection.php'; // Conexão com o banco de dados
include 'usuario.php'; // Classe Usuario

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Método POST recebido.<br>"; // Mensagem de depuração
    // Obtendo os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificando se os campos estão vazios
    if (empty($email) || empty($senha)) {
        echo "<script>alert('Por favor, preencha todos os campos.');</script>";
        exit;
    }

    try {
        // Preparando a consulta
        $sql = "SELECT * FROM usuarios WHERE email = :email"; // Corrigido para a tabela 'usuarios'
        $stmt = $conn->prepare($sql);
        
        // Bind dos parâmetros
        $stmt->bindParam(':email', $email);
        
        // Executando a consulta
        $stmt->execute();
        echo "Consulta executada.<br>"; // Mensagem de depuração

        // Verificando se um usuário foi encontrado
        if ($stmt->rowCount() > 0) {
            echo "Usuário encontrado.<br>"; // Mensagem de depuração
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verificando a senha
            if ($usuario['senha'] === $senha) { // Comparação de senhas como strings
                session_start();
                $_SESSION['email'] = $email; // Armazenando email na sessão
                header("Location: ../HTML/inicioSessao.html");
                exit;
            } else {
                // Senha incorreta
                echo "<script>alert('Senha incorreta.'); window.location.href = '../HTML/entrar.html';</script>";
                exit;
            }
        } else {
            // Email não encontrado
            echo "<script>alert('Email não encontrado.'); window.location.href = '../HTML/entrar.html';</script>";
            exit;
        }
    } catch (PDOException $e) {
        echo "<script>alert('Erro: " . $e->getMessage() . "');</script>";
    }
}
?>

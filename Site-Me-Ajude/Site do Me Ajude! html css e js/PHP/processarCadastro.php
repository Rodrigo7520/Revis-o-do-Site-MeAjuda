<?php
include 'db_connection.php'; // Inclua sua conexão com o banco de dados
include 'usuario.php'; // Inclua a classe Usuario

// Supondo que você tenha recebido os dados do formulário via POST
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$dataNascimento = $_POST['dataNascimento'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha']; // Senha em texto normal

// Prepare a SQL statement
$sql = "INSERT INTO usuarios (nome, cpf, data_nascimento, cidade, bairro, endereco, cep, estado, telefone, email, senha) 
        VALUES (:nome, :cpf, :data_nascimento, :cidade, :bairro, :endereco, :cep, :estado, :telefone, :email, :senha)";

$stmt = $conn->prepare($sql);

// Bind os parâmetros
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':data_nascimento', $dataNascimento);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':bairro', $bairro);
$stmt->bindParam(':endereco', $endereco);
$stmt->bindParam(':cep', $cep);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);

// Execute a consulta
if ($stmt->execute()) {
    echo "<script>
            alert('Cadastro realizado com sucesso!');
            window.location.href = '../HTML/entrar.html'; // Redireciona para a página de entrar
          </script>";
} else {
    echo "<script>
            alert('Erro ao cadastrar.');
            window.location.href = 'cadastro.html'; // Redireciona para a página de cadastro
          </script>";
}
?>

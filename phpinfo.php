<?php
// Dados de conexão com o banco de dados
$servername = "127.0.0.1.3306";
$username = "root";
$password = "emanoel1019jo";
$dbname = "127.0.0.1@3306";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";
    // Aqui você pode executar consultas ao banco de dados ou realizar outras operações
}

// Não é necessário fechar a conexão aqui, o PHP fecha automaticamente ao finalizar o script
?>
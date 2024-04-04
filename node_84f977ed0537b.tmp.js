<?php
// Dados de conexão com o banco de dados
$servername = "localhost";
$username = "jarts";
$password = "emanoel1019jo";
$dbname = "siteanimes";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Dados do anime a ser inserido
$titulo = "Nome do Anime";
$descricao = "Descrição do Anime";
$genero = "Gênero do Anime";
$ano_lancamento = "Ano de Lançamento";

// Prepara a consulta SQL para inserir o anime na tabela de animes
$sql = "INSERT INTO animes (titulo, descricao, genero, ano_lancamento)
        VALUES ('$titulo', '$descricao', '$genero', '$ano_lancamento')";

// Executa a consulta e verifica se foi bem-sucedida
if ($conn->query($sql) === TRUE) {
    echo "Anime inserido com sucesso!";
} else {
    echo "Erro ao inserir o anime: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

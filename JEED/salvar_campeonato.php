<?php
// Conexão com o banco de dados
include 'db_connect.php';

// Obtendo os dados do formulário
$nome_campeonato = $_POST['nome-campeonato'];
$data_horario = $_POST['data-horario'];
$hora_horario = $_POST['hora-horario'];
$numero_equipes = $_POST['numero-equipes'];

// Inserindo os dados no banco de dados (sem validação)
$sql = "INSERT INTO Campeonato (nomeCampeonato, dataCampeonato, horario, numeroEquipes) 
        VALUES ('$nome_campeonato', '$data_horario', '$hora_horario', $numero_equipes)";

if ($conn->query($sql) === TRUE) {
    echo "Novo campeonato criado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
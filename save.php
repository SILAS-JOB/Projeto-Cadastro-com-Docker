<?php


$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro";

$con = new mysqli($host, $usuario, $senha, $banco);

if ($con->connect_error) {
    die("Falha na conexão: " . $con->connect_error);
}


$nome = $_POST['name'];
$telefone = $_POST['number'];
$local = $_POST['local'];
$contato = $_POST['contact'];


$stmt = $con->prepare("INSERT INTO usuarios (nome, telefone, local, contato) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $telefone, $local, $contato);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso";
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

$stmt->close();
$con->close();
?>
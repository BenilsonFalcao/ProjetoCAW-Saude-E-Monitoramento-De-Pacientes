<?php
require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $imc = $_POST["imc"];
    $pressao = $_POST["pressao_sistolica"];

    $sql = "INSERT INTO paciente (nome, idade, imc, pressao_sistolica)
            VALUES ('$nome', '$idade', '$imc', '$pressao')";

    $conn->query($sql);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/style.css">
    <title>Adicionar Paciente</title>
</head>
<body>

<h1>Novo Paciente</h1>

<form method="POST">
    Nome: <input type="text" name="nome" required><br>
    Idade: <input type="number" name="idade" required><br>
    IMC: <input type="number" step="0.1" name="imc" required><br>
    Pressão Sistólica: <input type="number" name="pressao_sistolica" required><br>
    <button type="submit">Salvar</button>
</form>

</body>
</html>

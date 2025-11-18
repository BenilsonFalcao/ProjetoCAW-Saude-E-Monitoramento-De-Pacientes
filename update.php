<?php
require_once "connection.php";

$id = $_GET["id"];

$sql = "SELECT * FROM paciente WHERE id = $id";
$result = $conn->query($sql);
$paciente = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $imc = $_POST["imc"];
    $pressao = $_POST["pressao_sistolica"];

    $sql = "UPDATE paciente SET
            nome='$nome',
            idade='$idade',
            imc='$imc',
            pressao_sistolica='$pressao'
            WHERE id=$id";

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
    <title>Editar Paciente</title>
</head>
<body>

<h1>Editar Paciente</h1>

<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $paciente['nome'] ?>" required><br>
    Idade: <input type="number" name="idade" value="<?= $paciente['idade'] ?>" required><br>
    IMC: <input type="number" step="0.1" name="imc" value="<?= $paciente['imc'] ?>" required><br>
    Pressão Sistólica: <input type="number" name="pressao_sistolica" value="<?= $paciente['pressao_sistolica'] ?>" required><br>
    <button type="submit">Atualizar</button>
</form>

</body>
</html>

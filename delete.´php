<?php
require_once "connection.php";

$id = $_GET["id"];

$sql = "DELETE FROM paciente WHERE id=$id";
$conn->query($sql);

header("Location: index.php");
exit;
?>

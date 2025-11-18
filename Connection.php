<?php
require_once "config.php";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>

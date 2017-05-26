<?php
$email=$_POST["email"];
$senha=$_POST["senha"];
$cpf_cnpj=$_POST["cpf_cnpj"];
$cep=$_POST["cep"];
$telefone=$_POST["telefone"];

$conn = new mysqli("localhost", "root", "", "ntmdb");

$sql = "INSERT INTO ntm VALUES ('$email', '$senha', '$cpf_cnpj', '$cep', '$telefone')";

if ($conn->query($sql) === TRUE)
    echo "Dados adicionados com sucesso!";

$conn->close();
?>
<?php
include_once './conexao.php';

$nome =  $_POST ['nome'];
$dataNascimento = $_POST ['dataNascimento'];
$sexo = $_POST ['sexo'];
$email = $_POST ['email'];
$senhaCliente = $_POST ['senhaCliente'];
$cpf = $_POST ['cpf'];
$rg = $_POST ['rg'];
$telefone = $_POST ['telefone'];


$sql = "INSERT INTO cliente"
        . "(nome,"
        . "dataNascimento,"
        . "sexo,"
        . "email,"
        . "senhaCliente,"
        . "cpf,"
        . "rg,"
        . "telefone) values "
        . "('$nome',"
        . "'$dataNascimento',"
        . "'$sexo',"
        . "'$email',"
        . "'$senhaCliente',"
        . "'$cpf',"
        . "'$rg',"
        . "'$telefone')";


$query = mysqli_query($mysqli, $sql);

if ($query) {
    echo "<script> window.location= 'index.html'; alert('Cadastro realizado com sucesso') </script>";

        
}  else {
    echo "<script>window.location= 'login.html'; alert('Erro na realização do cadastro') </script>";
}

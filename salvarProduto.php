<?php

include_once './conexao.php';

if(isset($_FILES['imagem'])){
    $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
    $novo_nome = md5(time()). $extensao;
    $diretorio = "images/";
    
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);
    
    
}

$nomeProduto = $_POST ['nomeProduto'];
$valorUnitario = $_POST ['valorUnitario'];
$descricaoProduto = $_POST ['descricaoProduto'];
$marca = $_POST ['marca'];
$categoria = $_POST ['categoria'];
$peso = $_POST ['peso'];
$imagem = $_FILES['imagem'];

        $sql = "INSERT INTO produto"
                . "(nomeProduto,"
                . "valorUnitario,"
                . "descricaoProduto,"
                . "marca,"
                . "categoria,"
                . "peso,"
                . "imagem,"
                . "data) values"
                . "('$nomeProduto',"
                . "'$valorUnitario',"
                . "'$descricaoProduto',"
                . "'$marca',"
                . "'$categoria',"
                . "'$peso',"
                . "'$novo_nome',"
                . "NOW())";

        $query = mysqli_query($mysqli, $sql);

        if ($query) {
            echo "<script>window.location= 'cadastrarProduto.php'; alert('Cadastro realizado com sucesso') </script>";
        } else {
            echo "<script>window.location= 'cadastrarProduto.php'; alert('Erro na realização do cadastro') </script>";
        } 
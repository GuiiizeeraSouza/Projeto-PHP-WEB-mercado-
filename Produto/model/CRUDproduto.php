<?php
include 'conexaoBD.php';
function cadastrarProduto($produto, $qtd, $preco)
{
    connect();
    query("INSERT INTO produtos (nomeProduto, qtdProduto, precoProduto)
    VALUES ('$produto', '$qtd', $preco)");
    close();
}

function mostrarProduto()
{
    connect();
    $resultado = query("SELECT * FROM produtos");
    close();
    return $resultado;
}

function mostrarProdutoAlterar($codigo)
{
    connect();
    $consulta = query("SELECT * FROM produtos WHERE codProduto = $codigo");
    close();
    $resultadoSeparado = mysqli_fetch_assoc($consulta);
    return $resultadoSeparado;
}

function alterarProduto($codigo, $produto, $qtd, $preco)
{
    connect();
    query("UPDATE produtos SET nomeProduto = '$produto', precoProduto= $preco, qtdProduto = $qtd WHERE codProduto = $codigo");
    close();
}

function excluirProduto($codigo)
{
    connect();
    query("DELETE FROM produtos WHERE codProduto = $codigo");
    close();
}

<?php
include '../model/CRUDproduto.php';

$opcao = $_POST["opcao"];
switch ($opcao) {
    case 'Cadastrar':
        $produto = $_POST["produto"];
        $qtd = $_POST["qtd"];
        $preco = $_POST["preco"];
        cadastrarProduto($produto, $qtd, $preco);
        header("Location: ../view/cadastrar.php");
        break;

    case 'Alterar':
        $codigo = $_POST["codigo"];
        $produto = $_POST["produto"];
        $qtd = $_POST["qtd"];
        $preco = $_POST["preco"];

        alterarProduto($codigo, $produto, $qtd, $preco);

        header("Location: ../view/visualizar.php");
        break;

    case 'Excluir':
        $codigo = $_POST["codigo"];

        excluirProduto($codigo);
        header("Location: ../view/visualizar.php");
        break;
}

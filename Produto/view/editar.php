<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastrar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Vizualizar</title>
</head>

<body>
    <?php
    include '../model/CRUDProduto.php';

    $codigo = $_GET["codigos"];
    $resultado = mostrarProdutoAlterar($codigo);
    ?>
  <?php
        session_start();
        if (isset($_SESSION['nome'])) {
            $nome = $_SESSION['nome'];
            echo "<span class='texto'>Olá $nome!</span>";
        } else {
            echo "<script>alert('Você não esta logado! :('); </script>";
            echo "<script>window.location='paginaLogin.php'; </script>";
        }
        ?>
    <div id="form">
      

        <h1 id="title">Editar Produtos</h1>
        <hr>
        <form method="post" action="../control/controleProduto.php">

            <label for="produto">Produto: </label>
            <div class="input">

                <input type="text" name="produto" id="produto" value="<?php echo $resultado['nomeProduto']; ?>">
            </div>
            <label for="qtd">Quantidade:</label>
            <div class="input">

                <input type="number" step=0.01 name="qtd" id="qtd" value="<?= $resultado['qtdProduto'] ?>">

            </div>
            <label for="preco">Preço: </label>
            <div class="input">

                <input type="number" step=0.01 name="preco" id="preco" value="<?= $resultado['precoProduto'] ?>">

            </div>
            <input type="hidden" name="codigo" value="<?= $resultado['codProduto'] ?>">

            <div id="btn">
                <button type="submit" name="opcao" value="Alterar">Alterar</button>
            </div>
            <div id="btn">
                <button type="submit" name="opcao" value="Excluir">Excluir</button>
            </div>
        </form>
        <div id="btn">
            <form action="../../login/control/controleUsuario.php">
                <button type="submit" class="btn" name="opcao" value="Sair">Log out</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
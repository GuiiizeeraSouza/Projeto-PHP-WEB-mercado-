<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/visualizar..css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
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
    <div id="table">
        <h1 id="title"><strong>Mercado</strong></h1>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Opção</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include '../model/CRUDproduto.php';
                $resultados = mostrarProduto();

                foreach ($resultados as $resultado) {
                    echo " 
                    <tr>
                    <td>$resultado[nomeProduto]</td>
                    <td>$resultado[qtdProduto]</td>
                    <td>$resultado[precoProduto]</td>
                    <td>
                    <button id='btn'>
                    <a href='editar.php?codigos=$resultado[codProduto]'>
                    Editar</a>
                    </td>
                  
                    </tr>
                    ";
                }
                ?>
            </tbody>

        </table>
        <div id="btn">
            <button class="btn">
                <a href="./cadastrar.php">
                    Cadastrar Produto
                </a>
            </button>
        </div>
        <div id="btn">
            <form action="../../login/control/controleUsuario.php">
                <button type="submit" class="btn" name="opcao" value="Sair">Log out</button>
            </form>
        </div>
    </div>

</body>

</html>
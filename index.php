<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <script src="https://kit.fontawesome.com/d6ea71334b.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar bg-info">
        <div class="container-fluid">
            <a class="navbar-brand">Atividade 01</a>
        </div>
    </nav>

    <?php
    session_start();
    if (!isset($_SESSION['produtos'])) {
        $_SESSION['produtos'] = array();
    }


    function adicionarProdutos($nomeProduto, $qntProduto, $valorProduto)
    {
        foreach ($_SESSION['produtos'] as $produtoExistente) {
            if (
                $produtoExistente['nomeProduto'] == $nomeProduto &&
                $produtoExistente['qntProduto'] == $qntProduto &&
                $produtoExistente['valorProduto'] == $valorProduto
            ) {
                return;
            }
        }

        $_SESSION['produtos'][] = array(
            'nomeProduto' => $nomeProduto,
            'qntProduto' => $qntProduto,
            'valorProduto' => $valorProduto
        );
    }

    function removerProduto()
    {
        array_pop($_SESSION['produtos']);
    }

    if (isset($_POST["incluir"])) {
        $nomeProduto = $_POST["nomeProduto"];
        $qntProduto = $_POST["qntProduto"];
        $valorProduto = $_POST["valorProduto"];
        adicionarProdutos($nomeProduto, $qntProduto, $valorProduto);
    } elseif (isset($_POST["excluir"])) {
        removerProduto();
    }

    ?>


    <!--nomeProduto, qntProduto, valorProduto -->
    <div class="container">
        <div class="formulario mb-3">
            <form method="post" action="./index.php">
                <div class="mb-3">
                    <label for="nomeProduto" class="form-label">Nome Produto:</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" required>
                </div>
                <div class="mb-3">
                    <label for="qntProduto" class="form-label">Quantidade Estoque:</label>
                    <input type="number" class="form-control" name="qntProduto" id="qntProduto" required>
                </div>
                <div class="mb-3">
                    <label for="valorProduto" class="form-label">Valor do Produto:</label>
                    <input type="number" class="form-control" name="valorProduto" id="valorProduto" step="0.01" required>
                </div>
                <button type="submit" class="btn btn-success" name="incluir"><i class="fa-solid fa-plus"></i> Incluir</button>
            </form>
        </div>

        <div class="bm-3">
            <?php
            if (!empty($_SESSION['produtos'])) {
                echo "<table class='table mb-3'>";
                echo "<tr><th>Nome do Produto</th><th>Quantidade</th><th>Valor</th></tr>";
                foreach ($_SESSION['produtos'] as $produto) {
                    echo "<tr>";
                    echo "<td>" . $produto['nomeProduto'] . "</td>";
                    echo "<td>" . $produto['qntProduto'] . "</td>";
                    echo "<td>" . $produto['valorProduto'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }

            if (!empty($_SESSION['produtos'])) :
            ?>

                <div class="mb-3 formulario">
                    <form action="./index.php" method="post">
                        <button type="submit" name="excluir" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Excluir</button>
                    </form>
                </div>

            <?php endif; ?>

        </div>
    </div>
</body>

</html>
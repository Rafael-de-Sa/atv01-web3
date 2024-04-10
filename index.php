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

    <!--nomeProduto, qntProduto, valorProduto -->

    <div class="m-3 formulario">
        <form action="post">
            <div class="mb-3">
                <label for="nomeProduto" class="form-label">Nome Produto:</label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto">
            </div>
            <div class="mb-3">
                <label for="qntProduto" class="form-label">Quantidade Estoque:</label>
                <input type="number" class="form-control" name="qntProduto" id="qntProduto" min="0" max="9999">
            </div>
            <div class="mb-3">
                <label for="valorProduto" class="form-label">Valor do Produto:</label>
                <input type="number" class="form-control" name="valorProduto" id="valorProduto">
            </div>
            <button type="submit" class="btn btn-success"><i class="fa-solid fa-plus"></i> Incluir</button>


        </form>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar um Pedido</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <form action="{{ route('alterar_pedido', ['id' => $pedido->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cliente" class="form-label">Nome do Cliente</label>
            <input type="text" name="cliente" class="form-control" id="cliente" value="{{ $pedido->cliente }}">
        </div>
        <div class="mb-3">
            <label for="produto" class="form-label">Produto</label>
            <input type="text" name="produto" class="form-control" id="produto" value="{{ $pedido->produto->nome }}">
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" name="quantidade" class="form-control" id="quantidade" value="{{ $pedido->quantidade }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <!-- Bootstrap JS Bundle -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>

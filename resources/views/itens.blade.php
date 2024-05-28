<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens do Pedido</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Floricultura Jardim</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/plantas">Plantas</a>
            <a href="/funcionarios">Funcionários</a>
            <a href="/clientes">Clientes</a>
            <a href="/pedidos">Pedidos</a>
            <a href="/fornecedores">Fornecedores</a>
        </nav>
    </header>
    <div class="container">
        <h2>Itens do Pedido</h2>
        <form action="{{ route('inserirPedido') }}" method="POST">
            @csrf
            <div class="form-grupo">
                <label for="qtd_itens">Quantidade de Itens:</label>
                <input type="text" id="qtd_itens" name="qtd_itens" required>
            </div>
            <div class="form-grupo">
                <label for="fk_planta">Plantas:</label>
                <input type="text" id="fk_planta" name="fk_planta" required>
            </div>
            <div class="form-grupo">
                <button type="submit">Inserir</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
        <table class="plantas-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Qtd. Itens</th>
                    <th>Plantas</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
        </table>
    </div>
</body>
</html>

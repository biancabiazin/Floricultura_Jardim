<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$planta - Floricultura Jardim</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Floricultura Jardim</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/$planta">$planta</a>
            <a href="/funcionarios">Funcionários</a>
            <a href="/clientes">Clientes</a>
            <a href="/pedidos">Pedidos</a>
            <a href="/fornecedores">Fornecedores</a>
        </nav>
    </header>
    <div class="container">
        <h2>$planta</h2>
        <form action="{{ route('inserirPlanta') }}" method="POST">
            @csrf
            <div class="form-grupo">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-grupo">
                <label for="especie">Espécie:</label>
                <input type="text" id="especie" name="especie" required>
            </div>
            <div class="form-grupo">
                <label for="preco">Preço:</label>
                <input type="number" id="preco" name="preco" step="0.01" required>
            </div>
            <div class="form-grupo">
                <label for="qtd_estoque">Quantidade em Estoque:</label>
                <input type="number" id="qtd_estoque" name="qtd_estoque" required>
            </div>
            <div class="form-grupo">
                <label for="tamanho">Tamanho:</label>
                <input type="number" id="tamanho" name="tamanho" step="0.01" required>
            </div>
            <div class="form-grupo">
                <button type="submit">Inserir</button>
                <button type="reset">Limpar</button>
            </div>
        </form>
        <table class="$planta-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Espécie</th>
                    <th>Preço</th>
                    <th>Quantidade em Estoque</th>
                    <th>Tamanho</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach($planta as $plant)
                <tr>
                    <td>{{ $plant->id_planta }}</td>
                    <td>{{ $plant->nome }}</td>
                    <td>{{ $plant->especie }}</td>
                    <td>{{ $plant->preco }}</td>
                    <td>{{ $plant->qtd_estoque }}</td>
                    <td>{{ $plant->tamanho }}</td>
                    <td>
                        <button onclick="abrirModalEditar({{ $planta->id_planta }})">
                            <img src="../public/ferramenta-lapis.png" alt="Editar">
                        </button>
                        <button onclick="abrirModalExcluir({{ $planta->id_planta }})">Excluir</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

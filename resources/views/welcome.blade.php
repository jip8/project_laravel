<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Técnico Laravel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 15px;
        }
        a {
            color: #3490dc;
            text-decoration: none;
            font-size: 18px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Teste Técnico Laravel</h1>

        <ul>
            <li><a href="{{ route('bemvindo') }}">Desafio 2: Rotas, Controller e Blade</a></li>
            <li><a href="{{ route('tarefas') }}">Desafio 3: Lista Dinâmica com Livewire</a></li>
            <li><a href="{{ route('produtos') }}">Desafio 4: Lista Interativa com Vue.js</a></li>
            <li><a href="/admin">Desafio 5: Filament Admin Panel</a></li>
            <li><a href="{{ route('dashboard') }}">Desafio 6: Página Autenticada com Blade</a></li>
        </ul>
    </div>
</body>
</html>

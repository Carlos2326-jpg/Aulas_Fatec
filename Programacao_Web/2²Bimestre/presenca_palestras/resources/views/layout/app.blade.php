<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            max-width: 900px;
        }

        header,
        footer {
            margin: 10px 0;
        }

        .flash {
            padding: 10px;
            border: 1px solid #cfc;
            background: #efe;
        }

        .erro {
            color: #b00;
            border-collapse: collapse;
        }

        form>div {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            background: #f7f7f7;
        }

        th,
        td {
            border: 1px, solid #ddd;
            padding: 8px;
        }

        a.button,
        button {
            display: inline-block;
            padding: 8px 12px;
            border: 1px solid #ccc;
            background: #eee;
            text-decoration: none;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Sistema de Presença - Palestras</h1>

        <nav>
            <a href="{{ route('palestras.index') }}">Listar</a>
            <a href="{{ route('palestras.create') }}">Novo Palestra</a>
        </nav>
    </header>

    @if (session('sucesso'))
        <div class="flash"></div>
    @endif

    @yield('content')

    <footer>
        <small>Fatec Prudente - Produção Wev (Laravel)</small>
    </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>🎓 Integrantes da Dupla</h1>

        <div class="integrantes">
            @foreach ($integrantes as $index => $integrante)
                <div class="integrante">
                    <strong>{{ $index + 1 }}.</strong> {{ $integrante }}
                </div>
            @endforeach
        </div>

        <div class="badge">
            Total: {{ count($integrantes) }} integrante(s)
        </div>
    </div>
</body>

</html>

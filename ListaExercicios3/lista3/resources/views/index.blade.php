<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <title>Lista de Exercicios 3</title>
</head>
<body>
    <form method="post" action="" id="sum">
        <h2>Soma</h2>
        <div>
            <label for="sum1">Primeiro Valor:</label>
            <input type="number" id="sum1"></input>
        </div>
        <div>
            <label for="sum2">Segundo Valor:</label>
            <input type="number" id="sum2"></input>
        </div>
    </form>
</body>
</html>
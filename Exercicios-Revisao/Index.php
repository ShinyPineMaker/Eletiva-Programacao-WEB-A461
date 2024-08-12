<?php require "functions.php"; ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
 </head>
 <body>
    <form name="form[diferencahora]" action="Index.php" method="POST">
        <p>Calcular Diferença entre Horários: </p>
        <div>
            <label for="entrada">Horário de Entrada: </label>
            <input type="number" name="hrentrada">
        </div>
        <div>
            <label for="saida">Horário de Saída</label>
            <input type="number" name="hrsaida">
        </div>
        <input type="submit" value="enviar horário">
    </form>
    
    <?php
        if (!empty($_POST['hrentrada']) and !empty($_POST['hrsaida'])){
            echo "<p>", Diferenca($_POST['hrentrada'], $_POST['hrsaida']), "</p>";
        }
        else{
            echo "";
        }
    ?>

    <form name="form[salariosemanal]" action="Index.php" method="POST">
        <p>Calcular salário semanal: </p>
        <div>
            <label for="horastrabalhadas">Horas Trabalhadas: </label>
            <input type="number" name="horastrabalhadas">
        </div>
        <div>
            <label for="valorhora">Valor da Hora: </label>
            <input type="number" name="valorhora">
        </div>

        <input type="submit" value="calcular salário">
    </form>

    <?php
        if (!empty($_POST['horastrabalhadas']) and !empty($_POST['valorhora'])){
            echo "<p>", SalarioMensal($_POST['horastrabalhadas'], $_POST['valorhora']), "</p>";
        }
        else {
            echo "";
        }
    ?>

    <form name="form[bonusanual]" action="Index.php" method="POST">
        <p>Distribuir bônus anual: </p>
        <div>
            <label for="lucros">Lucros da Empresa: </label>
            <input type="number" name="lucros">
        </div>
        <div>
            <label for="nome_funcionario">Nome do Funcionário: </label>
            <input type="text" name="nomefuncionario">
        </div>
        <div>
            <p>Escala de Recebimento do Lucro: </p>
            <div>
                <label for="1">1</label>
                <label for="2">2</label>
                <label for="3">3</label>
                <label for="4">4</label>
                <label for="5">5</label>
            </div>
            <div>
                <input type="radio" name="escala" value="1">
                <input type="radio" name="escala" value="2">
                <input type="radio" name="escala" value="3">
                <input type="radio" name="escala" value="4">
                <input type="radio" name="escala" value="5">
            </div>
        </div>

        <input type="submit" value="distribuir bônus">
    </form>

    <?php
        if (!empty($_POST['lucros']) and !empty($_POST['escala']))
        echo "<p>", DistribuirBonusAnual($_POST['lucros'], $_POST['escala']), "</p>";
    ?>

 </body>
 </html>
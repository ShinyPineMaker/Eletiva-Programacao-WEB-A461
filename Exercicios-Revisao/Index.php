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
        <label for="entrada">Horário de Entrada: </label>
        <input type="number" name="entrada" id="hr_entrada">
        <label for="saida">Horário de Saída</label>
        <input type="number" name="saida" id="hr_saida">
        <input type="submit" value="enviar horário">
    </form>
    
    <?php
        require "functions.php";
        if ($_POST){
            echo Diferenca($_POST['entrada'], $_POST['saida']);
        }
    ?>

 </body>
 </html>
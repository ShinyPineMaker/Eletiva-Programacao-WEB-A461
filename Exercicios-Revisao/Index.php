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
            <input type="number" name="hrentrada" id="hr_entrada">
        </div>
        <div>
            <label for="saida">Horário de Saída</label>
            <input type="number" name="hrsaida" id="hr_saida">
        </div>
        <input type="submit" value="enviar horário">
    </form>
    
    <?php
        require "functions.php";
        if ($_POST['hrentrada'] and $_POST['hrsaida']){
            echo "<p>", Diferenca($_POST['hrentrada'], $_POST['hrsaida']), "</p>";
        }
        else{
            echo "";
        }
    ?>

 </body>
 </html>
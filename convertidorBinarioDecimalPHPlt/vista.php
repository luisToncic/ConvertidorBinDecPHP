<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="favicon.ico">
    <title>1er parcial PPR2</title>
</head>

<div class="titulo">
    <h1>Convertidora Binario a Decimal y viceversa</h1>
</div>
<body>
    
    <div class="container">
        <form  action="index.php" method="POST">
            
            <div class="entradas">
                <label for="numero">Ingrese un número:</label>
                <input type="text"  name="num" id="num" required>
                <br>
                <label for="operacion">Seleccione una operación:</label>
                <select name="tipo" id="tipo" required>
                    <option selected="true" disabled="disabled"></option>
                    <option value="1">Binario a Decimal</option>
                    <option value="0">Decimal a Binario</option>
                </select>
                <br>
                <input type="submit" value="Calcular">
            </div>
            
        </form>

        <div class="answer">
            <label for="resultado">Resultado</label>
            <h2> <?php echo $ans; ?> </h2>
        </div>
    </div>
    

</body>
</html>
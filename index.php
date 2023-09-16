<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Menção</title>
</head>

<body>

    <fieldset>
        <legend>Cálculo de média / menção</legend>

        <form action="resultado.php" method="post">
            <div class="row">
                <div class="component">
                    <label for="nota1">Nota 1</label>
                    <input type="number" max="10" name="nota1" placeholder="Digite a nota do primeiro bimestre">
                </div>
                <div class="component">
                    <label for="nota2">Nota 2</label>
                    <input type="number" max="10" name="nota2" placeholder="Digite a nota do segundo bimestre">
                </div>
            </div>
            <div class="row">
                <div class="component">
                    <label for="nota3">Nota 3</label>
                    <input type="number" max="10" name="nota3" placeholder="Digite a nota do terceiro bimestre">
                </div>
                <div class="component">
                    <label for="nota4">Nota 4</label>
                    <input type="number" max="10" name="nota4" placeholder="Digite a nota do quarto bimestre">
                </div>
            </div>
            <div class="row">
            <button type="submit">Calcular</button>
            </div>
        </form>
    </fieldset>


</body>

</html>
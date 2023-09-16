<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Resultado</title>
</head>

<body>

    <?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $nota4 = $_POST["nota4"];

    if(!$nota1 or !$nota2 or !$nota3 or !$nota4){
        echo "<h1 class='erro'> Por favor, preencha todos os campos!</h1>";
        $media = null;
    } else {
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    }

    if ($media < 5) {
        $mencao = "I";
    } else if ($media >= 5 and $media < 7) {
        $mencao = "R";
    } else if ($media >= 7 and $media < 9) {
        $mencao = "B";
    } else {
        $mencao = "MB";
    }

    ?>

    <table class="table">
        <thead>
            <th>1º Bimestre</th>
            <th>2º Bimestre</th>
            <th>3º Bimestre</th>
            <th>4º Bimestre</th>
            <th>Menção Final</th>
        </thead>
        <tbody>
                <td>
                    <?php echo $nota1 ?>
                </td>
                <td>
                    <?php echo $nota2 ?>
                </td>
                <td>
                    <?php echo $nota3 ?>
                </td>
                <td>
                    <?php echo $nota4 ?>
                </td>
                <td>
                    <?php echo $mencao ?>
                </td>
        </tbody>
        <tfoot>
            <td colspan="5">Menções de PW </td>
        </tfoot>
    </table>

</body>

</html>
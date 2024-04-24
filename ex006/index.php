<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando os dados do Formulário Retroalimentado
        $valor1 = $_POST['v1'] ?? 0 ;
        $valor2 = $_POST['v2'] ?? 0 ;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
            <h1>Somador de Valores</h1>
            <?php 
                $soma = $valor1 + $valor2;
                print "<h3> A soma entre os valores entre $valor1 e $valor2 é igual a <strong>$soma.</strong><h3>";
            ?>
    </section>
</body>
</html>
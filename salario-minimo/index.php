<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1_412;
        $sal = $_POST['sal'] ?? $minimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$sal?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo,2,",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $tot = (int)($sal/$minimo);
            $dif = $sal % $minimo;

            echo "<p>Quem recebe R\$". number_format($sal, 2, ",", ".") .  " ganha <strong> $tot salários mínimos</strong> + R\$" . number_format($dif, 2, ",", ".") . ".</p>";

        ?>
    </section>
</body>
</html>
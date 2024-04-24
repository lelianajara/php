<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_POST['dividendo'] ?? 1;
        $divisor = $_POST['divisor'] ?? 1;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" step="0.1" value="<?$dividendo?>" min="1">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?$divisor?>" step="0.1" min="1">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h1>Estrutura da divisão</h1>
        <?php 
            //Calculando
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor; ?>

            <table class="divisao">
                <tr>
                    <td><?=$dividendo?></td>
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td>
                    <td><?=$quociente?></td>
                </tr>
            </table>
            
    </section>
</body>
</html>
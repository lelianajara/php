<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    //Declarando variáveis
        $num = $_POST['num'] ?? 1 ;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Digite um número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $rq = $num ** (1/2);
            $rc = $num ** (1/3);

            echo "<p>Analisando o número <strong>$num</strong>, temos:";
            print "<ul><li> A sua raíz cúbica é $rc</li>";
            print "<li>A sua raíz quadrada é $rq</li></ul>";

        ?>
    </section>
</body>
</html>
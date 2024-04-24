<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Sorteador</h1>
    </header>
    <main>
                <?php 
                $min = $_POST ["min"];
                $max = $_POST ["max"];
                $num = mt_rand($min,$max);

                echo "<p>Gerando um número aleatório entre $min e $max...<br>";
                echo "<h3>O valor gerado é $num </h3>";
                ?>
                <button onclick="javascript:document.location.reload()">Gerar outro</button>
                <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
            </form>
        </section>
    </main>
</body>
</html>
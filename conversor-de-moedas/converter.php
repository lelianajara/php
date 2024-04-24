<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de moedas v1.0</h1>
    </header>
    <main>
        <section>
                
                <?php 
                #versão simples
                    $real = $_POST["reais"] ?? 0;
                    $cotacao = 5;
                    $dolar = $real/ $cotacao ?? 0;
                    echo "Seus R\$". number_format($real,2, ",",".") . " equivalem a <strong>US$</strong>". number_format($dolar,2, ",", ".");
                ?>
                <button onclick="javascript:history.go(-1)">Voltar</a></button>
            </form>
        </section>
    </main>
</body>
</html>
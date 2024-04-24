<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <?php 
            $numero = $_POST["numero"];
            $ante = $numero-1;
            $suce = $numero+1;

            echo "O número escohido foi <strong>$numero</strong>";
            echo "<br> O seu <em>antecessor</em> é $ante";
            echo "<br> O seu <em>sucessor</em> é $suce";
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>
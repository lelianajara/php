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
                    //cotação vinda do api
                    $inicio = date("m-d-Y", strtotime("-7 days"));
                    $fim = date("m-d-Y");

                    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                    $dados = json_decode(file_get_contents($url), true);

                    //var_dump($dados);

                    $cotacao = $dados["value"] [0] ["cotacaoCompra"]; 
                
                
                    $real = $_POST["reais"] ?? 0;
                    $dolar = $real/ $cotacao ?? 0;
                    echo "Seus R\$". number_format($real,2, ",",".") . " equivalem a <strong>US$</strong>". number_format($dolar,2, ",", ".");
                ?>
                <button onclick="javascript:history.go(-1)">Voltar</a></button>
            </form>
        </section>
    </main>
</body>
</html>
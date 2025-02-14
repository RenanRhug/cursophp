<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
        // cotação do google
        $cotacao = 5.76;

        // Quanto $$ você tem?
        $real = $_REQUEST["din"]?? 0;

        // Equivalência em dólar
        $dolar = $real / $cotacao;

        // Mostrar resultado
        // Formatação de moedas com internacionalização!
        // Biblioteca intl (internallization PHP)
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo" Seus " . numfmt_format_currency($padrao, $real, "BRL") .  "  equivalem " . numfmt_format_currency($padrao, $dolar, "USD");

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
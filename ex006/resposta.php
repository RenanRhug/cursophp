<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Resultado do Processamento</h1>
    <main>
        <?php 

        $n = $_REQUEST["num"] ?? 0;
        $a = $n - 1;
        $s = $n + 1;
        echo "O número escolhido foi <strong>$n</strong>";
        echo "<br> O seu antecessor é <strong>$a</strong>";
        echo "<br> O seu sucessor é <strong>$s</strong>"
        ?>
         <p>
        <p><a href="javascript:history.go(-1)">Voltar a página anterior</a></p>
    </p>
    </main>

</body>
</html>
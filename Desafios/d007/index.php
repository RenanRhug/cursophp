<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolução de Salários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $min = 1_514.00;
    $salario = $_GET['sal'] ?? 0;
    ?>
    <main>
        <h1>Informe o seu Salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário R$</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário minimo atual em <strong>R$<?=number_format($min, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
        $tot = intdiv($salario, $min);
        $dif = $salario % $min;

        echo"<P> Ganha $tot salários mínimos +  R\$ ". number_format($dif, 2 , ",", ".").".</p>"
        ?>
    </section>
</body>
</html>
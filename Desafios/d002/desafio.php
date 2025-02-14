<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Sort de números</h1>
        <?php 
        $min = 0; 
        $max = 1000;
        $num = mt_rand($min, $max);
        echo"<p> Sorteio de números entre $min e $max, <br> O número sorteado foi <strong> $num </strong></p>";

        ?>
    <button onclick="javascript:document.location.reload()">&#x1F504; Gere outro</button>
    </main>
</body>
</html>
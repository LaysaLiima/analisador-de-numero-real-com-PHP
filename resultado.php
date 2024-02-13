<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Analisador de número real</h1>
    
    <?php
    $n = $_POST["num"];

    echo "<p>Analisando o número <strong>" . number_format($n , 3 , "," , ".") . "</strong> informado pelo usuário:</p>";

    $int = (int) $n;
    $dec = $n - $int; 

    echo "<ul><li>A parte inteira do número é <strong>" . number_format($int, 0 , "," , ".") ."</strong></li>";
    echo "<li>A parte decimal do número é <strong>" . number_format($dec, 3 , "," , ".") ."</strong></li></ul>";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>
</html>
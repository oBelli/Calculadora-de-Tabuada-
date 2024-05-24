<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Tabuada</title>
   <link rel="stylesheet" href="calculadora.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {
            $numero = intval($_POST['numero']);
 
            echo "<h1>Tabuada do $numero</h1>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<li>$numero x $i = $resultado</li>";
            }
            echo "</ul>";
        } 
    ?>
</body>
</html>
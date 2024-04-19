<!DOCTYPE html>
<html>
<head>
    <title>Números Primos Aleatorios</title>
</head>
<body>

<?php
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Si se envió el formulario, generar números primos aleatorios
    $cantidad = $_POST["cantidad"];
    echo "<h2>Números Primos Generados:</h2>";
    echo "<ul>";
    $generados = 0;
    while ($generados < $cantidad) {
        $numero = rand(2, 100); // Generar un número aleatorio entre 2 y 100
        if (esPrimo($numero)) {
            echo "<li>$numero</li>";
            $generados++;
        }
    }
    echo "</ul>";

    // Agregar enlace para volver al formulario
    echo "<a href='" . $_SERVER["PHP_SELF"] . "'>Volver al formulario</a>";
} else {
    // Si no se envió el formulario, mostrar el formulario
    echo "<h2>Generar Números Primos Aleatorios</h2>";
    echo "<form method='post' action='" . $_SERVER["PHP_SELF"] . "'>";
    echo "<label for='cantidad'>Cantidad de Números:</label>";
    echo "<input type='number' id='cantidad' name='cantidad' min='1' max='10' required>";
    echo "<button type='submit'>Generar</button>";
    echo "</form>";
}
?>

</body>
</html>

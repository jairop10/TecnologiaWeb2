<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1</title>
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

    if (isset($_POST['cantidad'])) {
        // Si se envió el formulario, generar números primos aleatorios
        $cantidad = $_POST['cantidad'];
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
    }
    ?>

    <form method="POST" action="">
        <label for="cantidad">Cantidad de Números Primos:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" max="10" required>
        <button type="submit">Generar</button>
    </form>
</body>
</html>

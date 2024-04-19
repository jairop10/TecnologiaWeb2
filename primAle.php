<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulario 1 </title>
</head>
<body>
    <?php
    function esPrimo($numero) {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        if (esPrimo($numero)) {
            echo "El número ingresado ($numero) es primo.<br>";
        } else {
            echo "Error: El número ingresado ($numero) no es primo.<br>";
        }
    }
    ?>
    <form method="POST" action="">
        <label for="numero">Introduce un número primo:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>


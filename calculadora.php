<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];

if ($operacion == "suma") {
    $resultado = $num1 + $num2;
} elseif ($operacion == "resta") {
    $resultado = $num1 - $num2;
} elseif ($operacion == "multiplicacion") {
    $resultado = $num1 * $num2;
} elseif ($operacion == "division") {
    $resultado = $num1 / $num2;
}

echo "El resultado de la operación es: " . $resultado;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="calculadora.php">
    <input type="text" name="operando1">
    <select name="operador">
        <option value="+"> + </option>
        <option value="-"> - </option>
        <option value="*"> * </option>
        <option value="/"> / </option>
    </select>
    <input type="text" name="operando2">
    <input type="submit" value="Calcular">
</form>
<?php
$operando1 = $_GET['operando1'];
$operando2 = $_GET['operando2'];
$operador = $_GET['operador'];

if ($operador == "+") {
    $solucion = $operando1 + $operando2;
} elseif ($operador == "-") {
    $solucion = $operando1 - $operando2;
} elseif ($operador == "*") {
    $solucion = $operando1 * $operando2;
} elseif ($operador == "/") {
    if ($operando2 != 0) {
        $solucion = $operando1 / $operando2;
    } else {
        $solucion = "Error: División por cero";
    }
}

echo "La solución es: " . $solucion;
?>

</body>
</html>
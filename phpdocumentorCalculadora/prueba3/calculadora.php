<?php


/**
 * The function "sumar" in PHP takes two parameters and returns their sum.
 * 
 * @param num1 The parameter `num1` is the first number that will be passed to the `sumar` function for
 * addition.
 * @param num2 The `num2` parameter in the `sumar` function represents the second number that will be
 * added to the first number (`num1`) when the function is called.
 * 
 * @return The function `sumar` is returning the sum of the two input parameters `` and ``.
 */
function sumar( $num1, $num2) {
    return $num1 + $num2;
}

/**
 * The function "restar" in PHP subtracts the second number from the first number and returns the
 * result.
 * 
 * @param num1  is the first number that will be subtracted from.
 * @param num2 The `num2` parameter is the second number that will be subtracted from the first number
 * (`num1`) in the `restar` function.
 * 
 * @return The function `restar` is returning the result of subtracting `` from ``.
 */
function restar( $num1, $num2) {
    return $num1 - $num2;
}

/**
 * The function "multiplicar" in PHP multiplies two given numbers and returns the result.
 * 
 * @param num1 Thank you for providing the `multiplicar` function. If you could provide the value for
 * `num1`, I can help you calculate the result of multiplying `num1` with another number.
 * @param num2 It looks like you have defined a PHP function called `multiplicar` that takes two
 * parameters, `` and ``, and returns the result of multiplying them together.
 * 
 * @return The function `multiplicar` returns the result of multiplying the two input parameters
 * `` and ``.
 */
function multiplicar( $num1, $num2) {
    return $num1 * $num2;
}

/**
 * The PHP function "dividir" divides two numbers, handling division by zero error.
 * 
 * @param num1 Thank you for providing the `dividir` function. Could you please specify the value for
 * `num1` so that I can assist you further with the division operation?
 * @param num2 It seems like you were about to provide the value for `num2` in the `dividir` function.
 * If you can provide the value for `num2`, I can help you calculate the result of dividing `num1` by
 * `num2`. Just let me know the value you
 * 
 * @return The function `dividir` returns the result of dividing `` by `` if `` is not
 * equal to 0. If `` is equal to 0, it returns the string "Error: División por cero".
 */
function dividir( $num1, $num2) {
    if ($num2 == 0) {
        return "Error: División por cero";
    }
    return $num1 / $num2;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];
    $resultado = "";

    

    switch ($operacion) {
        case "sumar":
            $resultado = sumar($num1, $num2);
            break;
        case "restar":
            $resultado = restar($num1, $num2);
            break;
        case "multiplicar":
            $resultado = multiplicar($num1, $num2);
            break;
        case "dividir":
            $resultado = dividir($num1, $num2);
            break;
        default:
            $resultado = "Operación no válida";
            break;
    }

    
    echo "<h2>Resultado: $resultado</h2>";
    echo "<a href='index.html'>Realizar otra operación</a>";
} else {
    echo "Por favor, completa el formulario.";
}
?>
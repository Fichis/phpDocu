<?php


/**
 * Undocumented function
 *
 * @param integer $num1
 * @param integer $num2
 * @return integer
 */
function sumar(int $num1,int $num2):int {
    return $num1 + $num2;
}

/**
 * Undocumented function
 *
 * @param integer $num1
 * @param integer $num2
 * @return integer
 */
function restar(int $num1,int $num2):int {
    return $num1 - $num2;
}

/**
 * Undocumented function
 *
 * @param integer $num1
 * @param integer $num2
 * @return integer
 */
function multiplicar(int $num1,int $num2):int {
    return $num1 * $num2;
}

/**
 * Undocumented function
 *
 * @param integer $num1
 * @param integer $num2
 * @return integer
 */
function dividir(int $num1,int $num2):int {
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
<?php
// Check if the numbers are set in the POST request
if(isset($_POST['num1']) && isset($_POST['num2'])) {
    // Get the numbers from POST and convert them to floats
    $n1 = floatval($_POST['num1']);
    $n2 = floatval($_POST['num2']);
    
    // Calculate the sum
    $suma = $n1 + $n2;
    
    // Display the result
    echo "La suma de $n1 y $n2 es: $suma";
} else {
    echo "Error: No se recibieron los números necesarios";
}
?>
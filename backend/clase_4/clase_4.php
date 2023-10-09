<!-- 1) Crear un variable llamada n, asignarle un valor numérico y validar si es un número
positivo. Si es un número positivo, imprimir un mensaje diciendo "El número ingresado es un
número positivo". En caso contrario, no mostrar nada. -->

<?php
$n = 5;
if ($n > 0) {
    echo "El número ingresado es un número positivo";
}

// 2) Crear una variable llamada n, asignarle un valor numérico y validar si es un número
// mayor a 1 y menor a 10. Si el número es mayor a 1 y menor a 10, imprimir un mensaje
// diciendo "El número ingresado es mayor a 1 y menor a 10". En caso contrario, no mostrar
// nada.

$n = 5; 
if ($n > 1 && $n < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10";
}


// 3) Crear una variable llamada n, asignarle un valor numérico y validar si es un número
// mayor o igual a 10 o menor a 2. Si el número es mayor o igual a 10 o menor a 2, imprimir un
// mensaje diciendo "El número ingresado es mayor o igual a 10 o menor a 2". En caso
// contrario, mostrar un mensaje diciendo que "El número ingresado no pudo ser validado"

$n = 5; 
if ($n >= 10 || $n < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2";
} else {
    echo "El número ingresado no pudo ser validado";
}

// 4) Crear dos variables, una con el nombre numero1 y otra con el nombre numero2, y
// asignarles dos valores numéricos. Si numero1 es mayor a numero2, imprimir la suma y la
// resta. Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división
// entera y el resto. Si numero1 y numero2 son iguales, imprimir el mensaje "Los números
// ingresados son iguales".

$numero1 = 5;
$numero2 = 10;

if ($numero1 > $numero2) {
    echo "La suma es: " . ($numero1 + $numero2) . "<br>";
    echo "La resta es: " . ($numero1 - $numero2) . "<br>";
} elseif ($numero2 > $numero1) {
    echo "La multiplicación es: " . ($numero1 * $numero2) . "<br>";
    echo "La división entera es: " . ($numero1 / $numero2) . "<br>";
    echo "El resto es: " . ($numero1 % $numero2) . "<br>";
} else {
    echo "Los números ingresados son iguales";
}



?>


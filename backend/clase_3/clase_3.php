<?php


//1. Imprima por pantalla: "Hola mundo"

echo "Hola Mundo!";

//2) Cargue en una variable (asignar) la cadena de caracteres "Hola mundo" y luego la
//imprima por pantalla

echo "<br>";    

$variable = "Hola Mundo";

echo $variable;

// 3) Crear dos variables enteras y mostrar por pantalla:
// - La suma
// - La resta
// - La multiplicación
// - La división entera
// - El resto de la división entera

echo "<br>";    

$var1 = 5;
$var2 = 2;

echo $var1 + $var2;
echo $var1 - $var2;
echo $var1 * $var2;
echo $var1 / $var2;
echo $var1 % $var2;

// 4) Realizar la transformación de grados Celsius a Fahrenheit para el Valor 20°C y luego lo
// imprima por pantalla.


$gradosCelsius = 20;

$gradosFahrenheit = ($gradosCelsius * 9/5) + 32;

echo "<br>";

echo $gradosFahrenheit;


// 5) Implementar el código que permita:
// - Calcular e imprimir el perímetro y el área de un rectángulo con base de 18cm y
// altura 12cm.
// - Calcular e imprimir el perímetro y el área de un círculo dado que su radio es de
// 30cm.


$base = 18;
$altura = 12;

$perimetro = $base * 2 + $altura * 2;
$area = $base * $altura;

echo "<br>";

echo "El perimetro es: " . $perimetro . " y el area es: " . $area;

echo "<br>";

$radio = 30;

$perimetro = 2 * pi() * $radio;
$area = pi() * pow($radio, 2);

echo "El perimetro es: " . $perimetro . " y el area es: " . $area;



?>
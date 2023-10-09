<!-- Crear un archivo y mediante estructuras de repetición, realizar los siguientes
ejercicios:
1) Mostrar los números del 1 al 9.
2) Mostrar los números del 9 al 1.
3) Mostrar los números pares del 1 al 20.
4) Mostrar los números impares del 1 al 20.
5) Mostrar la suma de los números del 1 al 20.
6) Mostrar la suma de los números pares del 1 al 20. -->

<?php

// 1) Mostrar los números del 1 al 9.
echo "1) Mostrar los números del 1 al 9.<br>";
for ($i=1; $i < 10; $i++) { 
    echo $i . "<br>";
}

// 2) Mostrar los números del 9 al 1.

echo "2) Mostrar los números del 9 al 1.<br>";
for ($i=9; $i > 0; $i--) { 
    echo $i . "<br>";
}

// 3) Mostrar los números pares del 1 al 20.

echo "3) Mostrar los números pares del 1 al 20.<br>";
for ($i=1; $i <= 20; $i++) { 
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}

// 4) Mostrar los números impares del 1 al 20.

echo "4) Mostrar los números impares del 1 al 20.<br>";
for ($i=1; $i <= 20; $i++) { 
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
}

// 5) Mostrar la suma de los números del 1 al 20.

echo "5) Mostrar la suma de los números del 1 al 20.<br>";
$suma = 0;
for ($i=1; $i <= 20; $i++) { 
    $suma += $i;
}
echo "La suma es: " . $suma . "<br>";

// 6) Mostrar la suma de los números pares del 1 al 20.

echo "6) Mostrar la suma de los números pares del 1 al 20.<br>";
$suma = 0;
for ($i=1; $i <= 20; $i++) { 
    if ($i % 2 == 0) {
        $suma += $i;
    }
}
echo "La suma es: " . $suma . "<br>";


?>


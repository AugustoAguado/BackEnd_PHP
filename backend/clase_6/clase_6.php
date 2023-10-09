<!-- 1. Obtener y mostrar el resultado del factorial de 8 (investigar que es el factorial y no
utilizar gmp_fact, solamente estructuras de repetición). -->

<?php

echo "1. Obtener y mostrar el resultado del factorial de 8 (investigar que es el factorial y no
utilizar gmp_fact, solamente estructuras de repetición).<br>";

$factorial = 1;
for ($i = 1; $i <= 8; $i++) {
    $factorial *= $i;
}
echo "El factorial de 8 es: $factorial<br>";






?>
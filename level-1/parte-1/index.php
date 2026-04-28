<?php
$num1 = 0;
$num2 = 0;
$op = 0;

function calcular (int|float $num1 , int|float $num2 , int $op): string { 
    switch ($op) {
      case 1 :
          $resultado = "El resultado de la suma es: " . ($num1 + $num2);
          break;
      case 2 :
          $resultado = "El resultado de la resta es: " . ($num1 - $num2);
          break;
      case 3 :
          $resultado = "El resultado de la multiplicacion es: " . ($num1 * $num2);
          break;
      case 4 :
          if ($num2 == 0) {
              throw new Exception("ERROR: No se puede Dividir por Cero (0)");
          } else {
              $resultado = "El resultado de la division es: " . ($num1 / $num2);
          } 
          break;      
      default: 
           throw new Exception("Operacion no valida");
    }  
   return $resultado;
}

$num1 = (float) readline("Introduce un Numero ");

$num2 = (float) readline("Introduce un Segundo Numero ");

$op = (int) readline(
"Elige una opcion\n
1. Suma\n
2. Resta\n
3. Multiplicacion\n
4. Division\n
opcion:");

try {
    echo calcular ($num1, $num2, $op);
} catch (Exception $errorDeDivision) {
    echo $errorDeDivision -> getMessage();
}

?> 
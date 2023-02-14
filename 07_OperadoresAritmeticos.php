<?php
/* La jerarquía de operadores determina el orden en el que se resuelven 
las expresiones cuando se involucran operaciones aritméticas como la suma, 
resta, multiplicación, division, potencia, modulo de la division. 

Cuando dos operadores tienen el mismo nivel de prioridad dentro de una 
expresión se evalúan de izquierda a derecha*/

$numero1 = 8;
$numero2 = 2;

#Sumas
echo $numero1 + $numero2; //Sumando 2 variables
echo "<br>";
echo $suma = $numero1 + $numero2; //Almacenando el resultado en otra variable
echo "<br>";
$suma = $numero1 + $numero2;
echo $suma;
echo "<br>";
echo $numero2 + 15; //Sumando una variable con un entero
echo "<br>";

#Restas
echo $resta = $numero1 - $numero2;
echo "<br>";

#Multiplicación
echo $multiplicacion = $numero1 * $numero2;
echo "<br>";

#División
echo $division = $numero1 / $numero2;
echo "<br>";

#Exponenciación mediante el uso de pow o **
echo pow($numero1,$numero2);

echo "<br>";

#Resto - modulo
echo $modulo = $numero1 % $numero2;
echo "<br>";

#Jerarquía
$resultado = 7 - 4 + ($numero1*$numero2)/$numero2;
echo $resultado;
<?php
//Comentario de una linea
#Comentario de una linea
$edad = 25.45;
$nombre = "Andres";

//Etiquetas de html
echo "<h1> Hola Mundo!! </h1> <br>" ;
echo "Hola Mundo!! <br>";

echo var_dump($edad);
?>
Ejercicios
<hr>

<?php
//Operadores
echo "Operador de multiplicacion... <br>";
echo "su resultado es <br>";

$edad = 25;
$año = 5;

echo $edad * $año;

if($edad < $año){
    echo " edad es menor <br>";
}else if($edad == 25){
    echo " edad es igual a 25 <br>";
}else if($edad == 10){
    //ejecutar otra instruccion
}
?>
<?php

$edad = 15;
$año = 11;

switch($edad){
    case 10:echo "Es igual a 10 <br>";break;
    case 15:echo "Es igual a 15 <br>";break;
    case 20:echo "Es igual a 20 <br>";break; 
}
?>
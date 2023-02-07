<?php
//Concatenar unir textos --variables --constantes
$nombre = "Carlos";
$pais = "El salvador";
echo $nombre. $pais;
?>
<br>
<?php
//Concatenar unir textos --variables --constantes
$nombre = "Carlos";
$pais = "El salvador";
#almacenando en una variable
$resultado = $nombre. $pais;
echo $nombre. $pais;
?>
<br>
<?php
//Agregando una tercer variable
$nombre = "Carlos";
$pais = "El salvador";
$numero = 7;
#almacenando en una variable
$resultado = $nombre. $pais. $numero;
echo $resultado;
?>
<br>
<?php
//Agregando una tercer variable
$nombre = "Carlos";
$pais = "El salvador";
$numero = 7;
#almacenando en una variable
$resultado = $nombre. $pais. $numero;
#Concatenando con string
echo "Mi nombre es: ". $nombre;
?>
<br>
<?php
//Agregando una tercer variable
$nombre = "Carlos";
$pais = "El salvador";
$numero = 7;
#almacenando en una variable
$resultado = $nombre. $pais. $numero;
#Concatenando con string --variable --string
echo "Mi nombre es: ". $nombre. " mi pais de residencia es";
?>
<br>
<?php
//Agregando una tercer variable
$nombre = "Carlos";
$pais = "El salvador";
$numero = 7;
#almacenando en una variable
$resultado = $nombre. $pais. $numero;
#Interpolacion de variables, no funciona con comillas simples, podemos usar {variables}
echo "Mi nombre es: $nombre mi pais de residencia es $pais";
?>
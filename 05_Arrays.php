<?php
/*Array de tipo escalar, PHP asigna automaticamente una posicion
iniciando en 0 
Carlos = 0, Jose = 1, Vanessa = 2, Katy = 3.
*/
$estudiantes = array ("Carlos", "Jose", "Vanessa", "Katy");
#podemos modificar sus valores variable > posicion > nuevo valor
$estudiantes [3] = "Claudia";
#Muestra en pantalla la posicion 3, en este caso Katy
echo $estudiantes [3];
?>
<br>
<?php
#Notacion actual
$estudiantes = ["Carlos", "Jose", "Vanessa", "Katy", 7];
echo $estudiantes [3];
?>
<br>
<?php
/*Array de tipo escalar asociativo
Asignacion de valor a nombre =>, 
nombre tiene un valor asociado Carlos
apellido tiene valor asociado Alfaro
edad tiene el valor asociado 27*/
$tutor = ["nombre" =>"Carlos", "apellido" => "Alfaro", "edad" => 27];
#podemos modificar sus valores
$tutor ["nombre"] = 19;
echo $tutor ["nombre"];
//retorba Carlos, pero la linea 27 lo reemplazo y retorna 19
?>
<br>
<?php
/*Array de multiples dimensiones
*/
$tutor_2 = [
    "nombre"=>"Vanessa",
    "apellido"=> "Calles",
    "edad"=>20,
    "cursos"=>["PHP","Python","CSS"]//segundo array dentro del principal, en este caso es un array de 2 dimensiones
];
echo $tutor_2["cursos"][1];
?>
<br>
<?php
/*Array de multiples dimensiones
*/
$tutor_3 = [
    "nombre"=>"Vanessa",
    "apellido"=> "Calles",
    "edad"=>20,
    "cursos"=>["nombre"=>"Vanessa","apellido"=> "Calles","edad"=>20]//segundo array de tipo asociativo
];
echo $tutor_3["cursos"]["apellido"];
?>
<br>
<?php
/*Array de multiples dimensiones
*/
$tutor_3 = [
    "nombre"=>"Vanessa",
    "apellido"=> "Calles",
    "edad"=>20,
    "cursos"=>["nombre"=>"Vanessa","apellido"=> "Calles","edad"=>20]//segundo array de tipo asociativo
];
//modificando su valor 
$tutor_3 ["cursos"][1]="Javascript";
echo $tutor_3["cursos"][1];
?>
<br>
<?php
/*Array de multiples dimensiones
*/
$tutor_3 = [
    "nombre"=>"Vanessa",
    "apellido"=> "Calles",
    "edad"=>20,
    "cursos"=>["nombre"=>"Vanessa","apellido"=> "Calles","edad"=>20]//segundo array de tipo asociativo
];
//Agregando nuevos elementos
$tutor_3 ["pais"] ="El Salvador";
echo $tutor_3["pais"];
?>
<br>
<?php
/*Array de multiples dimensiones
constante COUNT_RECURSIVE --segundo argumento funcion count()
*/
$estudiantes = ["Carlos", "Jose", "Vanessa", "Katy", 7];
echo count($estudiantes);//retorna 5 
?>
<br>
<?php
/*Array de multiples dimensiones
constante COUNT_RECURSIVE --segundo argumento funcion count()
*/
#contar todos los elementos incluyendo array dentro de la misma
$tutor_3 = [
    "nombre"=>"Vanessa",
    "apellido"=> "Calles",
    "edad"=>20,
    "cursos"=>["nombre"=>"Vanessa","apellido"=> "Calles","edad"=>20]//segundo array de tipo asociativo
];
echo count($tutor_3,COUNT_RECURSIVE);//retorna 7
?>
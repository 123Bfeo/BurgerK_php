<!--Primeros pasos en PHP VARIABLES-->
<?php

$variableNom  = "Luis David Nunez";
$numEdad = 27;
//echo "hola ".$variableNom.""."tu edad es: ".$numEdad;

$valor1 = 185;
$valor2 =10;

$resul = $valor1 - $valor2;

//echo $resul;
?>

<!--Primeros pasos en PHP CONSTANTE definicion-->
<!--el valor de una constante se mantendra a lo largo de la ejecucion 
esto quiere decir que no se puede modificar
-->
<?php 
define("const1", 15);
$varible2 = 10;

$suma = const1 + $varible2;
//echo $suma;

?>

<!--Primeros pasos en PHP BUCLES FOR-->
<?php 

$nombre = 'Luis David';
$array = array(1,2,3,"casa",$nombre,true);

$longitud = count($array);

for($i=0; $i<$longitud; $i++){
   // echo $array[$i];
   // echo '<br>';
};

?>


<!--Primeros pasos en PHP BUCLES FOREACH-->
<?php 

$nombre1 = 'Luis David';
$array1 = array(1,2,3,"casa",$nombre,true);

$longitud1 = count($array);

foreach($array as $valor){
 //echo $valor."<br>";
}

?>



<!--Primeros pasos en PHP FUNCTION-->
<?php 
$arrayFrutas = array("Manzana","Papaya","Mango","Limon","Ubas");

function recorredor($arrayValue){
    foreach($arrayValue as $value){
        //echo $value.':'."<br>";
    };
};

recorredor($arrayFrutas);

?>


<!--Primeros pasos en PHP IF-ELSE -->
<?php 
$arrayFrutas1 = array("Manzana","Papaya","Mango","Limon","Ubas");

function recorredorC($arrayValue){
    foreach($arrayValue as $value){
        //echo $value.':'."<br>";
        if($value == 'Limon'){
            // echo "El valor coincide";
            return;
        }
    };
};

recorredorC($arrayFrutas1);

?>

<!--Primeros pasos en PHP BUCLE WHILE-->
<?php 
$f = 1; //variable inicializada
while($f <= 10){ //condicion
    $f++; //incremento de la variable
}

//Recorriendo un array
$arrayNom = array('Luis', 'Miguel', 'Jose', 'Fredy');
$i = 0;
while($i < count($arrayNom)){
   // echo $arrayNom[$i];
    $i++;
}

?>


<!--Primeros pasos en PHP BUCLE DO-WHILE-->
<?php 
$x = 1;
do{
    //echo "Se cumple por la condicion: $x <br>";
    $x++;
}while($x <5);
?>


<!--Primeros pasos en PHP BUCLE SWITCH-->
<?php 

?>
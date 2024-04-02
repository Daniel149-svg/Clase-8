<?php
//21-3-2024
//arras 
//mapas ordenados que guardan valor con clave 

echo "<b>Arreglo</b><br>";
echo "<b>Indexado</b><br>";

//las claves son numericas 

$color ='negro';

$arrayIndexado = array(1,2,"Hola", $color);


for($i=0; $i < count($arrayIndexado); $i++){
    echo $arrayIndexado[$i]."<br>";
}


echo "<b>Arreglo asociativo<b><br>";
$arrayAsociativo = array(
    "nombre"=>"Daniel",
    "color"=>$color,
    "saludo"=>"hola"
);

foreach ($arrayAsociativo as $key => $value){
    echo "Clave: $key ---- valor: $value <br>";
}

$texto = implode("---", $arrayAsociativo);
echo $texto. "<br>";

$arrayTexto = explode("---", $texto);
print_r($arrayTexto);

echo "<br>";

echo "Total de elementos: ". sizeof
($arrayAsociativo);

array_push($arrayIndexado, "Desarrollo web");

print_r($arrayIndexado);

unset($arrayIndexado[4]);
print_r($arrayIndexado);

echo "<br>";

$arrayOrdenado = [1,2,3,4,5,6];
shuffle($arrayOrdenado);

//print_r($arrayOrdenado);

echo "<br";

sort($arrayOrdenado);
//print_r($arrayOrdenado);

$busqueda = array_search(5, $arrayOrdenado);
//echo "<br>$busqueda";

$nombres = array("Criastian", "daniel", "tania");
$elegido = array_rand($nombres);
//echo $elegido . "nombre: ". $nombres[$elegido];

$texto2 = "Cristian Tania";
$arreglo = str_split($texto2, 3);

//print_r($arreglo);

//$animales = array("oso", "perro", "tigre", "leon",);
$animales = array("nombre" => "oso", "tipo" => "pardo", "comida"=>"omnivoro", "color"=>"cafe");


print_r(json_encode($animales));


?>
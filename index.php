<?php

header('Content-Type: application/json');
header('Accept-Charset: UTF-8');

$dimension = (int) 10;
$matriz = (array) array_fill(0, $dimension, null);
$columna = (array) array_fill(0, $dimension, null);
$i = count($matriz)-1;
matriz:
if($i>=0){
    $matriz[$i] = $columna;
    $i--;
    goto matriz;
}
print_r($matriz);


$listaAnidadad = (array) [
    "INFORMACION_PERSONAL" => (array) [
        (array) [
            "NOMBRE" => (string) "Juan Diego",
            "APELLIDO" => (string) "Gonzalez Layton",
            "EDAD" => (int) 15
        ],
        (array) [
            "NOMBRE" => (string) "Jhon Freddy",
            "APELLIDO" => (string) "Perez Rojas",
            "EDAD" => (int) 16
        ],
    ],
];

array_push($listaAnidadad["INFORMACION_PERSONAL"], (array) [
    "NOMBRE" => (string) "Francisco",
    "APELLIDO" => (string) "Vargas lleras",
    "EDAD" => (int) 17
] );


print_r($listaAnidadad);
print_r(json_encode($listaAnidadad, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));





$listaASSC = (array) [
    "Nombre" => (string) "Jhon",
    "Apellidos" => (string) "Ortiz",
    "Edad" => (int) 16
];

print_r($listaASSC["Apellidos"]);



$lista = (array) [
    (string) "Jhon",
    (int) 3,
    (bool) false,
    (array) [
        "Saludar" => function(){
            return "Hola Jhon como te va";
        },
    ]
];
print_r($lista[3]["Saludar"]());





?>
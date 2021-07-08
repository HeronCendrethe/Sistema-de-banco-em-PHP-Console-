<?php 

$conta1 = [
    'Titular' => "João",
    'CPF' => '123456789',
    'DataNasc' => '123456',
];

$conta2 = [

    'Titular' => "Maria",
    'CPF' => '7894562655',
    'DataNasc'=> '789456',
];

$conta3 = [

    'Titular' => "Felipe",
    'CPF' => '789962',
    'DataNasc'=> '126842364',
];

$array = [$conta1, $conta2, $conta3];

$cont = 1;
foreach ($array as $conta){
    $cont += 1;
    echo "A o Titular da conta $cont e: " . $conta['Titular'].PHP_EOL;
   
}



<?php
require 'Funcoes.php';

$conta1 = [
    'Titular' => 'Maria',
    'ID'=> 1,
    'DataNasc' => '23/02/2009',
    'Saldo' => 500
];

$conta2 = [
    'Titular' => 'João',
    'ID'=> 2,
    'DataNasc' => '25/02/1900',
    'Saldo' => 10000

];

$conta3 = [
    'Titular' => 'José',
    'ID' => 3,
    'DataNasc' => '05/06/2000',
    'Saldo' => 200
];

$banco = [$conta1,$conta2,$conta3];


foreach ($banco as $contas){
    echo "O titular e: ".$contas['Titular']. " O saldo pos saque de 500 reais e: ". saque($contas['Saldo'],500).PHP_EOL;
    echo "O titular e: ".$contas['Titular']. " O saldo pos deposito de 500 reais e: ". deposito($contas['Saldo'],500).PHP_EOL;
}

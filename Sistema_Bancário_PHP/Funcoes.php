<?php

function saque (float $saldo, float $saque)
{
    if($saque> $saldo){
    
        echo"Saldo disponivel menor que valor do saque";
    }
    else{

        return $saldo - $saque;
    }
     
}

function deposito(float $saldo, float $saque)
{
    return $saldo + $saque;
}

<?php

$nomeTitular = "Giselle Balieiro";
$saldoAtual = 1000;

echo "***************\n";
echo "Titular: $nomeTitular\n";
echo "Saldo atual: R$ $saldoAtual\n";
echo "***************\n";

do { 
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    $opcao = (int) fgets (STDIN);

    switch ($opcao) {
        case 1:
            echo "***************\n";
            echo "Titular: $nomeTitular\n";
            echo "Saldo atual: R$ $saldoAtual\n";
            echo "***************\n";
            break;

        case 2: 
            echo "Qual valor deseja sacar?\n";
            $valorASacar = (float) fgets (STDIN);
            if ($valorASacar > $saldoAtual) {
                echo "Saldo insuficiente\n";
            }
            else {
                $saldoAtual -= $valorASacar;
            }
            break;

        case 3: 
            echo "Quanto deseja depositar?\n";
            $valorADepositar = (float) fgets (STDIN);
            $saldoAtual += $valorADepositar;
            break;

        case 4: 
            echo "Sessão encerrada!\n";
            break;

        default:
            echo "Opção inválida!\n";
            break;
    }
} 
    while ($opcao != 4);
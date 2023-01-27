<?php
    require_once('Pessoa.php');
    require_once('Cliente.php');
    require_once("Funcionario.php");
    require_once("Conta.php");
    require_once("Endereco.php");

    $enderecAllan = new Endereco(
        "Avenida Senador Vergueiro",
        "400",
        "Senacão",
        "Centro",
        "São Bernardo do Campo",
        "São Paulo",
        "SP",
        "Brasil",
        "02345000"
    );

    $clientAllan = new Cliente("12345678910","Allanzinho","11988128798",$enderecAllan,20);

    $contaAllan = new Conta($clientAllan,200);

    echo $contaAllan->getSaldo();
    echo $contaAllan->depositar($contaAllan,400);
    echo $contaAllan->getSaldo();

?>
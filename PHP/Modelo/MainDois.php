<?php
    namespace PHP\Modelo;

    require_once('Pessoa.php');
    require_once('Conta/Cliente.php');
    require_once("Funcionario.php");
    require_once("Conta/Conta.php");
    require_once("Endereco.php");

    use PHP\Modelo\Conta\Cliente;
    use PHP\Modelo\Conta\Conta;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Pessoa;

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

    echo "<br><br>Taxa da Conta R$ ".$clientAllan->getTaxa();
    echo $clientAllan->setTaxa(100);
    echo "<br><br>Taxa da Conta R$ ".$clientAllan->getTaxa();

    echo $clientAllan;//Imprimi os dados, utilizando o TOSTRING
    echo $clientAllan->taxa;
    echo $clientAllan->taxa = 200;

    $func = new Funcionario('112','Allanzinho','11',$enderecAllan,'1','15000','Professor');
    echo $func;

    echo "<br><br><br>";
    echo $func->salario;//USO DO GET, BASTA COLOCAR O NOME DA VARIÁVEL NA FRENTE DA SETA... (->)

    echo "<br><br><br>";
    $func->salario = 16000;
    echo "<br>Novo Salário: ".$func->cpf;
    echo "<br>".$func->calcular();
    echo "<br>".$clientAllan->calcular();

    /*
    echo "<br><br><br>";
    $person = new Pessoa('123','Gabriela','11111',$enderecAllan);
    echo $person->nome;
    */








    



?>
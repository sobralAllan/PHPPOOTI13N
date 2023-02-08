<?php
    namespace PHP\Modelo;

    require_once("DAO/Consultar.php");
    require_once("DAO/Conexao.php");

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;
    $consul = new Consultar();
    $conexao = new Conexao();
?>
    <!Doctype HTML>
    <HTML>
        <HEAD>
            
        </HEAD>
        <BODY>
            <H1> <?php $consul->consultarIndividual($conexao,"pessoa",4);?> </h1>

        </BODY>
    </HTML>


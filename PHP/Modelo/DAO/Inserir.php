<?php
    namespace PHP\Modelo\DAO;

    require_once('Conexao.php');

    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        
        public function cadastrar(
            Conexao $conexao, 
            string $nomeDaTabela, 
            string $nome, 
            string $telefone)
        {
            try{
                $conn = $conexao->conectar();//Abrindo a conexão com o banco
                $sql  = "insert into $nomeDaTabela (codigo, nome, telefone) 
                values ('','$nome','$telefone')";//Escrevi o script
                $result = mysqli_query($conn,$sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!
                
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do cadastrar
    }//fim da classe
?>

<!Doctype HTML>
<HTML>
    <HEAD>

    </HEAD>
    <BODY>
        <form method="POST">
            <label>Nome: </label>
            <input type="text" name="tNome" placeholder="Informe seu nome"/><br><br>

            <label>Telefone: </label>
            <input type="text" name="tTelefone" placeholder="1199999-9999"/><br><br>

            <button>Cadastrar</button>

            <?php 
                if($_POST['tNome'] != "" && $_POST['tTelefone'] != ""){
                    $conexao = new Conexao();
                    $cadast  = new Inserir();
                    echo $cadast->cadastrar($conexao, "pessoa", $_POST['tNome'], $_POST['tTelefone']);
                    return;
                }
                echo "Preencha os campos!";
            ?>
        </form>
        <a href="Consultar.php"><button>Consultar</button></a>
    </BODY>
</HTML>
<?php
class Conta{
    //área de variáveis
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldoTitular;

    public function __construct(string $cpf, string $nome, float $saldo)
    {
        $this->setCPF($cpf);
        $this->setNome($nome);
        $this->setSaldo($saldo); 
    }//fim do construtor

    //Métodos de acesso e modificação
    public function getCPF() : string
    {
        return $this->cpfTitular;
    }//fim do getCPF

    public function getNome() : string{
        return $this->nomeTitular;
    }//fim do getNome

    public function getSaldo() : float
    {
        return $this->saldoTitular;
    }//fim do getSaldo

    public function setCPF(string $cpf) : void
    {
        $this->cpfTitular = $cpf;
    }//fim do setCPF

    public function setNome(string $nome) : void
    {
        $this->nomeTitular = $nome;
    }//fim do setNome

    public function setSaldo(float $saldo) : void
    {
        $this->saldoTitular = $saldo;
    }//fim do setSaldo

    public function sacar(Conta $cont, float $valor) : void
    {
        if($cont->getSaldo() >= $valor){
            $cont->setSaldo($cont->getSaldo()-$valor);
            return;//Parar a execução do método
        }
        echo "<br>Não é possível sacar $valor, pois a conta tem apenas ".$cont->getSaldo()."<br>";
    }//fim do sacar

    public function depositar(Conta $cont, float $valor) : void
    {
        if($valor > 0){
            $cont->setSaldo($cont->getSaldo()+$valor);
            echo "<br>Depósito realizado com sucesso!<br>";
            return;
        }
        echo "<br>Impossível depositar, algo deu errado!<br>";
    }//fim do depositar

    public function transferir(Conta $saque, Conta $transf, float $valor) : void 
    {
        if($valor > 0){
            $saque->sacar($saque,$valor);
            $transf->depositar($transf,$valor);
            echo "<br>Transferido com sucesso!<br>";
            return;
        }
        echo "<br>Impossível realizar a transferência!<br>";
    }//fim do tranferir

    //Mostrar na tela os detalhes da conta
    public function imprimir() : void
    {
        echo "<br>CPF: ".$this->getCPF()."<br>Nome: ".$this->getNome()."<br>Saldo: R$".$this->getSaldo();
    }//fim do imprimir





}//fim da classe conta
?>
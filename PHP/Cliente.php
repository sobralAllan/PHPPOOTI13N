<?php
    require_once("Endereco.php");

    class Cliente extends Pessoa{
        private float $taxa;

        public function __construct(
            string $cpf, 
            string $nome, 
            string $telefone, 
            Endereco $endereco,
            float $taxa
            )
        {
            parent::__construct($cpf, $nome, $telefone, $endereco);//Chame a classe Pessoa
            $this->taxa = $taxa;
        }//fim do construtor

        //Método get e Set
        public function getTaxa() : float
        {
            return $this->taxa;
        }//fim do taxa

        public function setTaxa(float $taxa) : void
        {
            $this->taxa = $taxa;
        }//fim do método
    }//fim da classe
?>
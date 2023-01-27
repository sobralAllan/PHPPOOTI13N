<?php
    namespace PHP\Modelo;

    require_once("Endereco.php");

    class Funcionario extends Pessoa{
        public string $matricula;
        public float  $salario;
        public string $cargo;

        public function __construct(
            string $cpf,
            string $nome,
            string $telefone,
            Endereco $endereco,
            string $matricula,
            float $salario,
            string $cargo
        )
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->matricula = $matricula;
            $this->salario   = $salario;
            $this->cargo     = $cargo;
        }//fim do construtor

        //Métodos Gets e Sets
        public function getMatricula() : string
        {
            return $this->matricula;
        }//fim da matricula

        public function setMatricula() : void
        {
            $this->matricula = $matricula;
        }//fim da matricula

        public function getSalario() : float
        {
            return $this->salario;
        }//fim do salario

        public function setSalario() : void
        {
            $this->salario = $salario;
        }//fim do salario

        public function getCargo() : string
        {
            return $this->cargo;
        }//fim do cargo

        public function setCargo() : void
        {
            $this->cargo = $cargo;
        }//fim do cargo
    }//fim do Funcionario
?>
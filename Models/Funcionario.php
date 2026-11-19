<?php 

require_once __DIR__ . "/config/conexao.php";


    abstract class funcionario{
        protected $nome;
        protected $email; 
        private $salario;
        

        public function __construct(
            $nome,
            $email,
            $salario
            
        ){
            $this-> nome = $nome;
            $this-> email = $email;
            $this-> salario = $salario;
            
        }
        }

        abstract public function calcularBonus();

        public function exibirStatus(){
            return [
                "nome" => $this -> nome,
                "email" => $this -> email,
                "salario" => $this -> salario,
            ];
        

        //classe filha
        class FuncionarioComum extends funcionario{
            public function calcularBonus(){
                return " 5% do salário";
            }
        }  
        class Gerente extends funcionario{
            public function calcularBonus(){
                return "15% do salário";
            }
        }
        }
?>
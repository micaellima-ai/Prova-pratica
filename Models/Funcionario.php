<?php 

require_once __DIR__ . "/config/conexao.php";


    abstract class funcionario{
        protected $nome;
        protected $email; 
        protected $salario;
        
        

        public function __construct(
            $nome,
            $email,
            $salario
            
        ){
            $this->nome = $nome;
            $this->email = $email;
            $this->salario = $salario;
            
        } 


        public function getNome() {return $this->nome;}
        public function setNome($nome) {$this->nome = $nome;}
        public function getEmail() {return $this->email;}
        public function setEmail($email) {$this->email = $email;}
        public function getSalario() {return $this->salario;}
        public function setSalario($salario) {$this->salario = $salario;}


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
                return $this->salario * 0.05;
            }
        }  
        class Gerente extends funcionario{
            public function calcularBonus(){
                return $this->salario * 0.15;
            }
        }
        }

        function criarFuncionario($id, $nome, $email, $salario, $tipo){
            switch($tipo){
                case "FuncionarioComum":
                    return new FuncionarioComum($id, $nome, $email, $salario, $tipo);


                    case "Gerente":
                    return new Gerente($id, $nome, $email, $salario, $tipo);
                    
                    default:
                    return null;
            }
        }
         }
?>
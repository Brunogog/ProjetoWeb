<?php
 	class pessoa{
 		private $nome;
 		private $idade;
 		private $cpf;

 		public function setNome($nome){
 			$this-> nome = $nome;
 		}
 		public function getNome(){
 			return $this-> nome;
 		}
 		public function setIdade($idade){
 			$this-> idade = $idade;
 		}
 		public function getIdade(){
 			return $this-> idade;
 		}
 		public function setCpf($cpf){
 			$this-> cpf = $cpf;
 		}
 		public function getCpf(){
 			return $this-> cpf;
 		}
 		public function __construct($nome, $idade , $cpf){

 			$this->nome = $nome;
 			$this->idade = $idade;
 			$this->cpf = $cpf;
 			//echo " A classe ".__CLASS__." foi instanciada ";
 		}
 		public function __toString(){
 			$resultado = 
 			"Nome: ".$this->nome."<br>".
 			"Idade: ".$this->idade."<br>".
 			"CPF: ".$this->cpf. "<br>";

 			return $resultado;

 		}
 	}

?>
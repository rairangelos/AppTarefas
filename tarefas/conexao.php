<?php

class Conexao{
	private $host = 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx';
	private $dbname = 'xxxxxxxxxxxxxxxxxxxxxxxxx';
	private $user = 'xxxxxxxxxxxxxxxxxxxxxx';
	private $pass = 'xxxxxxxxxxxxxx';

	public function conectar(){
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"
			);

			return $conexao;
			
		} catch (Exception $e) {

			echo '<p>'.$e->getMessege().'</p>';	
					
		}
	}
}

?>
<?php
class User {
	private $id;
	private $nome;
	private $email;
	private $senha;
	private $ativo;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}
}

?>

<?php
//CRUD
class UserService{

	private $conexao;
	private $user;

	public function __construct(Conexao $conexao, User $user) {
		$this->conexao = $conexao->conectar();
		$this->user = $user;
	}
	
	public function inserir(){ //create


	}

	public function recuperar(){ //retrive


	}

	public function atualizar(){ //update


	}

	public function remover(){ //delete

	}

	public function validar(){ //validar LOGIN
		$sql = "select * from tb_user where email = :email and senha = :senha limit 0, 1";
		$query = $this->conexao->prepare($sql);
		$query->bindValue(':email', $this->user->__get('email'));
		$query->bindValue(':senha', $this->user->__get('senha'));

		if($query->execute() && $query->rowCount() == 1){
					session_start();
		$_SESSION["usuario"] = $query->fetch(PDO::FETCH_OBJ);
		$_SESSION["logged"] = true;
		header('location: 	views/home.php');
	        return true; 
            }

            return false;

        }

    }
    ?>
<?php
require "user.model.php";
require "user.service.php";
require "conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

if ($acao == 'inserir') {
	# code...
}else if ($acao == 'recuperar') {
	# code...
}else if($acao == 'atualizar'){

}else if($acao == 'remover'){

}else if($acao == 'validar'){
	$user = new User();
	$user->__set('email', $_POST['email']);
	$user->__set('senha', $_POST['senha']);

	$conexao = new Conexao();

	$userService = new UserService($conexao, $user);

	if($userService->validar()) {
		session_start();
		$_SESSION["usuario"] = $query->fetch(PDO::FETCH_OBJ);
		$_SESSION["logged"] = true;
		header('location: 	views/home.php');
	}else if($userService->validar() == false){
		header('location: 	index.php?log=erro');
	}

}else if($acao == 'logout'){
	session_start();
	session_destroy();
	header("location: index.php");
}

?>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>App Lista Tarefas</title>

	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center" >
				<a class="navbar-brand" href="#" align="center" style="margin: 0px auto 0px auto;">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" >
					<span>App Lista Tarefas</span> 
				</a>
			</div>
		</div>
	</nav>
	<?php if( isset($_GET['log']) && $_GET['log'] == 'erro' ): ?>
		<div class="bg-danger pt-2 text-white d-flex justify-content-center">
			<h5>Usuário ou senha inválido!!</h5>
		</div>
	<?php endif ?>
	<?php if( isset($_GET['log']) && $_GET['log'] == 'erro2' ): ?>
		<div class="bg-danger pt-2 text-white d-flex justify-content-center">
			<h5>Acesso negado, efetue LOGIN!!</h5>
		</div>
	<?php endif ?>

	<div class="container app" style="margin: 50px auto 0px auto;">
		<div class="row col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
			<div align="center" style="margin: 0px auto 0px auto;">
				<form method="POST" action="user_controller.php?acao=validar" class="col-sm-12">
					<div class="form-group">
						<label>Login:</label>
						<input type="text" name="email" class="form-control col-sm-12" placeholder="E-mail">
					</div>
					<div class="form-group" style="margin: 50px auto 0px auto;">
						<label>Senha:</label>
						<input type="password" name="senha" class="form-control" placeholder="Senha">
					</div>

					<button class="btn btn-success" style="margin: 20px auto 0px auto;">ENTRAR</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
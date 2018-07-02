<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include '../template/header.html' ?>
</head>
<body>

	<div class="alert alert-danger" role="alert">
		Falha ao efetuar login.
	</div>


	<header class="container">
		<div class="row text-center mt-3">
			<div class="col">
				<h1 class="text-light"> SSC - Sistema de Segunda Chamada</h1>
			</div>
		</div>
	</header>

	<section class="container jumbotron-fluid bg-light shadow ">
		
		<header class="row justify-content-center mt-3">
			<h2 id="login" class="mt-5">LOGIN</h2>
		</header>

		<article class="row justify-content-center">
			<div class="col-auto col-sm-6 col-md-6 col-lg-4 col-xl-4">
				<form>
					<div class="form-group">
						<input type="text" name="inputLogin" class="form-control" placeholder="Usuário">
					</div>
					<div class="form-group">
						<input type="password" name="inputPassword" class="form-control" placeholder="Senha">
					</div>
					<div class="form-row justify-content-center mb-5">
						<a href="cadastro.php" class="btn btn-danger mr-lg-3 mr-md-2 mr-sm-2">Cadastro</a>
						<button type="submit" class="btn btn-success">Entrar</button>
					</div>	

				</form>
			</div>
		</article>

	</section>

</body>
</html>
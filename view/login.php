<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include '../template/header.html' ?>
</head>
<body>

	<header class="container">
		<div class="row text-center mt-3">
			<div class="col-12 col-sm-12 col-lg-12 col-xl-12">
				<h1 class="text-light"> SSC - Sistema de Segunda Chamada</h1>
			</div>
		</div>
	</header>

	<section class="container jumbotron-fluid bg-light shadow p-3 mt-4">
		
		<header class="row text-center mt-3 mb-3">
			<div class="col">
				<h2 class="text-dark">LOGIN</h2>
			</div>
		</header>

		<article class="row justify-content-center ml-0 mr-0">
			<div class="col-auto col-sm-12 col-md-8 col-lg-6 col-xl-4">

				<form>
					<div class="form-group">
						<input type="text" name="inputLogin" class="form-control" placeholder="Usuário" required="required">
					</div>
					<div class="form-group">
						<input type="password" name="inputPassword" class="form-control" placeholder="Senha" required="required">
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
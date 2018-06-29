<!DOCTYPE html>
<html>
<head>
	<title>Segunda Chamada - Entrar</title>
	<?php include '../template/header.html'; ?>
</head>
<div class="container pt-5 mt-5">
	<header class="text-center text-light pt-5 mt-4 mb-4">
		<h1>Segunda Chamada</h1>
	</header>
	<body>
		<div class="justify-content-center pt-3 mt-4">
			<section class="pl-4 pr-4 shadow container jumbotron-fluid align-middle p-2 mb-2 bg-light text-dark col-sm-8">
				<header class="text-center mt-3 mb-3">
					<h2 id="login">Login</h2>
				</header>
				<article class="pt-3 article">
					<form class="responsive">
						 <div class="form-group row">
    						<label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    						<div class="col-sm-10">
      							<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    						</div>
  						</div>
  						<div class="pt-3 form-group row">
    						<label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
    						<div class="col-sm-10">
      							<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    						</div>
  						</div>
						<div class=" row justify-content-center">
							<a href="cadastro.php" role="button" class="mt-3 mb-2 mr-5 btn btn-danger text-light text-center col-sm-3">Cadastro</a>
							<input type="submit" name="submit" class="mt-3 mb-2 ml-5 btn btn-success col-sm-3">
						</div>
					</form>
				</article>
			</section>
		</div>
		<footer>

		</footer>
	</body>
</div>
</html>
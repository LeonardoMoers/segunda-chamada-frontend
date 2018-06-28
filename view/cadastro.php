<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<?php include '../template/header.html'; ?>
</head>
<body>
	<header>

	</header>

	<!-- Menu -->
	<!-- Menu -->

	<section class="container">
		
		<header class="text-center mt-4 mb-4">
			<h1>Cadastro</h1>
		</header>

		<div class="row justify-content-center">
		<article class="col-sm-12 col-md-10 col-lg-6 jumbotron">

			<form class="" onsubmit="validateForm()">
				<div class="form-group">
					<label for="inputNome">Insira o nome</label>
					<input type="text" name="Nome" placeholder="Nome" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="inputNome">Insira o nome</label>
					<input type="email" name="email" placeholder="E-mail" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="inputSenha">Insira sua senha</label>
					<input type="password" name="password" placeholder="Senha" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="ConfirmeinputSenha">Confirme sua senha</label>
					<input type="password" name="conf_password" placeholder="Confirme sua senha" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="inputContato">Insira seu telefone para contato</label>
					<input type="text" name="contato" placeholder="Contato" class="form-control">
				</div required>
				<div class="form-group">
					<label for="inputToken">Insira seu Token</label>
					<input type="text" name="token" placeholder="Token" class="form-control">
				</div required>


				<input type="submit" name="cad_aluno" class="btn btn-success" >
			</form>
		</article>
		</div>
	</section>

	<footer>
		
	</footer>
</body>
</html>
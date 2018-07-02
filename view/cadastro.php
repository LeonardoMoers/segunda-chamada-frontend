<!DOCTYPE html>
<head>
	<title>Cadastro - Usuário</title>
	<?php include '../template/header.html'; ?>
</head>
<body>
	<!-- Alert -->
	<div class="alert alert-danger mt-3" role="alert">
		Falha ao realizar o cadastro.
	</div>
	<div class="alert alert-success" role="alert">
		Cadastro realizado com sucesso.
	</div>
	<!-- Alert -->

	<section class="container shadow bg-light jumbotron-fluid pt-2">
		<header class="text-center mt-4 mb-4">
			<h2 class="text-dark">Cadastro de usuário</h2>
		</header>

		<article class="row justify-content-center">
			<form class="col-xl-6 col-lg-8 col-md-10 col-sm-10 col-auto">

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

				<div class="text-center mt-4">
					<button type="submit" name="inputCadastro" class="btn btn-success btn-lg mb-4"> CADASTRAR </button>
				</div>
				
			</form>
		</article>
	</section>
</body>
</html>
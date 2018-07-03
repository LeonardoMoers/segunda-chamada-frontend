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

	<section class="container jumbotron-fluid bg-light shadow p-3 mt-4">
		
		<header class="row text-center mt-3 mb-3">
			<div class="col">
				<h2 class="text-dark">Cadastro de Usuário</h2>
			</div>
		</header>

		<article class="row justify-content-center ml-0 mr-0">
			<div class="col-xl-6 col-lg-8 col-md-10 col-sm-10 col-12">
				<form>
					<div class="form-group">
						<label for="inputNome">Insira o nome</label>
						<input type="text" name="Nome" placeholder="Nome" class="form-control" required="required" required pattern="[^0-9]+$" maxlength="120" minlength="3" title="Somente caracteres">
					</div>

					<div class="form-group">
						<label for="inputNome">Insira o e-mail</label>
						<input type="email" name="email" placeholder="E-mail" class="form-control" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
					</div>

					<div class="form-group">
						<label for="inputSenha">Insira sua senha</label>
						<input type="password" name="password" placeholder="Senha" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label for="ConfirmeinputSenha">Confirme sua senha</label>
						<input type="password" name="conf_password" placeholder="Confirme sua senha" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label for="inputContato">Insira seu telefone para contato</label>
						<input type="tel" name="telefone" class="form-control" required maxlength="15" pattern="\([0-9]{2}\) [0-9]{4ca,6}-[0-9]{3,4}$"  onKeyPress="fone(this,document.form.data)" placeholder="(XX)XXXXX-XXXX" title="Digite máscara (XX)XXXXX-XXXX">
					</div>

					<div class="form-group">
						<label for="inputToken">Insira seu Token</label>
						<input type="text" name="token" placeholder="Token" class="form-control" required="required">
					</div>

					<div class="text-center mt-4">
						<button type="submit" name="inputCadastro" class="btn btn-success btn-lg mb-4"> CADASTRAR </button>
					</div>
				</form>

			</div>

		</article>
	</section>

	
</body>
</html>
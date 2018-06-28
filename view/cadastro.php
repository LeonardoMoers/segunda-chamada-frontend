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
	<?php include '../template/menu.html' ?>
	<!-- Menu -->

	<section class="container">
		<header class="col-xl-6">
			<h1>Cadastro</h1>
		</header>
		<article class="">

			<form class="col-xl-6 responsive" onsubmit="validateForm()">
				<div class="form-group">
					<input type="text" name="Nome" placeholder="Nome" class="form-control" required>
				</div>

				<div class="form-group">
					<input type="email" name="email" placeholder="E-mail" class="form-control" required>
				</div>
				<div class="form-group">
					<input type="password" name="password" placeholder="Senha" class="form-control" required>
				</div>
				<div class="form-group">
					<input type="password" name="conf_password" placeholder="Confirme sua senha" class="form-control" required>
				</div>
				<div class="form-group">
					<input type="text" name="contato" placeholder="Contato" class="form-control">
				</div required>
				<div class="form-group">
					<input type="text" name="token" placeholder="Token" class="form-control">
				</div required>

				<input type="submit" name="cad_aluno" class="btn btn-success" >
			</form>
		</article>
	</section>
	<footer>
		
	</footer>
</body>
</html>
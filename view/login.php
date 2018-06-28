<!DOCTYPE html>
<html>
<head>
	<title>Segunda Chamada - Entrar</title>
	<?php include '../template/header.html'; ?>
</head>
<body>
	<header>

	</header>
	<section class="container">
		<header>
			<h1>Segunda Chamada</h1>
		</header>
		<article class="article">
			<form class="responsive">
				<div class="form-group">
					<label for="nomeLogin">Nome</label>
					<input type="text" name="Nome" placeholder="Nome" class="form-control" required>
				</div>

				<div class="form-group">
					<label for="senhaLogin">Senha</label>

					<input type="password" name="password" placeholder="Senha" class="form-control" required>
				</div>
				<input type="submit" name="submit" class="btn btn-success" >
			</form>
		</article>
	</section>
	<footer>

	</footer>
</body>
</html>
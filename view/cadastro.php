<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<?php include '../template/header.html'; ?>
</head>
<body>
<article class="container">

<header class="col-xl-6">
	<h1>Cadastro</h1>
</header>

	<form class="col-xl-6 responsive" onsubmit="validateForm()">
						<div class="form-group">
						<input type="text" name="Nome" placeholder="Nome" class="form-control" required>
						</div>

						<div class="form-group">
						<input type="email" name="email" placeholder="email" class="form-control" required>
						</div>
						<div class="form-group">
						<input type="password" name="password" placeholder="senha" class="form-control" required>
						</div>
						<div class="form-group">
						<input type="password" name="conf_password" placeholder="conf_senha" class="form-control" required>
						</div>
						<div class="form-group">
						<input type="text" name="contato" placeholder="contato" class="form-control">
						</div required>
						<div class="form-group">
						<input type="text" name="token" placeholder="Token" class="form-control">
						</div required>
						
						

						<div class="col-lg-9"></div>
						<div class="col-lg-3">
							<input type="submit" name="cad_aluno" class="btn btn-success" >
						</div>
					</form>
</article>
</body>
</html>
<!DOCTYPE html>
<head>
	<title>Cadastro - Semestre</title>
	<?php include '../template/header.html'; ?>
	<?php include '../template/menu.html' ?>
</head>
<body>

    <div class="alert alert-danger mt-3" role="alert">
        Falha ao realizar o cadastro.
    </div>
    <div class="alert alert-success" role="alert">
        Cadastro realizado com sucesso.
    </div>
	
	<section class="container jumbotron-fluid bg-light shadow p-3 mt-4">
		
		<header class="row text-center mt-3 mb-3">
			<div class="col">
				<h2 class="text-dark">Cadastrar Semestre</h2>
			</div>
		</header>

		<article class="row justify-content-center ml-0 mr-0">
			<div class="col-sm-12 col-md-10 col-lg-8">
				<form>
					<div class="form-group">
						<label for="inputNome">Insira o semestre</label>
						<input type="text" name="Nome" placeholder="Nome" class="form-control" required="required" required pattern="[^0-9]+$" maxlength="120" minlength="3" title="Somente caracteres">
					</div>
					<div class="mt-4 text-center">
						<button type="submit" name="inputCadastro" class="btn btn-success">CADASTRAR</button>
					</div>	
				</form>
			</div>
		</article>
	</section>

    <section class="container mt-4">
		<div class="row">
			<div class="col-12">
				<hr>
			</div>
		</div>
	</section>

	<section class="container jumbotron-fluid bg-light shadow p-3 mt-4">
		<header class="row text-center mt-3 mb-3">
			<div class="col">
				<h2 class="text-dark">Semestres Cadastrados</h2>
			</div>
		</header>
		<article class="row text-center ml-0 mr-0">
		<div class="table-responsive">
			<table class="table table-hover mt-2 text-center">
				<thead>
					<tr>
						<th scope="col">Semestre</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			</div>
        </article>
	</section>

	<footer>
		<?php include '../template/footer.html' ?>
	</footer>
</body>
</html>